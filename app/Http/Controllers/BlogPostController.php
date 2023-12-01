<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Categories;
use App\Models\BlogPost;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class BlogPostController extends Controller
{

    public function CreatePost(Request $request)
    {
        $request->validate([
            'title' => "required",
            'description' => "required",
            'content' => "required",
            'category' => "required",
            'image' => "image"
        ]);

        $post = new BlogPost();

        $imagePath = $request->file('image')->store();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->slug = str::slug($request->title);
        $post->image = $imagePath;
        $post->user_id = Session::get('loginId');
        $post->category_id = $request->category;
        $post->tags_id = $request->tag;
        $saved =   $post->save();



        if ($saved) {
            return redirect('/')->with('success', 'New post added Sucessfully');
        } else {
            return back()->with('failure', 'Something went wrong');
        }
    }
    public function singlepost($slug)
    {
        $BlogPost = BlogPost::where('slug', $slug)->get()->first();
        return view('singlepost', compact('BlogPost'));
    }
    public function Store()
    {
    }
    public function Edit()
    {
    }
    public function Delete()
    {
    }
}
