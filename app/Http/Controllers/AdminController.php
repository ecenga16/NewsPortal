<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminDashboard () {
        return view('admin.index');
    }

    public function AdminLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/logout/page');

    }

    public function AdminLogin(){

        return view('admin.admin_login');

    } 
    public function AdminLogoutPage(){

        return view('admin.admin_logout');

    } 

    public function AdminProfile(){
        
        $id = Auth::user()->id;

        $adminData = User::find($id);

        return view('admin.body.admin_profile_view', compact('adminData'));
    }

    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->username;

        // if($request->file('photo')){
        //     $file = $request->file('photo');
        //     $filename = date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path('upload/admin_images'),$filename);
        //     $data['photo'] = $filename;
        // }

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success',
        );

        $data->save();

        return redirect()->back()->with($notification);
    }
}
