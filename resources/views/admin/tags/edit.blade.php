@extends('admin.general')
@section('content')
    
    <!-- Main Content -->
     
        
              <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="card">  
                  <div class="card-header">
                    <h4>Tags Edit Form</h4>
                    <a href="{{ route('tags.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">
                        <form action="{{ route('tags.update', $tag->id) }}" method="POST">
                            @method('PUT')
                            @csrf 

                            <input type="hidden" name="tag_id" value="{{ $tag->id }}">

                            <div class="form-group">
                                <label for="">Tag</label>
                                <input type="text" class="form-control" placeholder="Tag" value="{{ $tag->tag }}"  name="tag">
                                @error('tag')
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