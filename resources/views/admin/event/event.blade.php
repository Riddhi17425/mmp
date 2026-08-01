@extends('layouts.adminHeader')
@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Add Event</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin/storeevent') }}">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Please Enter Here Name"
                                name="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Place</label>
                            <input type="text" class="form-control" placeholder="Please Enter Here Event Place"
                                name="place">
                            @if ($errors->has('place'))
                                <span class="text-danger">{{ $errors->first('place') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" placeholder="Please Enter Here Event Date"
                                name="date">
                            @if ($errors->has('date'))
                                <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Stall No</label>
                            <input type="text" class="form-control" placeholder="Please Enter Here Stall No"
                                name="stall_no">
                            @if ($errors->has('stall_no'))
                                <span class="text-danger">{{ $errors->first('stall_no') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>alt</label>
                            <input type="text" class="form-control" placeholder="Please Enter Here alt"
                                name="alt">
                            @if ($errors->has('alt'))
                                <span class="text-danger">{{ $errors->first('alt') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image[]" id="customFile"
                                    multiple>
                                <label class="custom-file-label" for="customFile">Choose image</label>
                            </div>
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary">Save</button>
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
