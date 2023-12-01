<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Tags;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      $latestPost = BlogPost::latest()->first();
      $tags= Tags::get();

      $oldestPost = BlogPost::oldest()->take(4)->get();
      
      return view('welcome', compact('latestPost', 'oldestPost', 'tags'));
   }
  
}
