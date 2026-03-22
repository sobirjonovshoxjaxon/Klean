@extends('admin.general')
@section('content')

    <h1>Show Page</h1>

    <h3><b>Id:</b> {{ $post->id }}</h3>
    <h3>Title: {{ $post->title }}</h3>
    <p>Image: {{ $post->image }}</p>
    <p>Short_content: {{ $post->short_content}}</p>
    <p>Content: {{ $post->content }}</p>
    <p>Created_at: {{ $post->created_at}}</p>
    <p>Update_at: {{ $post->updated_at}}</p>
    
    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>

@endsection