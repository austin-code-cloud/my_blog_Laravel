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
    public function authors () {
        return view('admin/authors');
       }
    public function blogPost () {
        return view('admin/blogPost');
       }
    public function calender () {
        return view('admin/calender');
       }
    public function categories () {
        return view('admin/categories');
       }
    public function chat () {
        return view('admin/chat');
       }
    public function email () {
        return view('admin/emailInbox');
       }
    public function comment() {
        return view('admin/postComment');
       }
    public function profile () {
        return view('admin/profile');
       }
    public function readEmail () {
        return view('admin/readEmail');
       }
}
