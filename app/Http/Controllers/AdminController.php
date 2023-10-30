<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/dashboard');
    }
    public function Create()
    {
        return view('admin/CreatePost');
    }
    public function Store()
    {
       
    }
    public function Show()
    {
        
    }
    public function Edit()
    {
        
    }
    public function Delete()
    {
       
    }
    
}
