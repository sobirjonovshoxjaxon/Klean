@extends('admin.general')
@section('content')
    
    <!-- Main Content -->
     
        
              <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="card">  
                  <div class="card-header">
                    <h4>Blog Create Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">
                        <form action="" method="POST">

                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" placeholder="Image">
                            </div>

                            <div class="form-group">
                                <label for="">Short Content</label>
                                <input type="text" class="form-control" placeholder="Short content">
                            </div>

                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea  class="form-control" id="" cols="40" rows="10" placeholder="Content"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>
                  </div>
                </div>
              </div>
           
        
@endsection 