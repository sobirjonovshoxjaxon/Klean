@extends('admin.general')
@section('content')

    <h1>Show Page</h1>

    <h3><b>Id:</b> {{ $post->id }}</h3>
    <h3><b>Title:</b> {{ $post->title }}</h3>
    <p><b>Image:</b></p>
    <img src="{{ asset('storage/'.$post->image) }}" alt="" style="width: 300px; height: 300px;">
    <p><b>Short_content:</b> {{ $post->short_content}}</p>
    <p><b>Content:</b> {{ $post->content }}</p>
    <p><b>Created_at:</b> {{ $post->created_at}}</p>
    <p><b>Update_at:</b> {{ $post->updated_at}}</p>
    
    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>

@endsection