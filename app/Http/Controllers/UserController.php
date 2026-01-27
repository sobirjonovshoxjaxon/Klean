<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        return "Bu userlarni ro'yxati";
    }

    public function show($user){

        return view('users.show')->with('user_id', $user)->with('name', 'Shoxjaxon');
    }

    public function create(){

        return view('users.create');
    }

    public function edit($user_id){

        return $user_id . " - id li user o'zgartirish";

    }
}
