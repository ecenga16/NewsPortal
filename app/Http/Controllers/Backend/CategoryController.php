<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   public function AllCategory(){
    $categories = Category::latest()->get();

        return view ('backend.category.category_all', compact('categories'));
   }
   
   public function AddCategory(){
        return view('backend.category.category_add');   
    }   

    public function StoreCategory(Request $request) {

        Category::insert([
            'category_name' => $request['category_name'],
            'category_slug' => strtolower(str_replace(' ', '-', $request['category_name'])),
        ]);
        

        $notification = array(
            'message' => 'Category added successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('all.category')->with($notification);

    }


}
