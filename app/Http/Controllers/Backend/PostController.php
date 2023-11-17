<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon; 
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Posts;
use App\Models\User;
use Auth;


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

    public function StorePost(Request $request){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(784,436)->save('upload/news/'.$name_gen);
        $save_url = 'upload/news/'.$name_gen;
        
        Posts::insert([

            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'user_id' => Auth::user()->id,
            'news_title' => $request->news_title,
            'news_title_slug' => strtolower(str_replace(' ','-', $request['news_title'])),
            'news_image' => $save_url,
            'news_details' => $request->news_details,
            'tags' => $request->tags,
            'breaking_news' => $request->breaking_news,
            'top_slider' => $request->top_slider,   
            'first_section_three' => $request->first_section_three,
            'first_section_nine' => $request->first_section_nine,
            'post_date' => date('d-m-y'),
            'post_month' => date('F'),
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Post Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.news.post')->with($notification);
    }

    public function EditPost($id){

        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        $adminuser = User::where('role','admin')->latest()->get();
        $newspost = Posts::findOrFail($id);
        return view('backend.posts.edit_post',compact('categories','subcategories','adminuser','newspost'));
   }

   public function UpdatePost(Request $request) {

    $newspost_id = $request['id'];

    if ($request->file('image')){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(784,436)->save('upload/news/'.$name_gen);
        $save_url = 'upload/news/'.$name_gen;
        
        Posts::findOrFail($newspost_id)->update([

            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'user_id' => Auth::user()->id,
            'news_title' => $request->news_title,
            'news_title_slug' => strtolower(str_replace(' ','-', $request['news_title'])),
            'news_image' => $save_url,
            'news_details' => $request->news_details,
            'tags' => $request->tags,
            'breaking_news' => $request->breaking_news,
            'top_slider' => $request->top_slider,   
            'first_section_three' => $request->first_section_three,
            'first_section_nine' => $request->first_section_nine,
            'post_date' => date('d-m-y'),
            'post_month' => date('F'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Post Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.news.post')->with($notification);
        
    }else{

        Posts::findOrFail($newspost_id)->update([

            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'user_id' => Auth::user()->id,
            'news_title' => $request->news_title,
            'news_title_slug' => strtolower(str_replace(' ','-', $request['news_title'])),
            'news_details' => $request->news_details,
            'tags' => $request->tags,
            'breaking_news' => $request->breaking_news,
            'top_slider' => $request->top_slider,   
            'first_section_three' => $request->first_section_three,
            'first_section_nine' => $request->first_section_nine,
            'post_date' => date('d-m-y'),
            'post_month' => date('F'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Post Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.news.post')->with($notification);

        }

    }
    public function DeletePost($id){

        $post_image = Posts::findOrFail($id);
        $img = $post_image->news_image;
        unlink($img);

        Posts::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Post Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }

    public function InactivePost($id){
        Posts::findOrFail($id)->update(['status'=> 0]);

        $notification = array(
            'message' => 'Post Inactive',
            'alert-type' => 'info'

        );
        return redirect()->back()->with($notification);
    }

    public function ActivePost($id){
        Posts::findOrFail($id)->update(['status'=> 1]);

        $notification = array(
            'message' => 'Post Active',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);
    }

}
