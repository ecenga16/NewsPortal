<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Posts;

class PostController extends Controller
{
    public function AllPosts() {
        $all_news = Posts::latest()->get();

        return view('backend.posts.all_posts', compact('all_news'));
    }
}
