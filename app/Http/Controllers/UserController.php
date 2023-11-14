<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    

    public function UserDashboard(){

        $id = Auth::user()->id;

        $userData = User::find($id);

        return view('frontend.user_dashboard', compact('userData'));
    
    }

    public function UserProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);

        $data['name'] = $request['username'];

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success',
        );

        $data->save();

        return back()->with($notification);


    }

    public function UserLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout successful',
            'alert-type' => 'info',
        );

        return redirect('/login')->with($notification);

    }

    public function UserChangePassword(){

        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('frontend.user_change_password', compact('userData'));

    }

    public function UserUpdatePassword(Request $request){

        // Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed', 
        ]);

        // Match The Old Password 
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with('error', "Old Password Doesn't Match!!");
        }
        // Update the new password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('status', "Password Change Successfully");

    }
}
