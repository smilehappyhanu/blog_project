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
                return view('home.homepage');
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
}
