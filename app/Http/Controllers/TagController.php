<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;

class TagController extends Controller
{
   public function index()
   {
      return view('tags');
   }

   public function CreateTag(Request $request)
   {
      $request->validate([
         'tag_name' => "required",
         'description' => "required",
      ]);

      $tag = new Tags();

      $tag->name = $request->tag_name;
      $tag->description = $request->description;
      $saved =   $tag->save();



      if ($saved) {
         return redirect('/')->with('success', 'New Tag added Sucessfully');
      } else {
         return back()->with('failure', 'Something went wrong');
      }
   }

   public function ShowTag()
   {
      
   }
}
