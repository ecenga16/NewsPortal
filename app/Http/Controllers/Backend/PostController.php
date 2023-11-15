<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Posts;
use App\Models\User;


class PostController extends Controller
{
    public function AllPosts() {
        $all_news = Posts::latest()->get();

        return view('backend.posts.all_posts', compact('all_news'));
    }

    public function AddPost(){

        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $adminuser = User::latest()->get();

        return view('backend.posts.add_post', compact('categories', 'subcategories', 'adminuser'));
    }

    // public function StorePost(Request $request){

    //     Post::insert([

    //         'category_id' => $request->category_id,
    //         'subcategory_id' => $request->subcategory_id,
    //         'user_id' => $request->user_id,
    //         'news_title' => $request->news_title,
    //         'image' => $request->news_image,
    //         'news_details' => $request->news_details,
    //         'news_details' => $request->news_details,
    //         'news_details' => $request->news_details,
    //         'news_details' => $request->news_details,   
    //         'news_details' => $request->news_details,
    //         'news_details' => $request->news_details,

    //     ]);



        
    // }
}
