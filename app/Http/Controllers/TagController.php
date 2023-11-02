<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
       return view('tags');
    }
    
    public function CreateTag()
    {
       return view('tags');
    }
    

}
