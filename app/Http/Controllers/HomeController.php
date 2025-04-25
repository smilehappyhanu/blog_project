<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
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

    public function userAddPost() {
        return view('home.post-add');
    }

    public function handleAddPost(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $post = new Post();
        $post->title  = $request->title;
        $post->description = $request->description;
        $post->status = 'block';
        $post->user_id = Auth()->user()->id;

        // Save image here
        if($request->file('image')) {
            $image = $request->file('image');
            $imageExtension = $image->extension();
            $newImageName = Carbon::now()->timestamp.'.'.$imageExtension;
            $image->move('uploads/posts',$newImageName);
            $post->image = $newImageName;
        }
        $post->save();
        session()->flash('success','You have create post successfully.');
        return redirect()->route('user.post.add');
    }
}
