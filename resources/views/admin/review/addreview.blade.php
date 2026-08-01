@extends('layouts.adminHeader')

@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection

@section('content')
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Add Review</h3>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('admin/storereview') }}">
            @csrf
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="customer_name" required placeholder="Enter Customer Name">
                    @if ($errors->has('customer_name'))
                        <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                    @endif
                </div>

                <div class="col-sm-6 form-group">
                    <label>Rating</label>
                    <select class="form-control" name="rating" required>
                        <option value="5" selected>5 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="2">2 Stars</option>
                        <option value="1">1 Star</option>
                    </select>
                </div>

                <div class="col-sm-12 form-group">
                    <label>Review Text</label>
                    <textarea class="form-control" name="review_text" rows="4" required placeholder="Enter Review"></textarea>
                    @if ($errors->has('review_text'))
                        <span class="text-danger">{{ $errors->first('review_text') }}</span>
                    @endif
                </div>

                <div class="col-sm-12 form-group">
                    <label>Customer Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

                <div class="col-sm-6 form-group">
                    <label>Sort Order</label>
                    <input type="number" class="form-control" name="sort_order" value="0">
                </div>

                <div class="col-sm-6 form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="Active" selected>Active</option>
                        <option value="InActive">InActive</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mt-3">
                    <div class="form-group">
                        <button class="form-control btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')
    @include('layouts.adminFooter')
@endsection
