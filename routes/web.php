<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\CategoryController;


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

Route::get('/', [IndexController::class, 'Index']);


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

    });


});