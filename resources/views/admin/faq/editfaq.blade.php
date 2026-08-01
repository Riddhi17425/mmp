@extends('layouts.adminHeader')
@section('sidebar')
    @extends('layouts.adminSidebar')
@endsection
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title float-left">Edit Faq</h3>
            <a href="{{ route('admin/faq') }}" class="btn btn-default float-right">Back</a>
        </div>

        <!-- /.card-header -->
      <div class="card-body">
    <form method="post" enctype="multipart/form-data" action="{{ route('admin/updatefaq') }}">
        @csrf
        <input type="hidden" id="faqid" name="id" value="{{ $data->id }}">

        <div class="row">
            <div class="col-sm-12">
                <label>Blog Name</label>
                <select class="form-select" id="multiple-select-field" data-placeholder="Choose Blog Name" name="blog_id">
                    @foreach ($blog as $blogs)
                        <option value="{{ $blogs->id }}" {{ ($blogs->id == $data->blog_id) ? 'selected' : '' }}>
                            {{ $blogs->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div id="faq-container">
            @php 
                $faqArray = json_decode($data->title_desc, true) ?? []; 
            @endphp

            @foreach($faqArray as $index => $faq)
                <div class="faq-item">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Question</label>
                            <input type="text" name="title[]" class="form-control" value="{{ $faq['question'] }}" placeholder="Enter Question">
                        </div>
                        <div class="col-sm-6">
                            <label>Answer</label>
                            <textarea id="summernote" name="description[]" class="textarea form-control" placeholder="Enter Answer">{{ $faq['answer'] }}</textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger remove-faq">Remove</button>
                </div>
            @endforeach
        </div>

        <button type="button" id="add-more" class="btn btn-success mt-3">Add More</button>

        <div class="row mt-3">
            <div class="col-sm-6">
                <button class="form-control btn btn-primary">Save</button>
            </div>
        </div>
    </form> 
</div>

        <!-- /.card-body -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const faqContainer = document.querySelector("#faq-container");
        const addMoreBtn = document.querySelector("#add-more");
        
             $('.textarea').summernote();
             
        addMoreBtn.addEventListener("click", function () {
            const newFaq = document.createElement("div");
            newFaq.classList.add("faq-item");
            newFaq.innerHTML = `
                <div class="row">
                    <div class="col-sm-6">
                        <label>Question</label>
                        <input type="text" name="title[]" class="form-control" placeholder="Enter Question">
                    </div>
                    <div class="col-sm-6">
                        <label>Answer</label>
                        <textarea name="description[]" class="form-control textarea" placeholder="Enter Answer"></textarea>
                    </div>
                </div>
                <button type="button" class="btn btn-danger remove-faq">Remove</button>
            `;

            faqContainer.appendChild(newFaq);

            $(newFaq).find('.textarea').summernote();
            
            // Add event listener for remove button
            newFaq.querySelector(".remove-faq").addEventListener("click", function () {
                newFaq.remove();
            });
        });

        // Attach event listener to existing "Remove" buttons
        document.querySelectorAll(".remove-faq").forEach(button => {
            button.addEventListener("click", function () {
                this.parentElement.remove();
            });
        });
    });
</script>

@endsection

@section('footer')
    @include('layouts.adminFooter')
@endsection
