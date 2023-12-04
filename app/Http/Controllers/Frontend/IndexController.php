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
use DB;



class IndexController extends Controller
{
    public function Index(){
        $newposts = Posts::orderBy('id','DESC')->limit(3)->get();
        $pop_posts = Posts::orderBy('view_count','DESC')->limit(3)->get();

        $skip_cat_0 = Category::skip(7)->first();
        $skip_news_0 = Posts::where('status', 1)->where('category_id', $skip_cat_0['id'])->orderBy('id', 'DESC')->limit(3)->get();

        $skip_cat_1 = Category::skip(1)->first();
        $skip_news_1 = Posts::where('status', 1)->where('category_id', $skip_cat_1['id'])->orderBy('id', 'DESC')->limit(3)->get();

        $skip_cat_2 = Category::skip(2)->first();
        $skip_news_2 = Posts::where('status', 1)->where('category_id', $skip_cat_2['id'])->orderBy('id', 'DESC')->limit(3)->get();

        $skip_cat_3 = Category::skip(3)->first();
        $skip_news_3 = Posts::where('status', 1)->where('category_id', $skip_cat_3['id'])->orderBy('id', 'DESC')->limit(5)->get();

        $skip_cat_4 = Category::skip(0)->first();
        $skip_news_4 = Posts::where('status', 1)->where('category_id', $skip_cat_4['id'])->orderBy('id', 'DESC')->limit(3)->get();

        $skip_cat_5 = Category::skip(5)->first();
        $skip_news_5 = Posts::where('status', 1)->where('category_id', $skip_cat_5['id'])->orderBy('id', 'DESC')->limit(3)->get();

        $skip_cat_6 = Category::skip(6)->first();
        $skip_news_6 = Posts::where('status', 1)->where('category_id', $skip_cat_6['id'])->orderBy('id', 'DESC')->limit(3)->get();
        

        // $category = DB::table('categories')
        //     ->select('categories.id as category_id', 'categories.category_name', 'posts.id as post_id', 'posts.news_title')
        //     ->join('posts', 'categories.id', '=', 'posts.category_id')
        //     ->where('categories.id', 12)
        //     ->orderBy('posts.id', 'desc')
        //     ->limit(8)
        //     ->get();



        return view('frontend.index', compact('newposts', 'pop_posts', 'skip_cat_0', 'skip_news_0', 'skip_cat_1', 'skip_news_1', 'skip_cat_2', 'skip_news_2', 'skip_cat_3', 'skip_news_3', 'skip_cat_4', 'skip_news_4', 'skip_cat_5', 'skip_news_5', 'skip_cat_6', 'skip_news_6'));
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

    public function CategoryDetails($id, $slug) {

        $perPage = 20;
    
        $news = Posts::where('status', '1')
            ->where('category_id', $id)
            ->orderBy('id', 'DESC')
            ->paginate($perPage);
    
        $breadcat = Category::where('id', $id)->first();

        $newstwo = Posts::where('status', 1)
            ->where('category_id', $id)
            ->orderBy('id', 'DESC')
            ->limit(2)
            ->get();
    
        return view('frontend.category.category_details', compact('news', 'breadcat', 'newstwo'));
    }

    public function SubcategoryDetails($id, $slug){

        $perPage = 20;

        $news = Posts::where('status', '1')
        ->where('subcategory_id', $id)
        ->orderBy('id', 'DESC')
        ->paginate($perPage);

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

    public function DonatePage () {

        return view('frontend.donate.donate-page');
    }
}