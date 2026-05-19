@extends('admin.general')
@section('content')
           
        <h1>Welcome {{ auth()->user()->name ?? "I see you who you are!" }}</h1>
            
@endsection
          
          