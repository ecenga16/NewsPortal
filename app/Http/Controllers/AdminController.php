<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function AdminDashboard () {
        return view('admin.index');
    }

    public function AdminLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout successful',
            'alert-type' => 'info',
        );

        return redirect('/admin/logout/page')->with($notification);

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

    public function AdminChangePassword() { 
        return view('admin.admin_change_password');
    }

    public function AdminUpdatePassword(Request $request){

        //validations
        $request->validate(
            [
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
             ]
        );

        // Match the old password
        if(!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with('error', "Old password dosen't match!!");
        }

        //update new password 

        User::whereId(auth()->user()->id)->update(
            [
                'password' => Hash::make($request->new_password),
            ]
        );

        return back()->with('status', "Password Changed Successfully!");

    }
}
