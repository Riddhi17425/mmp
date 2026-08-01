@extends('layouts.adminHeader')
@section('sidebar')
@extends('layouts.adminSidebar')
@endsection
@section('content')

<style>
    .tab-block { border: 1px solid #dee2e6; }
    .tab-block .card-header {
        background: #f8f9fa;
        font-weight: 600;
    }
    .tab-block .card-header strong { color: #17367f; }
    .faq-item { border: 1px solid #eee; padding: 15px; border-radius: 6px; margin-bottom: 15px; background: #fafafa; }
    #add-tab, .add-faq { margin-bottom: 25px; }
    .remove-tab, .remove-faq { }
    .existing-image-preview img { border: 1px solid #ddd; border-radius: 4px; padding: 3px; }
</style>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Add Product</h3>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('admin/storeproduct') }}">
            @csrf

            {{-- ============ BASIC INFO ============ --}}
            <div class="row">
                <div class="col-sm-6">
                    <label>Category Name</label>
                    <select class="form-select" id="multiple-select-field" data-placeholder="Choose Category Name" name="category_id">
                        <option value="" disabled selected>Select Category</option>
                        @foreach ($category as $categories)
                        <option value="{{ $categories->id }}">
                            {{ $categories->category_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" required placeholder="Enter Product Name" />
                    @if ($errors->has('product_name'))
                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                    @endif
                </div>

                <div class="col-sm-12 form-group mt-3">
                    <label>Product Description (Banner)</label>
                    <textarea id="summernote" name="product_description" class="textarea"></textarea>
                    @if ($errors->has('product_description'))
                    <span class="text-danger">{{ $errors->first('product_description') }}</span>
                    @endif
                </div>
            </div>

            <hr class="my-4">

            {{-- ============ REPEATABLE TABS ============ --}}
            <h4 class="mb-3">Product Tabs</h4>
            <div id="tabs-wrapper">
                <div class="tab-block card mb-3" data-index="0">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <strong>Tab #1</strong>
                        <button type="button" class="btn btn-sm btn-danger remove-tab" style="display:none;">Remove</button>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tab Name</label>
                            <input type="text" name="items[0][tab_name]" class="form-control" placeholder="e.g. Product Description" />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="items[0][description]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tab Details</label>
                            <textarea name="items[0][tab_details]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tab Features</label>
                            <textarea name="items[0][tab_features]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tab Application</label>
                            <textarea name="items[0][tab_app]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Technical Specification</label>
                            <textarea name="items[0][technical_details]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="items[0][product_image][]" id="tabImage0" multiple />
                                <label class="custom-file-label" for="tabImage0">Choose image</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" id="add-tab" class="btn btn-secondary">
                <i class="fa fa-plus"></i> Add More
            </button>

            {{-- Pristine template used for cloning new tab blocks.
                 A <template> tag's content is never rendered or touched by
                 Summernote, so it can be reused safely for every "Add More" click. --}}
            <template id="tab-template">
                <div class="tab-block card mb-3" data-index="__INDEX__">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <strong>Tab #__NUM__</strong>
                        <button type="button" class="btn btn-sm btn-danger remove-tab">Remove</button>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tab Name</label>
                            <input type="text" name="items[__INDEX__][tab_name]" class="form-control" placeholder="e.g. Product Description" />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="items[__INDEX__][description]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tab Details</label>
                            <textarea name="items[__INDEX__][tab_details]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tab Features</label>
                            <textarea name="items[__INDEX__][tab_features]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tab Application</label>
                            <textarea name="items[__INDEX__][tab_app]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Technical Specification</label>
                            <textarea name="items[__INDEX__][technical_details]" class="summernote textarea"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="items[__INDEX__][product_image][]" id="tabImage__INDEX__" multiple />
                                <label class="custom-file-label" for="tabImage__INDEX__">Choose image</label>
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <hr class="my-4">

            {{-- ============ FAQ SECTION ============ --}}
            <div class="faq-section">
                <h4 class="mb-3">Product FAQs</h4>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Question</label>
                            <input type="text" name="faq_questions[]" class="form-control" placeholder="Enter Question">
                        </div>
                        <div class="col-sm-6">
                            <label>Answer</label>
                            <textarea name="faq_answers[]" class="form-control" placeholder="Enter Answer"></textarea>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary add-faq">Add Another FAQ</button>
            </div>

            <hr class="my-4">

            {{-- ============ MOBILE / BANNER IMAGE ============ --}}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Product Mobile Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="mobile_image" id="mobileImage" />
                            <label class="custom-file-label" for="mobileImage">Choose mobile image</label>
                        </div>
                        @if ($errors->has('mobile_image'))
                        <span class="text-danger">{{ $errors->first('mobile_image') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Product Banner Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="product_banner_image" id="bannerImage" />
                            <label class="custom-file-label" for="bannerImage">Choose banner image</label>
                        </div>
                        @if ($errors->has('product_banner_image'))
                        <span class="text-danger">{{ $errors->first('product_banner_image') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            {{-- ============ SHORT DESCRIPTION / URL / ALT ============ --}}
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Product Short Description</label>
                    <textarea name="product_shortdescription" class="form-control" placeholder="Enter Product Short Description"></textarea>
                    @if ($errors->has('product_shortdescription'))
                    <span class="text-danger">{{ $errors->first('product_shortdescription') }}</span>
                    @endif
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Url</label>
                    <input type="text" class="form-control" name="producturl" required placeholder="Enter Product Url" />
                    @if ($errors->has('producturl'))
                    <span class="text-danger">{{ $errors->first('producturl') }}</span>
                    @endif
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Alt</label>
                    <input type="text" class="form-control" name="alt" required placeholder="Enter alt" />
                    @if ($errors->has('alt'))
                    <span class="text-danger">{{ $errors->first('alt') }}</span>
                    @endif
                </div>
            </div>

            {{-- ============ META ============ --}}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" name="meta_description" placeholder="Enter Meta Description" />
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
</div>
@endsection
@section('footer')
@include('layouts.adminFooter')
@endsection

@section('script')
<script>
    $("#multiple-select-field").select2({
        theme: "bootstrap-5",
        width: $(this).data("width") ? $(this).data("width") : $(this).hasClass("w-100") ? "100%" : "style",
        placeholder: $(this).data("placeholder"),
        closeOnSelect: false,
        minimumResultsForSearch: -1,
    });

    // init summernote on initial fields
    $(document).ready(function () {
        $('.summernote').summernote({ height: 200 });
        $('#summernote').summernote({ height: 200 });
    });

    // ---------- Repeatable FAQ ----------
    document.querySelector('.add-faq').addEventListener('click', function () {
        const faqItem = document.querySelector('.faq-item').cloneNode(true);
        faqItem.querySelectorAll('input, textarea').forEach(el => el.value = '');
        document.querySelector('.faq-section').insertBefore(faqItem, this);
    });

    // ---------- Repeatable Tabs ----------
    const tabTemplateHtml = document.getElementById('tab-template').innerHTML;

    // Renumbers every visible tab block: fixes the header label ("Tab #N"),
    // the data-index, all field "name" attributes, and the file input id/label.
    // Runs after every add/remove so numbering always matches what's on screen.
    function renumberTabs() {
        const blocks = document.querySelectorAll('#tabs-wrapper .tab-block');
        blocks.forEach((block, i) => {
            block.dataset.index = i;
            block.querySelector('.card-header strong').textContent = 'Tab #' + (i + 1);

            const removeBtn = block.querySelector('.remove-tab');
            if (removeBtn) removeBtn.style.display = (i === 0) ? 'none' : 'inline-block';

            block.querySelectorAll('[name]').forEach(el => {
                el.name = el.name.replace(/items\[\d+\]/, `items[${i}]`);
            });

            const fileInput = block.querySelector('input[type="file"]');
            if (fileInput) fileInput.id = 'tabImage' + i;

            const fileLabel = block.querySelector('.custom-file-label');
            if (fileLabel) fileLabel.setAttribute('for', 'tabImage' + i);
        });
    }

    document.getElementById('add-tab').addEventListener('click', function () {
        const wrapper = document.getElementById('tabs-wrapper');
        const nextIndex = wrapper.querySelectorAll('.tab-block').length;

        const html = tabTemplateHtml
            .split('__INDEX__').join(nextIndex)
            .split('__NUM__').join(nextIndex + 1);

        const holder = document.createElement('div');
        holder.innerHTML = html.trim();
        const newBlock = holder.firstElementChild;

        wrapper.appendChild(newBlock);

        // init summernote fresh on this brand-new (never-initialized) block only
        newBlock.querySelectorAll('textarea').forEach(t => {
            $(t).summernote({ height: 200 });
        });

        renumberTabs();
    });

    // remove a tab block, then fix numbering/indexes for the rest
    document.getElementById('tabs-wrapper').addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-tab')) {
            const block = e.target.closest('.tab-block');

            // destroy summernote instances inside this block before removing it
            block.querySelectorAll('textarea.note-editable, textarea').forEach(t => {
                try { $(t).summernote('destroy'); } catch (err) {}
            });

            block.remove();
            renumberTabs();
        }
    });

    // update custom-file-input label text on choose
    $(document).on('change', '.custom-file-input', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName);
    });
</script>
@endsection
