<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{

    public function CreateCategory(Request $request )
    {
        $request->validate([
            'category_name' => "required",
            'description' => "required",
        ]);

        $category = new Categories();

        $category->name = $request->category_name;
        $category->description = $request->description;
        $saved =   $category->save();



        if ($saved) {
            return redirect('/')->with('success', 'New Category added Sucessfully');
        } else {
            return back()->with('failure', 'Something went wrong');
        }
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
