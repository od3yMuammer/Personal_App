<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{

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

        $settings = setting::find(1);
        $posts=post::withoutTrashed()->get();
        return view('web.index',compact('posts','settings'));
    }

    public function about()
    {
        $settings = setting::find(1);
        return view('web.about',compact('settings'));
    }
    public function Lpost()
    {
        $L_post = post::orderBy('created_at','DESC')->take(2)->get();
        return view('web.layouts.parent',compact('L_post'));
    }
}
