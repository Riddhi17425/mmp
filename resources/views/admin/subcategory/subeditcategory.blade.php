@extends('layouts.adminHeader')
@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Category</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin/updatesubcategory',$subcategory->id)}}" >
                @csrf
                <input type="hidden" name="id" value="{{$subcategory->id}}">
                <div class="row">                  
                    <div class="col-sm-6 form-group">
                      <label>category Name</label>
                      <input type="text" class="form-control" name="subcategory_name" require placeholder="Enter Category Name" value="{{$subcategory->subcategory_name}}">
                      @if ($errors->has('subcategory_name'))
                          <span class="text-danger">{{ $errors->first('subcategory_name') }}</span>
                      @endif
                    </div>  
                  </div>
                  <div class="col-sm-6 form-group">
                        <label> Url</label>
                        <input type="text" class="form-control" name="url" require value="{{ $subcategory->url }}" placeholder="Enter Url">
                        @if ($errors->has('url'))
                            <span class="text-danger">{{ $errors->first('url') }}</span>
                        @endif
                    </div>
                  </div>
                <div class="row">
                <div class="col-sm-12 form-group">
                        <label>Description</label>
                        <textarea id="summernote" name="description" class="textarea"> {{ $subcategory->description}}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
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
