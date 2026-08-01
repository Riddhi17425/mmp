@extends('layouts.adminHeader')

@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection

@section('content')
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title float-left">Edit Review</h3>
        <a href="{{ route('admin/review') }}" class="btn btn-default float-right">Back</a>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('admin/updatereview') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">

            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="customer_name" required value="{{ $data->customer_name }}">
                </div>

                <div class="col-sm-6 form-group">
                    <label>Rating</label>
                    <select class="form-control" name="rating" required>
                        @for($i = 5; $i >= 1; $i--)
                            <option value="{{ $i }}" {{ $data->rating == $i ? 'selected' : '' }}>{{ $i }} Stars</option>
                        @endfor
                    </select>
                </div>

                <div class="col-sm-12 form-group">
                    <label>Review Text</label>
                    <textarea class="form-control" name="review_text" rows="4" required>{{ $data->review_text }}</textarea>
                </div>

                <div class="col-sm-12 form-group">
                    <label>Customer Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    @if($data->image)
                        <img src="{{ asset('public/reviews/' . $data->image) }}" width="60px" height="60px" class="mt-2">
                    @endif
                </div>

                <div class="col-sm-6 form-group">
                    <label>Sort Order</label>
                    <input type="number" class="form-control" name="sort_order" value="{{ $data->sort_order }}">
                </div>

                <div class="col-sm-6 form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="Active" {{ $data->status == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="InActive" {{ $data->status == 'InActive' ? 'selected' : '' }}>InActive</option>
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
