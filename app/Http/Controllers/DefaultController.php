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

            // dd($file->getClientOriginalExtension(), $file->getRealPath());
            // dd($file->getExtension());

            if($file->getClientOriginalExtension() != 'webp') {

                $content = file_get_contents(convert2webp($file->getRealPath()));
            } else {
                $content = file_get_contents($file->getRealPath());
            }


            $filename    = auth()->user()->uuid.'.webp';
            $destination = 'images/profile/'.$filename;

            disk()->put($destination, $content);

            $saved_as = 'gcs:' . $destination;

            $user = auth()->user();

            $user->image = $saved_as;

            $user->save();

            return disk_get_url($saved_as);


        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
