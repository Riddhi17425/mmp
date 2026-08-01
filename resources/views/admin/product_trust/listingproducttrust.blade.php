@extends('layouts.adminHeader')
@section('sidebar')
@extends('layouts.adminSidebar')
@endsection
@section('content')
<div class="row">
  
<div class="col-12">
          @if(session()->has('success'))
              <div class="alert alert-success">
                  {{ session()->get('success') }}
              </div>
          @endif
            <div class="card">
            <div class="relative max-w-xs pl-2 pt-2">
                        <form action="{{ route('admin/searchproducttrustlist')}}" method="GET">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" name="s" class="block w-full p-2  text-sm" placeholder="Search..." />
                            <button name="search" class="btn btn-default">Search</button>
                        </form>
             </div>
              <div class="card-header">
                <h3 class="card-title">Products You Can Trust</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 30px;margin: 0 auto;">
                    <div class="input-group-append">
                    <a href="{{ route('admin/addproducttrust')}}"><i class="far fa-plus-square"></i></a>
                    </div>
                  </div>
                </div>
              </div>
             
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap fixed">
                  <thead>
                    <tr>
                      <th width="10%">ID</th>
                      <th>Name</th>
                      <th>Category Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                       @foreach($data as $key=>$clientsays)
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $clientsays->product_name }}</td>
                      <td>{{ $clientsays->category_name }}</td>
                      <td><a href="{{ url('admin/editproducttrust/' . $clientsays->id) }}"><i class="far fa-edit"></i></a> | <a href="{{ url('admin/deleteproducttrust/' . $clientsays->id) }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{ $data->links()}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
  
  
</div>
@endsection

@section('footer')
    @include('layouts.adminFooter')
@endsection
