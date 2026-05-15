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


                        <form action="{{ route('categories.store')}}" method="POST">
                            @csrf 

                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" class="form-control" placeholder="Category" value="{{ old('category') }}" name="category">
                                @error('category')
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