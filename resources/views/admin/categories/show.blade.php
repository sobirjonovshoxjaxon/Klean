@extends('admin.general')
@section('content')

    <h1>Show Page</h1>

    <h3><b>Id:</b> {{ $category->id }}</h3>
    <h3><b>Title:</b> {{ $category->category }}</h3>
    <p><b>Created_at:</b> {{ $category->created_at}}</p>
    <p><b>Update_at:</b> {{ $category->updated_at}}</p>
    
    <a href="{{ route('categories.index')}}" class="btn btn-dark">Back</a>

@endsection