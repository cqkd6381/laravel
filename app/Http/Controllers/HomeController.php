<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Http\File;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (\Auth::viaRemember()) {
        //     echo 'remember';
        // }else{
        //     echo 'ddd';
        // }
        return view('home');
    }

    public function getVideo()
    {
        // $contents = Storage::get('1.png');
        // $url = Storage::url('linux4.mp4');
        // echo $url.'<br/>';
        // $url = Storage::url('1501741257.png');
        // echo $url;
        // header('Content-type: video/mp4');
        // ob_clean(); 
        // flush(); 
        return view('input');
    }

    public function vvv()
    {
        echo file_get_contents('storage/linux4.mp4');
        echo 11111;
    }

    public function postVideo(Request $request)
    {
        $data = file_get_contents('php://input');
        var_dump($data);exit;
        dump($request->all());
        Storage::put(
            'public/'.time().'.mp4',
            file_get_contents($request->file('avatar')->getRealPath()),
            'public'
        );
       // $size = Storage::size('file1.jpg');
        return 'upload success!';
    }
}
