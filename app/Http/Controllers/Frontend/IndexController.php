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
use DateTime;



class IndexController extends Controller
{
    public function Index(){

        $newposts = Posts::orderBy('id','DESC')->limit(3)->get();
        $pop_posts = Posts::orderBy('view_count','DESC')->limit(3)->get();

        $cat_0 = Category::skip(8)->first();
        $news_0 = [];

        if ($cat_0 !== null) {
            $news_0 = Posts::where('status', 1)->where('category_id', $cat_0['id'])->orderBy('id', 'DESC')->limit(8)->get();
        }



        return view('frontend.index', compact('newposts', 'pop_posts', 'cat_0', 'news_0'));
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

    public function SearchByDate(Request $request) {
        $date = new DateTime($request['date']);
        $formatDate = $date->format('d-m-y');

        $news = Posts::where('post_date', $formatDate)->latest()->get();

        $newnewspost = Posts::orderBy('id','DESC')->limit(8)->get();

        $newspopular = Posts::orderBy('view_count','DESC')->limit(8)->get();

        return view('frontend.news.search_by_date', compact('news', 'formatDate', 'newnewspost', 'newspopular'));

    }

    public function NewsSearch(Request $request){


        $request->validate(['search' => "required"]);

        $item = $request->search;

        $news = Posts::where('news_title','LIKE',"%$item%")->get();
        $newnewspost = Posts::orderBy('id','DESC')->limit(8)->get();
        $newspopular = Posts::orderBy('view_count','DESC')->limit(8)->get();

        return view('frontend.news.search',compact('news','newnewspost','newspopular','item'));


    }
}