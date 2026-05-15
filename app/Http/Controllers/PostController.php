<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $posts = Post::latest()->paginate(10);
        return view('admin.blog.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blog.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {

        dd($request->all());
        // $path = $request->file('image')->store('post-photos'); # Agar public qilib imageni yuklaydigan bo'lsak buni biz brauzerda ko'ra olamiz
        // $path2 = $request->file('image')->store('post-photos','local'); # Agar sekretni brauzer ko'rishi kerak bo'lmasa unda local qilamiz

        if($request->hasFile('image')){

            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('post-photos', $fileName); // Agar rasm imina o'zini nomi orqali yuklansin desang shu yo'l bor
        }
        

        $post = Post::create([

            'user_id' => 1,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' => $path ?? 'avatar.jpg',
            'short_content' => $request->short_content,
            'content' => $request->content,
        ]);

        return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.blog.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.blog.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {

        if($request->hasFile('image')){

            if(isset($post->image)){

                Storage::delete($post->image);
            }

            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('post-photos',$fileName);
        }


        $post->update([

            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'image' => $path ?? $post->image,
        ]);

        return to_route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        if(isset($post->image)){
            Storage::delete($post->image);
        }
        $post->delete();

        return redirect()->back();
    }
}
