<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function panel () {
        return view('admin/panel');
       }
    public function newPost () {
        return view('admin/addNewPost');
       }
    public function blogPost () {
        return view('admin/blogPost');
       }
    
    public function categories () {
        return view('admin/categories');
       }
    
}
