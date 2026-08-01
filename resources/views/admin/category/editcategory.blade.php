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
            <form method="post" enctype="multipart/form-data" action="{{ route('admin/updatecategory',$category->id)}}" >
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
                <div class="row">                  
                    <div class="col-sm-6 form-group">
                      <label>Category Name</label>
                      <input type="text" class="form-control" name="category_name" require placeholder="Enter Category Name" value="{{$category->category_name}}">
                      @if ($errors->has('category_name'))
                          <span class="text-danger">{{ $errors->first('category_name') }}</span>
                      @endif
                    </div>
                    <!--<div class="col-sm-12 form-group">-->
                    <!--    <label>Description</label>-->
                    <!--    <textarea id="summernote" name="description" class="textarea"></textarea>-->
                    <!--    @if ($errors->has('description'))-->
                    <!--    <span class="text-danger">{{ $errors->first('description') }}</span>-->
                    <!--    @endif-->
                    <!--</div> -->
                      <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="banner_image">Image</label>
                                    <input type="file" name="banner_image" class="form-control image">
                                    @if ($errors->has('banner_image'))
                                        <span class="text-danger">{{ $errors->first('banner_image') }}</span>
                                    @endif
                                </div>
                                <img src="{{ asset('public/Category_Banner_Images/' . $category->banner_image) }}" alt="{{ $category->name }}" width="50px" height="50px">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="mobile_cat_image">Mobile Image</label>
                                    <input type="file" name="mobile_cat_image" class="form-control image">
                                    @if ($errors->has('mobile_cat_image'))
                                        <span class="text-danger">{{ $errors->first('mobile_cat_image') }}</span>
                                    @endif
                                </div>
                                <img src="{{ asset('public/Category_Mobile_Images/' . $category->mobile_cat_image) }}" alt="{{ $category->name }}" width="50px" height="50px">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                                
                            <label>Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" value="{{ $category->meta_title }}" placeholder="Enter Meta Title" />
                    </div>

                    <div class="col-sm-6 form-group">                       
                            <label>Meta Description</label>
                            <input type="text" class="form-control" name="meta_description" value="{{ $category->meta_description }}" placeholder="Enter Meta Description" />     
                    </div>
                    <div class="col-sm-6 form-group">
                      <label>Category Url</label>
                      <input type="text" class="form-control" name="category_url" require placeholder="Enter Category Name" value="{{$category->category_url}}">
                      @if ($errors->has('category_url'))
                          <span class="text-danger">{{ $errors->first('category_url') }}</span>
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
