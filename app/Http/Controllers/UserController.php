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
}
