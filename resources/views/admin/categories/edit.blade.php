@extends('admin.general')
@section('content')
    
    <!-- Main Content -->
     
        
              <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="card">  
                  <div class="card-header">
                    <h4>Category Edit Form</h4>
                    <a href="{{ route('categories.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">
                        <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
                            @method('PUT')
                            @csrf 

                            <input type="hidden" name="category_id" value="{{ $category->id }}">

                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" class="form-control" placeholder="Category" value="{{ $category->category }}"  name="category">
                                @error('category')
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