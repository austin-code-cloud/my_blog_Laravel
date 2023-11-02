<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      $latestPost = BlogPost::latest()->get();
      $oldestPost = BlogPost::oldest()->take(4)->get();

      return view('welcome', compact('latestPost', 'oldestPost'));
   }
  
}
