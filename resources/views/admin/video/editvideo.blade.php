@extends('layouts.adminHeader')
@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit video</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin/updatevideo',$video->id)}}" >
                @csrf
                <input type="hidden" name="id" value="{{$video->id}}">
                <div class="row">                  
                    <div class="col-sm-12 form-group">
                      <label>video Name</label>
                      <input type="text" class="form-control" name="video_name" require placeholder="Enter video Name" value="{{$video->video_name}}">
                      @if ($errors->has('video_name'))
                          <span class="text-danger">{{ $errors->first('video_name') }}</span>
                      @endif
                    </div>
                   
                    <div class="col-sm-12 form-group">
                      <label>video Url</label>
                      <input type="text" class="form-control" name="video_url" require placeholder="Enter video Name" value="{{$video->video_url}}">
                      @if ($errors->has('video_url'))
                          <span class="text-danger">{{ $errors->first('video_url') }}</span>
                      @endif
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
