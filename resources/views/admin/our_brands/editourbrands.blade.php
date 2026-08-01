@extends('layouts.adminHeader')
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title  float-left">Edit Our Client</h3>
            <a href="{{ url('admin/displayourclient') }}" class="btn btn-default float-right">Back</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form id="video-form" method="post" action="{{ route('admin/updatebrands')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $logo->id }}">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client Name</label>
                                    <input type="text" class="form-control" placeholder="Please Enter Here Client Name" name="name" value="{{ $logo->name }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="logo">Client Logo/Image</label>
                                    <input type="file" name="logo" class="form-control image">
                                    @if ($errors->has('logo'))
                                        <span class="text-danger">{{ $errors->first('logo') }}</span>
                                    @endif
                                </div>
                                <img src="{{ asset('public/OurBrands/' . $logo->logo) }}" alt="{{ $logo->name }}" width="50px" height="50px">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection
@section('footer')
    @include('layouts.adminFooter')
@endsection