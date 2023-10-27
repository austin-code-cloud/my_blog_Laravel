<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BlogPost;

class PostController extends Controller
{
    public function addnewpost (Request $request) {
        $request->validate([
            'title' => "required",
            'description' => "required",
            'body' => "required"
        ]);

        $post = new BlogPost();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $res =   $post->save();

        if ($res) {
            return back()->with('success', 'New post added Sucessfully');
        } else {
            return back()->with('failure', 'Something went wrong');
        }
    }
}
