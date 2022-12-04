<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ArticleCategoryController extends Controller
{

    protected $view  = 'article-category';

    function __construct()
    {
        parent::__construct();
        $this->base             = route($this->view.'.index');
        $this->data['resource'] = $this->view;
        $this->view             = $this->template.$this->view;
    }

    public function index(ArticleCategory $model, Request $req) {


        return view($this->view.'.index', $this->data);
    }

    public function create() {
        return view($this->view.'.create', $this->data);
    }

    public function show() {

    }

    public function edit(ArticleCategory $model, $id) {
        $this->data['data'] = $model->find($id);
        return view($this->view.'.edit', $this->data);
    }



    public function store(ArticleCategory $model, Request $req) {

        try {

			$model->name             = $req->name;
            $model->description      = $req->description;

            $model->save();

            $status  = 'success';
            $message = "Save Successfully";
        } catch (\Exception $er) {
            DB::rollBack();
            $status  = 'error';
            $message = $er->getMessage();
        }

        if($req->get('format') == 'json') {
            $response = [
                'status' => $status,
                'message' => $message,
            ];
            return response()->json($response);
        }

        return redirect($this->base)->with('status', $status)->with('message', $message);
    }

    public function update(Request $req, $id) {

        try {
            $model = ArticleCategory::find($id);

			$model->name             = $req->name;
            $model->description      = $req->description;

            $model->save();

            $status  = 'success';
            $message = "Save Successfully";
        } catch (\Exception $er) {
            DB::rollBack();
            $status  = 'error';
            $message = $er->getMessage();
        }

        if($req->get('format') == 'json') {
            $response = [
                'status' => $status,
                'message' => $message,
            ];
            return response()->json($response);
        }

        return redirect($this->base)->with('status', $status)->with('message', $message);
    }


    public function destroy(ArticleCategory $model, $id) {

        try {
            $model->where('id', $id)->delete();
            $status  = true;
            $message = 'Delete Successfully.';
        } catch (\Exception $err) {
            $status  = false;
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
                $table = DataTables::eloquent(ArticleCategory::query());

                $table->addColumn('_action', 'default.article-category.action');

                $table->addColumn('_article_cout', function (ArticleCategory $data) {
                    return $data->articles->count();
                });

                $table->rawColumns(['_action']);

                return $table->toJson();
                break;
        }
    }

}
