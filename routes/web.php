<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\VideoGalleryController;
use App\Http\Controllers\Backend\SeoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//});

Route::get('/', [IndexController::class, 'Index'])->name('homepage');


Route::middleware(['auth'])->group(function () {
   
Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');

Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');

Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');

Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){


Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class)->name('admin.login');

Route::get('/admin/logout/page', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout_page');

//Category routes
Route::middleware(['auth','role:admin'])->group(function(){

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category','StoreCategory')->name('category.store');
        Route::get('/edit/category/{id}','EditCategory')->name('edit.category');
        Route::post('/update/category','UpdateCategory')->name('category.update');
        Route::get('/delete/category/{id}','DeleteCategory')->name('delete.category');



    });
    // SubCategory all Route
    Route::controller(CategoryController::class)->group(function(){

        Route::get('/all/subcategory','AllSubCategory')->name('all.subcategory');
        Route::get('/add/subcategory','AddSubCategory')->name('add.subcategory');
        Route::post('/store/subcategory','StoreSubCategory')->name('subcategory.store');
        Route::get('/edit/subcategory/{id}','EditSubCategory')->name('edit.subcategory');
        Route::post('/update/subcategory','UpdateSubCategory')->name('subcategory.updated');
        Route::get('/delete/subcategory/{id}','DeleteSubCategory')->name('delete.subcategory');
        Route::get('/subcategory/ajax/{category_id}','GetSubCategory')->name('subcategory.ajax');

    });

    // Admin User all Route
    Route::controller(AdminController::class)->group(function(){

        Route::get('/all/admin','AllAdmin')->name('all.admin');
        Route::get('/add/admin','AddAdmin')->name('add.admin');
        Route::post('/store/admin','StoreAdmin')->name('admin.store');
        Route::get('/edit/admin/{id}','EditAdmin')->name('edit.admin');
        Route::post('/update/admin','UpdateAdmin')->name('admin.update');
        Route::get('/delete/admin/{id}','DeleteAdmin')->name('delete.admin');
        Route::get('/inactive/admin/user/{id}','InactiveAdminUser')->name('inactive.admin.user');
        Route::get('/active/admin/user/{id}','ActiveAdminUser')->name('active.admin.user');


    });

    // Posts all Route
    Route::controller(PostController::class)->group(function(){

        Route::get('/all/posts','AllPosts')->name('all.news.post');
        Route::get('/add/post','AddPost')->name('add.post');
        Route::post('/store/post','StorePost')->name('post.store');
        Route::get('/edit/post/{id}', 'EditPost')->name('edit.post');
        Route::post('/update/post','UpdatePost')->name('post.update');
        Route::get('/delete/post/{id}', 'DeletePost')->name('post.delete');
        Route::get('/inactive/post/{id}','InactivePost')->name('inactive.post');
        Route::get('/active/post/{id}','ActivePost')->name('active.post');
        Route::post('/posts/search', 'PostSearch')->name('post.search');

    });


    Route::controller(BannerController::class)->group(function(){

        Route::get('/all/banners','AllBanners')->name('all.banners');
        Route::post('/update/banners','UpdateBanners')->name('update.banners');    
    });

    Route::controller(GalleryController::class)->group(function(){

        Route::get('/all/images','GalleryAllImages')->name('all.photos');
        Route::get('/add/image','AddImageGallery')->name('add.image');
        Route::post('/store/images','StoreGalleryImages')->name('store.images');
        Route::get('/edit/image{id}','EditImageGallery')->name('edit.image.gallery');
        Route::post('/update/image','UpdatePhotoGallery')->name('update.image.gallery');
        Route::get('/delete/image{id}', 'DeleteImageGallery')->name('delete.image.gallery');
    });

    Route::controller(VideoGalleryController::class)->group(function(){

        Route::get('/all/video/gallery','AllVideoGallery')->name('all.video.gallery'); 
        Route::get('/add/video/gallery','AddVideoGallery')->name('add.video.gallery');
        Route::post('/store/video/gallery','StoreVideoGallery')->name('store.video.gallery');
        Route::get('/edit/video/gallery/{id}','EditVideoGallery')->name('edit.video.gallery');
        Route::post('/update/video/gallery','UpdateVideoGallery')->name('update.video.gallery');
        Route::get('/delete/video/gallery/{id}','DeleteVideoGallery')->name('delete.video.gallery');
        Route::get('/update/live/tv','UpdateLiveTv')->name('update.live.tv');
        Route::post('/update/live','UpdateLiveData')->name('update.live');
    });

    Route::controller(SeoController::class)->group(function(){

        Route::get('/seo/setting','SeoSetting')->name('seo.setting'); 
        Route::post('/update/seo/setting','UpdateSeoSetting')->name('update.seo.setting');
    });
    
    
});


Route::get('/news/details/{id}/{slug}', [IndexController::class, 'PostDetails']);
Route::get('/category/{id}/{category_slug}', [IndexController::class, 'CategoryDetails']);
Route::get('/subcategory/{id}/{subcategory_slug}', [IndexController::class, 'SubcategoryDetails']);
Route::post('/search', [IndexController::class, 'SearchByDate'])->name('search-by-date');
Route::post('/news', [IndexController::class, 'NewsSearch'])->name('news.search');
