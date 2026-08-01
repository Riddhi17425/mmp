@extends('layouts.adminHeader')
@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title float-left">Edit Products You Can Trust</h3>
            <a href="{{ url('admin/producttrust') }}" class="btn btn-default float-right">Back</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{route('admin/updateproducttrust')}}">
                @csrf
                <input type="hidden" name="id" value="{{ $datas->id }}">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Client Name</label>
                            <input type="text" class="form-control" placeholder="Please Enter Here Client Name"
                                name="product_name" value="{{ $datas->product_name}}">
                            @if ($errors->has('product_name'))
                                <span class="text-danger">{{ $errors->first('product_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Client Company Name</label>
                            <input type="text" class="form-control" placeholder="Please Enter Here Client Company Name"
                                name="category_name" value="{{ $datas->category_name}}">
                            @if ($errors->has('category_name'))
                                <span class="text-danger">{{ $errors->first('category_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <!-- textarea -->
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
                      @php
                          $images = explode(',', $datas->image);
                      @endphp
                      @foreach($images as $image)
                        <label for="current_image">Current Image:</label>
                        <img src="{{ asset('public/producttrust/' . $image)  }}" alt="Current Image" style="height:30px">
                    @endforeach
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
