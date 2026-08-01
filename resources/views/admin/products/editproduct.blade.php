@extends('layouts.adminHeader') @section('sidebar')
@extends('layouts.adminSidebar') @endsection @section('content')
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Edit Product</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('admin/updateproduct',$data->id) }}">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}" />
            <div class="row">
                <div class="col-sm-6">
                    <label>Category Name</label>
                    <select class="form-select" id="multiple-select-field" data-placeholder="Choose Category Name" name="category_id">
                        @foreach ($category as $categories)
                        <option value="{{ $categories->id }}" {{ ($categories->
                          id == $data->category_id) ? 'selected':'' }}>{{
                          $categories->category_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" require placeholder="Enter Product Name" value="{{$data->product_name}}" />
                    @if ($errors->has('product_name'))
                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                    @endif
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Alt</label>
                    <input type="text" class="form-control" name="alt" require placeholder="Enter Product alt" value="{{$data->alt}}" />
                    @if ($errors->has('alt'))
                    <span class="text-danger">{{ $errors->first('alt') }}</span>
                    @endif
                </div>
                <div class="col-sm-12 form-group">
                    <label>Product Description(Banner)</label>
                    <textarea id="summernote" name="product_description" class="textarea">
                    {{ $data->product_description}}</textarea>
                    @if ($errors->has('product_description'))
                    <span class="text-danger">{{ $errors->first('product_description') }}</span>
                    @endif
                </div>
                <div class="col-sm-12 form-group">
                    <label>Description</label>
                    <textarea id="summernote" name="description" class="textarea">
                    {{ $data->description}}</textarea>
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                
                <div class="col-sm-12 form-group">
                    <label>Tab Details</label>
                    <textarea id="summernote" name="tab_details" class="textarea">
                    {{ $data->tab_details}}</textarea>
                    @if ($errors->has('tab_details'))
                    <span class="text-danger">{{ $errors->first('tab_details') }}</span>
                    @endif
                </div>
                <div class="col-sm-12 form-group">
                    <label>Tab Features</label>
                    <textarea id="summernote" name="tab_features" class="textarea">
                    {{ $data->tab_features}}</textarea>
                    @if ($errors->has('tab_features'))
                    <span class="text-danger">{{ $errors->first('tab_features') }}</span>
                    @endif
                </div>
                <div class="col-sm-12 form-group">
                    <label>Tab Application</label>
                    <textarea id="summernote" name="tab_app" class="textarea">
                    {{ $data->tab_app}}</textarea>
                    @if ($errors->has('tab_app'))
                    <span class="text-danger">{{ $errors->first('tab_app') }}</span>
                    @endif
                </div>
                <div class="col-sm-12 form-group">
                    <label>Technical Specification</label>
                    <textarea id="summernote" name="technical_details" class="textarea">
                    {{ $data->technical_details}}</textarea>
                    @if ($errors->has('technical_details'))
                    <span class="text-danger">{{ $errors->first('technical_details') }}</span>
                    @endif
                </div>
            </div>
            
                <div class="faq-section">
                <h4>Product FAQs</h4>
                <!-- Check if $data->faq is not empty and is a string -->
                @if (!empty($data->faq) && is_string($data->faq))
                    <!-- Decode the JSON string into an array -->
                    @php $faqArray = json_decode($data->faq); @endphp
                    <!-- Loop through the decoded array -->
                    @foreach($faqArray as $faq)
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Question</label>
                                <input type="text" name="faq_questions[]" class="form-control" value="{{ $faq->question }}" placeholder="Enter Question">
                            </div>
                            <div class="col-sm-6">
                                <label>Answer</label>
                                <textarea name="faq_answers[]" class="form-control" placeholder="Enter Answer">{{ $faq->answer }}</textarea>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                <button type="button" class="btn btn-secondary add-faq">Add Another FAQ</button>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="product_banner_image">Image</label>
                        <input type="file" name="product_banner_image" class="form-control image">
                        @if ($errors->has('product_banner_image'))
                            <span class="text-danger">{{ $errors->first('product_banner_image') }}</span>
                        @endif
                    </div>
                    <img src="{{ asset('public/Product_Banner_Images/' . $data->product_banner_image) }}" alt="{{ $data->name }}" width="50px" height="50px">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="mobile_image">Mobile Image</label>
                        <input type="file" name="mobile_image" class="form-control image">
                        @if ($errors->has('mobile_image'))
                            <span class="text-danger">{{ $errors->first('mobile_image') }}</span>
                        @endif
                    </div>
                    <img src="{{ asset('public/Product_Mobile_Images/' . $data->mobile_image) }}" alt="{{ $data->name }}" width="50px" height="50px">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Product Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="product_image[]" id="customFile" multiple />
                            <label class="custom-file-label" for="customFile">Choose image</label>
                        </div>
                        @if ($errors->has('product_image'))
                        <span class="text-danger">{{ $errors->first('product_image') }}</span>
                        @endif @php $images = explode(',', $data->product_image); @endphp
                        @foreach($images as $image)
                        <label for="current_image">Current Image:</label>
                        <img src="{{ asset('public/Product_Images/' . $image)  }}" alt="Current Image" style="height: 150px; margin-top: 10px" />
                        @endforeach @if ($errors->has('product_image'))
                        <span class="text-danger">{{ $errors->first('product_image') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Product Short Description</label>
                    <input type="text" id="product_shortdescription" name="product_shortdescription" class="form-control" placeholder="Enter Product Short Description" value="{{$data->product_shortdescription}}" />
                    @if ($errors->has('product_shortdescription'))
                    <span class="text-danger">{{ $errors->first('product_shortdescription') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" value="{{ $data->meta_title }}" placeholder="Enter Meta Title" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" name="meta_description" value="{{ $data->meta_description }}" placeholder="Enter Meta Description" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Product Url</label>
                    <input type="text" class="form-control" name="producturl" require value="{{ $data->producturl }}" placeholder="Enter Product Url" />
                    @if ($errors->has('producturl'))
                    <span class="text-danger">{{ $errors->first('producturl') }}</span>
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
@endsection @section('footer') @include('layouts.adminFooter') @endsection
@section('script')
<script>
    document.querySelector('.add-faq').addEventListener('click', function() {
        const faqItem = document.querySelector('.faq-item').cloneNode(true);
        document.querySelector('.faq-section').insertBefore(faqItem, this);
    });
</script>
<script>
    $("#multiple-select-field").select2({
        theme: "bootstrap-5",
        width: $(this).data("width") ?
            $(this).data("width") : $(this).hasClass("w-100") ?
            "100%" : "style",
        placeholder: $(this).data("placeholder"),
        closeOnSelect: false,
    });
    $("#multiple-select-field2").select2({
        theme: "bootstrap-5",
        width: $(this).data("width") ?
            $(this).data("width") : $(this).hasClass("w-100") ?
            "100%" : "style",
        placeholder: $(this).data("placeholder"),
        closeOnSelect: false,
    });
</script>
@endsection