<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        if($request->hasFile('image')){

            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('user-photos',$fileName);
        }

       $user = User::create([

        'name' => $request->name,
        'image' => $path ?? 'avatar.jpg',
        'email' => $request->email,
        'password' => $request->password,
        // 'password' => Hash::make($request->password),
       ]);

       return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        if($request->hasFile('image')){

            if(isset($user->image)){

                Storage::delete($user->image);
            }

            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('user-photos',$fileName);
        }

       $user->update([

            'name' => $request->name,
            'image' => $path ?? 'avatar.jpg',
            'password' => $request->password,
            'email' => $request->email,

        ]);

        return to_route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if(isset($user->image)){
            Storage::delete($user->image);
        }

        $user->delete();

        return redirect()->back();
    }
}
