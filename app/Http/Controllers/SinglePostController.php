<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class SinglePostController extends Controller
{
    public function singlepost($slug)
   {
      $BlogPost = BlogPost::where('slug', $slug)->get()->first();
      return view('singlepost', compact('BlogPost'));
   }
}
