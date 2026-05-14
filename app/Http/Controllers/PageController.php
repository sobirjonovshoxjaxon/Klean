<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PageController extends Controller
{
    
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function blog(){

        $posts = Post::all();
        return view('blog',compact('posts'));
    }

    public function blogDetail($post_id){

        $post = Post::findOrFail($post_id);
        $categories = Category::all();
        
        return view('blogdetail',compact('post','categories'));
    }

    public function contact(){
        return view('contact');
    }

    public function service(){
        return view('service');
    }

    public function project(){
        return view('project');
    }
}
