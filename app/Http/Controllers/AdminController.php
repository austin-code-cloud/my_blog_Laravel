<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/Dashboard');
    }

    public function Post()
    {
        return view('admin/BlogPost');
    }
   
    public function CreatePost()
    {
        return view('admin/Post');
    }
    public function CreateCategory()
    {
        return view('admin/Categories');
    }
    public function CreateTag()
    {
        return view('admin/Tag');  
    }
   
    
}
