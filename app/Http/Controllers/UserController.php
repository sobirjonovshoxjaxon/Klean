<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        // return "Bu userlarni ro'yxati";
        // return [1,2,3];
        // return redirect('users/create');
        return redirect()->route('user.create');
        return response("Bu userlarni ro'yxati Sobirjonov Shoxjaxon");
    }

    public function show($user){

        return view('users.show')->with('user_id', $user)->with('name', 'Shoxjaxon');
    }

    public function create(){

        return view('users.create');
    }

    public function store(Request $request){

        // var_dump($request->all());
        // die();

        // dd($request->all());
        // dd($request->flash());

        if($request->has('password')){

            return "yes";
        }else{

            return "no";
        }
    }

    public function edit($user_id){

        return $user_id . " - id li user o'zgartirish";

    }
}
