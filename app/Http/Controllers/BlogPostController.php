<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {
        return view('admin/blogPost');
    }
    public function Create(Request $request)
    {
        $request->validate([
            'title' => "required",
            'description' => "required",
            'content' => "required"
        ]);

        $post = new BlogPost();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->slug = str::slug($request->title);
        $saved =   $post->save();

        if ($saved) {
            return redirect('/')->with('success', 'New post added Sucessfully');
        } else {
            return back()->with('failure', 'Something went wrong');
        }
    }
    public function Show()
    {
       
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
