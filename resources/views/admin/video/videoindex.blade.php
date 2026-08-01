@extends('layouts.adminHeader')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">video Listing</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 30px;margin: 0 auto;">
                            <div class="input-group-append">
                                <a href="{{ url('admin/addvideo') }}"><i class="far fa-plus-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>video Name</th>
                                <th>Action</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($video as $videos)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $videos->video_name }}</td>
                                    <td>
                                        <a href="{{ url('admin/editvideo/'.$videos->id)  }}"><i class="far fa-edit"></i>
                                        </a> | <a href="{{ url('admin/deletevideos/'.$videos['id']) }}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="far fa-trash-alt"></i></a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection
@section('footer')
    @include('layouts.adminFooter')
@endsection
