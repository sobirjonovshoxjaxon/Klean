@extends('admin.general')
@section('content')
    
    <!-- Main Content -->
     
        
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>User Create Form</h4>
                    <a href="{{ route('users.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                        {{-- Validation --}}
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}


                        <form action="{{ route('users.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf 

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Name" value="{{ old('name') }}" name="name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" placeholder="Image" name="image" value="{{ old('image')}}">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            

                            <button type="submit" class="btn btn-success">Create</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>
                  </div>
                </div>
              </div>
           
        
@endsection 