<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Subcategory;



class IndexController extends Controller
{
    public function Index(){

        $newposts = Posts::orderBy('id','DESC')->limit(3)->get();
        $pop_posts = Posts::orderBy('view_count','DESC')->limit(3)->get();
        return view('frontend.index', compact('newposts', 'pop_posts'));
    }

    public function PostDetails($id, $slug){
    
        $news = Posts::findOrFail($id);

        $tags = $news['tags'];
        $tags_all = explode(',', $tags);

        $cat_id = $news['category_id'];
        $relatedNews = Posts::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(6)->get();

        $newsKey = 'blog' . $news->id;
        if (!Session::has($newsKey)) {
           $news->increment('view_count');
           Session::put($newsKey,1);
        }

        $newposts = Posts::orderBy('id','DESC')->limit(3)->get();
        $pop_posts = Posts::orderBy('view_count','DESC')->limit(3)->get();

        return view('frontend.posts.details_post', compact('news','tags_all','relatedNews', 'newposts', 'pop_posts'));

    }

    public function CategoryDetails($id, $slug){

        $news = Posts::where('status', '1')->where('category_id', $id)->orderby('id', 'DESC')->get();

        $breadcat = Category::where('id',$id)->first();

        $newstwo = Posts::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->limit(2)->get();

        return view('frontend.category.category_details', compact('news', 'breadcat', 'newstwo'));
    }

    public function SubcategoryDetails($id, $slug){

        $news = Posts::where('status', '1')->where('subcategory_id', $id)->orderby('id', 'DESC')->get();

        $breadcat = Subcategory::where('id',$id)->first();

        $newstwo = Posts::where('status',1)->where('subcategory_id',$id)->orderBy('id','DESC')->limit(2)->get();

        return view('frontend.category.subcategory_details', compact('news', 'breadcat', 'newstwo'));
    }
}