<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.membership');
    }

    public function index(Request $request)
    {
        // $allowedVideos = $request->get('allowedVideos');
        // $videos = Video::limit($allowedVideos)->get();
        // return view('apps.video', compact('videos'));

        $allowedVideos = $request->get('allowedVideos');

        if ($allowedVideos == 'all') {
            $videos = Video::paginate(6);
        } else {
            $videos = Video::limit($allowedVideos)->get();
        }

        return view('apps.video', compact('videos','allowedVideos'));
    }
}
