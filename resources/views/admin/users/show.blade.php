@extends('admin.general')
@section('content')

    <h1>User Show Page</h1>

    <h3><b>Id:</b> {{ $user->id }}</h3>
    <h3><b>Name:</b> {{ $user->name }}</h3>
    <p><b>Image:</b></p>
    <img src="{{ asset('storage/'.$user->image) }}" alt="" style="width: 300px; height: 300px;">

    <p><b>Email:</b> {{ $user->email }}</p>
    <p><b>Password:</b> {{ $user->password }}</p>
    <p><b>Created_at:</b> {{ $user->created_at}}</p>
    <p><b>Update_at:</b> {{ $user->updated_at}}</p>
    
    <a href="{{ route('users.index')}}" class="btn btn-dark">Back</a>

@endsection