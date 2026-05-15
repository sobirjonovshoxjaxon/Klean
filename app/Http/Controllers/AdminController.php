<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminIndex(){
        return view('admin.index');
    }

    public function loginPage(){
        return view('admin.login');
    }

    public function logout(){
        
        Auth::logout();
        return to_route('login.page');
    }

    public function isUser(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password)) {

            return view('admin.index');

        }else{

        return redirect()->back()->with('error', 'Email yoki password xato');
    }
        
    }

    
}
