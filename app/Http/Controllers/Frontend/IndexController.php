<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class IndexController extends Controller
{
    public function Index(){
        return view('frontend.index');
    }

    public function PostDetails($id, $slug){

        $news = Posts::findOrFail($id);

        return view('frontend.posts.details_post', compact('news'));

    }
}