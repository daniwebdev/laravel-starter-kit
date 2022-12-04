<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{

    protected $view  = 'article';

    function __construct()
    {
        parent::__construct();
        $this->base             = route($this->view . '.index');
        $this->data['resource'] = $this->view;
        $this->view             = $this->template . $this->view;
    }

    public function index(Article $model, Request $req)
    {
        return view($this->view . '.index', $this->data);
    }

    public function create()
    {

        $this->data['categories'] = ArticleCategory::all();

        return view($this->view . '.create', $this->data);
    }

    public function edit(Article $model, $permalink)
    {
        try {
            $this->data['data'] = $model->where('permalink', $permalink)->firstOrFail();
            $this->data['categories'] = ArticleCategory::all();

            return view($this->view . '.form', $this->data);
        } catch (\Throwable $th) {
            return back();
        }
    }

    public function store(Article $model, Request $req)
    {

        try {
            DB::beginTransaction();
            if (isset($req->id)) {
                $model = Article::where('id', $req->id)->firstOrFail();
            } else {
                $model->permalink      = $req->permalink;
                $model->user_id        = auth()->user()->id;
            }

            $model->title         = $req->title;
            // $upload               = $this->upload($req->file('cover'));
            // $model->cover         = $upload['uuid'];
            $model->cover          = $req->cover;
            $model->content        = $req->content;
            $model->description    = $req->description;
            $model->tags           = $req->tags;
            $model->category_id    = $req->category_id;

            $model->status         = $req->status ?? 1;

            /* Set published date */
            if ($req->published_at) {
                $model->published_at   = $req->published_at;
            } else {
                $model->published_at   = now();
            }

            $model->save();

            $status  = 'success';
            $message = "Save Successfully";
            DB::commit();
        } catch (\Exception $er) {
            DB::rollBack();
            $status  = 'error';
            $message = $er->getMessage();
        }

        if ($req->get('format') == 'json') {
            $response = [
                'status' => $status,
                'message' => $message,
            ];
            return response()->json($response);
        }

        return redirect($this->base)->with('status', $status)->with('message', $message);
    }


    public function update()
    {
    }

    public function destroy(Article $model, $id)
    {

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

    public function upload_image(Request $request)
    {
        try {
            $data = $this->upload_google_storage($request->image, 'articles/' . gmdate('Y-m'));

            return response()->json([
                'status' => true,
                'data'  => $data
            ]);
        } catch (\Throwable $th) {

            return response()->json([
                'status' => true,
                'data'  => $data
            ], 500);
        }
    }


    function ajax(string $param)
    {

        switch ($param) {

            case 'datatables':
                $table = DataTables::eloquent(Article::query());

                $table->addColumn('_action', 'default.article.action');

                $table->rawColumns(['_action']);

                return $table->toJson();
                break;
        }
    }
}
