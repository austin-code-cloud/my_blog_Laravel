<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function tags () {
    return view('tags');
   }
   public function authors () {
    return view('authors');
   }
   public function contact () {
    return view('contact');
   }
   public function signIn () {
    return view('auth/signin');
   }
 
}
