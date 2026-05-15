@extends('admin.general')
@section('content')

            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Category Table</h4>

                    <a href="{{ route('categories.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>Category</th>
                          <th colspan="3">Action</th>
                        </tr>
                        
                        
                        @foreach ($categories as $category)
                            
                          <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category }}</td>
                           
                            <td>
                              <a href="{{ route('categories.show',$category->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td> 
                              <form action="{{ route('categories.destroy', $category->id)}}" onsubmit="return confirm('Are you sure?')" method="POST">
                                @csrf 
                                @method('DELETE')
                                
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                          
                          </tr>
                        @endforeach
                        
                        
                      </table>

                      {{-- {{ $posts->links('vendor.pagination.bootstrap-5') }} --}}
                    </div>
                  </div>
                
                </div>
            </div>


@endsection