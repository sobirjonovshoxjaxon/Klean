@extends('admin.general')
@section('content')

            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Blog Table</h4>

                    <a href="{{ route('posts.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Short_content</th>
                          <th>Category</th>
                          {{-- <th>Tags</th> --}}
                          <th>Content</th>
                          <th colspan="3">Action</th>
                        </tr>
                        
                        @foreach ($posts as $post)
                          <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                              {{-- <p>{{ $post->image}}</p> --}}
                              <img style="width: 100px; height: 100px;" src="{{ asset('storage/'.$post->image) }}" alt="">
                            </td>
                            <td>{{ $post->short_content }}</td>
                            <td>{{ $post->category->category }}</td>
                            <td>{{ Str::limit($post->content,100) }}</td>
                            <td>
                              <a href="{{ route('posts.show', ['post' => $post->id])}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('posts.edit', ['post' => $post->id])}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td> 
                              <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" onsubmit="return confirm('You Really want delete this post?')">
                                @csrf 
                                @method('DELETE')


                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                          
                          </tr>
                        @endforeach
                        
                        
                      </table>

                      {{ $posts->links('vendor.pagination.bootstrap-5') }}
                    </div>
                  </div>
                  {{-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div> --}}
                </div>
            </div>


@endsection