<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post() {
        return view('admin.post-add');
    }

    public function addPost(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = Auth()->user()->id;
        $post->status = 'active';
        
        // Save image here
        $image = $request->file('image');
        if($image != null) {
            $file_extension = $request->file('image')->extension();
            $imageName = Carbon::now()->timestamp.'.'.$file_extension;
            $image->move('uploads/posts',$imageName);
            $post->image = $imageName;
        }
              
        $post->save();

        session()->flash('success','Add post successfully.');
        return redirect()->back();
    }

    public function listPost() {
        $posts = Post::latest()->with('user')->paginate(5);
        return view('admin.post-list',compact('posts'));
    }
}
