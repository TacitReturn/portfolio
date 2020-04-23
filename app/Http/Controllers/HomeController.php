<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
    public function index(Post $post)
    {
        $id = Auth::id();
        $user = User::find($id);
        $posts = $user->posts()->get();

        return view('home')->with('posts', $posts);
    }
}
