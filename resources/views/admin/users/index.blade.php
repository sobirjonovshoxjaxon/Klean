@extends('admin.general')
@section('content')

            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>User Table</h4>

                    <a href="{{ route('users.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th colspan="3">Action</th>
                        </tr>
                        
                        
                        @foreach ($users as $user)
                            
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                              <img style="width: 100px; height: 100px;" src="{{ asset('storage/'.$user->image)}}" alt="">
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>
                              <a href="{{ route('users.show',$user->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td> 
                              <form action="{{ route('users.destroy', $user->id)}}" onsubmit="return confirm('Are you sure?')" method="POST">
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