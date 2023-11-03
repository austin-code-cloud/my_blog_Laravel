<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;
use App\Models\Categories;

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
        $Tag = Tags::get();
        $Category = Categories::get();
        
        return view('admin/Post', compact('Tag', 'Category'));
    }
    public function CreateCategory()
    {
        return view('admin/Categories');
    }
    public function CreateTag()
    {

        return view('admin/Tag',);
    }
}
