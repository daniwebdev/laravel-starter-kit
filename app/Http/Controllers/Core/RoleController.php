<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{

    public $data = [];

    function __construct()
    {
    }

    public function index(Role $model, Request $req)
    {


        return view('default.role.index', $this->data);
    }

    public function create(Request $req, Role $model)
    {
        $permissions = Permission::all()->map(function ($item) {
            $var = explode(' ', $item->name);
            $item->mod = ucwords(end($var));

            return $item;
        })->groupBy('mod');

        $roles = Role::all();

        $data = [
            'permissions' => $permissions,
            // 'roles' => $roles,
        ];

        return view('default.role.create', $data);
    }


    public function edit(Role $role, $UUID = '')
    {
        $this->data['roles'] = $role->all();

        $user = Role::where('uuid', '=', $UUID)->first();

        $this->data['data'] = $user;
        $this->data['role_names'] = $user->getRoleNames();

        return view('default.user.edit',  $this->data);
    }

    public function store(Request $req, Role $model)
    {

        try {
            $model = Role::find($req->id);

            $model->name                = $req->name;
            $model->save();

            $status     = "success";
            $message    = "Berhasil disimpan.";
        } catch (\Exception $err) {
            DB::rollBack();
            $status     = "error";
            $message    = $err->getMessage();
        }

        if ($req->json == 'true') {
            return response()->json([
                'status' => $status,
                'message' => $message
            ]);
        } else {
            return redirect(route('user.index'))->with('status', $status)->with('message', $message);
        }
    }

    public function detail(Role $model, Request $req, $UUID)
    {

        $this->data['invoice'] = $model->withTrashed()->where('uuid', $UUID)->first();

        return view($this->view . '.detail', $this->data);
    }

    public function destroy(Request $req, Role $model, $UUID)
    {

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

    function ajax(string $param)
    {

        switch ($param) {

            case 'datatables':
                $table = DataTables::eloquent(Role::query());

                $table->addColumn('_action', 'default.role.action');

                $table->addColumn('_permissions', function (Role $data) {
                    return $data->permissions->toArray();
                });

                $table->rawColumns(['_action']);

                return $table->toJson();
                break;
        }
    }
}