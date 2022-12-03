<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use App\TrusCRUD\Core\Models\AccessRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public $data = [];

    function __construct()
    {

    }

    public function index(User $model, Request $req) {


        return view('default.user.index', $this->data);
    }

    public function create(Request $req, User $model) {
        $permissions = Permission::all()->map(function($item) {
            $var = explode(' ', $item->name);
            $item->mod = ucwords(end($var));

            return $item;
        })->groupBy('mod');

        $roles = Role::all();

        $data = [
            'permissions' => $permissions,
            'roles' => $roles,
        ];

        return view('default.user.create', $data);
    }

    public function all(User $model, Request $req) {

        if($req->get('search') != '') {

            $serach = $req->get('search');

            $model = $model->where('name', "LIKE", "%$serach%");
        }

        $users = $model->withTrashed()->paginate(10);
        $this->data['users'] = $users;

        return view($this->view.'.main', $this->data);
    }

    public function edit(Role $role, $UUID='') {
        $this->data['roles'] = $role->all();

        $user = User::where('uuid', '=', $UUID)->first();

        $this->data['data'] = $user;
        $this->data['role_names'] = $user->getRoleNames();

        return view('default.user.edit',  $this->data);
    }

    public function store(Request $req, User $model) {

        try {
            DB::beginTransaction();

            if(isset($req->id)) {
                $model = User::find($req->id);

            } else {
                $model->uuid  = Str::uuid();
            }

            $model->name                = $req->name;
            $model->email               = $req->email;

            if(isset($req->id)) {
                if(isset($req->password)) {
                    $model->password            = Hash::make($req->password);
                }
            } else {
                $model->password            = Hash::make($req->password);
            }

            $model->save();

            DB::commit();

            $status     = "success";
            $message    = "Berhasil disimpan.";

        } catch (\Exception $err) {
            DB::rollBack();
            $status     = "error";
            $message    = $err->getMessage();
        }

        if($req->json == 'true') {
            return response()->json([
                'status' => $status,
                'message' => $message
            ]);
        } else {
            return redirect(route('user.index'))->with('status', $status)->with('message', $message);
        }

    }

    public function detail(User $model, Request $req, $UUID) {

        $this->data['invoice'] = $model->withTrashed()->where('uuid', $UUID)->first();

        return view($this->view.'.detail', $this->data);
    }

    public function destroy(Request $req, User $model, $UUID) {

        try {
            $model->where('uuid', $UUID)->delete();
            $status  = true;
            $message = 'Berhasil dihapus.';
        } catch (\Exception $err) {
            $status  = true;
            $message = $err->getMessage();
        }

        $output['status']   = $status;
        $output['message']  = $message;

        return response()->json($output);
    }

    function ajax(string $param) {

        switch($param) {

            case 'datatables':
                $table = DataTables::eloquent(User::query());

                $table->addColumn('_action', 'default.user.action');

                $table->addColumn('_roles', function($user) {
                    return $user->getRoleNames();
                });

                $table->rawColumns(['_action']);

                return $table->toJson();
            break;
        }
    }
}
