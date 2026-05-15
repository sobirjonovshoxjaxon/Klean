@extends('admin.general')
@section('content')

    <h1>Show Page</h1>

    <h3><b>Id:</b> {{ $tag->id }}</h3>
    <h3><b>Tag:</b> {{ $tag->tag }}</h3>
    <p><b>Created_at:</b> {{ $tag->created_at}}</p>
    <p><b>Update_at:</b> {{ $tag->updated_at}}</p>
    
    <a href="{{ route('tags.index')}}" class="btn btn-dark">Back</a>

@endsection