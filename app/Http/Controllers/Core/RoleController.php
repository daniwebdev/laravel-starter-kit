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

        $data = [
            'permissions' => $permissions,
            // 'roles' => $roles,
        ];

        return view('default.role.create', $data);
    }


    public function edit($id = '')
    {

        $permissions = Permission::all()->map(function ($item) {
            $var = explode(' ', $item->name);
            $item->mod = ucwords(end($var));

            return $item;
        })->groupBy('mod');

        $data = Role::find($id);

        $this->data['data']       = $data;
        $this->data['role_permission'] = $data->permissions->map(function($item) {
            return $item->name;
        })->toArray();


        $this->data['permissions'] = $permissions;

        return view('default.role.edit',  $this->data);
    }

    public function store(Request $req, Role $model)
    {
        try {

            $model->name                = $req->name;
            $model->save();

            $model->syncPermissions($req->actions);

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
            return redirect(route('role.index'))->with('status', $status)->with('message', $message);
        }
    }

    public function update(Request $req, $id)
    {
        try {
            $model = Role::find($id);

            $model->name                = $req->name;
            $model->save();

            $model->syncPermissions($req->actions);

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
            return redirect(route('role.index'))->with('status', $status)->with('message', $message);
        }
    }

    public function destroy(Request $request, Role $model, $id)
    {

        try {
            $model->where('id', $id)->delete();
            $status  = true;
            $message = 'Success..!';
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
