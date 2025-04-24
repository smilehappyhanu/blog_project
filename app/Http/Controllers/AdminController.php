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

    public function deletePost($id) {
        $post = Post::find($id);
        if($post == null) {
            session()->flash('error','Record not found.');
            return redirect()->route('post.list');
        }
        // Delete old image here
        $oldImage = $post->image;
        if($oldImage) {
            $oldImagePath = public_path('uploads/posts/'.$oldImage);
            if(file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $post->delete();
        session()->flash('success','Post deleted successfully.');
        return redirect()->route('post.list');
    }

    public function editPost($id) {
        $post = Post::find($id);
        return view('admin.post-edit',compact('post'));
    }

    public function updatePost(Request $request,$id) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = Auth()->user()->id;
        $post->status = 'active';
        $oldImage = $post->image;   

        // Save image here
        $image = $request->file('image');
        if($image != null) {
            $file_extension = $request->file('image')->extension();
            $imageName = Carbon::now()->timestamp.'.'.$file_extension;
            $image->move('uploads/posts',$imageName);
            $post->image = $imageName;
            // Delete old image here
            if($oldImage) {
                $oldImagePath = public_path('uploads/posts/'.$oldImage);
                if(file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        } else {
            $post->image  = $oldImage;
        }
              
        $post->save();

        session()->flash('success','Update post successfully.');
        return redirect()->route('post.list');
    }
}
