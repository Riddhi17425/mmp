@extends('layouts.adminHeader')
@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title float-left">Edit Case Study</h3>
            <a href="{{ route('admin/casestudy') }}" class="btn btn-default float-right">Back</a>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin/updatecasestudy') }}">
                @csrf
                <input type="hidden" id="casestudyid" name="id" value="{{ $data->id }}">
                <div class="row">

                    <div class="col-sm-12 form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" require placeholder="Enter Title"
                            value="{{ $data->title }}">
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>

                    <div class="col-sm-12 form-group">
                        <label>Description</label>
                        <textarea id="summernote" name="description" class="textarea"> {!! $data->description !!}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-12 form-group">
                        <label>Long Description</label>
                        <textarea id="summernote" name="long_description" class="textarea"> {!! $data->long_description !!}</textarea>
                        @if ($errors->has('long_description'))
                            <span class="text-danger">{{ $errors->first('long_description') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <img src="{{ asset('public/casestudy/' . $data->image) }}" width="50px" height="50px">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="og_image" id="og_image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <img src="{{ asset('public/casestudy_og_image/' . $data->og_image) }}" width="50px" height="50px">
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Blog Page Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="banner_image" id="banner_image">
                                <label class="custom-file-label" for="customFile1">Choose Blog Page Image</label>
                            </div>
                        </div>
                        <img src="{{ asset('public/casestudy_banner/' . $data->banner_image) }}" width="50px" height="50px">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>URL</label>
                            <input type="text" class="form-control" name="url" require placeholder="Enter Url"
                                value="{{ $data->url }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>alt</label>
                            <input type="text" class="form-control" name="alt" require placeholder="Enter alt"
                                value="{{ $data->alt }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Short Description</label>
                            <input type="text" class="form-control" name="short_description" require
                                placeholder="Enter Short Description" value="{{ $data->short_description }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" value="{{ $data->meta_title }}" placeholder="Enter Meta Title">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" class="form-control" name="meta_description" value="{{ $data->meta_description }}" placeholder="Enter Meta Description">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button class="form-control btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>

            </form> 
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('footer')
    @include('layouts.adminFooter')
@endsection
