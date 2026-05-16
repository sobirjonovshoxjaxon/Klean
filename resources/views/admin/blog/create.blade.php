@extends('admin.general')
@section('content')
    
    <!-- Main Content -->
     
        
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Blog Create Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
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


                        <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf 

                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" placeholder="Title" value="{{ old('title') }}" name="title">
                                @error('title')
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
                                <label for="">Short Content</label>
                                <input type="text" class="form-control" placeholder="Short content" name="short_content" value="{{ old('short_content') }}">
                                @error('short_content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <td>
                                    <label>Categories</label>

                                    <select name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </div>
                           
                            <div class="form-group">
                                <td>
                                    <label>Tags</label>

                                    <select name="tags[]" multiple>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </div>
                           

                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea  class="form-control" id="" cols="40" rows="10" name="content" placeholder="Content">{{ old('content') }}</textarea>
                                @error('content')
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