<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        if(Auth::id()) {
            $user_type = Auth()->user()->user_type;
            if($user_type == 'user') {
                $posts = Post::all();
                return view('home.homepage',compact('posts'));
            } elseif($user_type == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function homepage() {
        $posts = Post::all();
        return view('home.homepage',compact('posts'));
    }

    public function detailPost($id) {
        $post = Post::find($id);
        return view('home.post-detail',compact('post'));
    }
}
