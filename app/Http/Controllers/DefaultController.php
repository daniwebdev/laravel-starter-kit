<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DefaultController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function dashboard() {


        return view('default.dashboard.index');
    }

    public function profile() {
        $data = [
            'user' => Auth::user(),
        ];

        // $disk = Storage::disk('gcs');
        // $disk->put('test.txt', 'oke');

        // $url = $disk->temporaryUrl('test.txt', now()->addMinutes(30));

        return view('default.profile', $data);
    }

    public function upload_profile_image(Request $request) {

        try {

            $file = $request->file('file');

            dd($file);

            $filename = auth()->user()->uuid.'';

            $file->move(public_path(''));


        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
