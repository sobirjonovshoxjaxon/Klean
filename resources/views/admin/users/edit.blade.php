@extends('admin.general')
@section('content')
    
    <!-- Main Content -->
     
        
              <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="card">  
                  <div class="card-header">
                    <h4>User Edit Form</h4>
                    <a href="{{ route('users.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf 

                            <input type="hidden" name="user_id" value="{{ $user->id }}">

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Name" value="{{ $user->name }}"  name="name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" placeholder="Image" name="image">
                                <img src="{{ asset('storage/'.$user->image) }}" alt="" width="100px">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Password" value="{{ $user->password }}">
                                @error('password')
                                    <div class="alert alert-danger">{{ $user->password }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $user->email }}</div>
                                @enderror
                            </div>

                            

                            <button type="submit" class="btn btn-warning">Update</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </form>
                  </div>
                </div>
              </div>
           
        
@endsection 