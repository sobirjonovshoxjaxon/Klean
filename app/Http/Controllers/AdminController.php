<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminIndex(){
        return view('admin.index');
    }


    public function adminRegister(){

        return view('admin.register');
    }

    public function register_store(Request $request){
        
        $request->validate([

            'name'=>'required|max:255',
            'email'=>'required|unique:users,email',
            'image'=>'required|mimes:jpg,png',
            'password'=>'required|max:20|min:8',
            'password_confirmation'=>'required|same:password',
        ]);

        if($request->hasFile('image')){

            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('user-photos',$fileName);
        }

       
        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'image' => $path,
            'password' => $request->password,
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function loginPage(){
        return view('admin.login');
    }

    public function logout(){
        
        Auth::logout();
        return to_route('login.page');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin/index');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
}
