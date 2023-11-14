<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


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

        return redirect('/')->with($notification);

    }
}
