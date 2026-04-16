@extends('admin.general')
@section('content')
    
    <!-- Main Content -->
     
        
              <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="card">  
                  <div class="card-header">
                    <h4>Blog Edit Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">
                        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf 

                            <input type="hidden" name="post_id" value="{{ $post->id }}">

                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" placeholder="Title" value="{{ $post->title }}"  name="title">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" placeholder="Image" name="image">
                                <img src="{{ asset('storage/'.$post->image) }}" alt="" width="100px">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Short Content</label>
                                <input type="text" class="form-control" name="short_content" placeholder="Short content" value="{{ $post->short_content }}">
                                @error('short_content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea  class="form-control" id="" cols="40" rows="10" placeholder="Content" name="content">{{ $post->content }}</textarea>
                                @error('content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-warning">Update</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </form>
                  </div>
                </div>
              </div>
           
        
@endsection 