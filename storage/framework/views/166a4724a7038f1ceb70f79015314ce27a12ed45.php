
<?php $__env->startSection('sidebar'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<style>
    .tab-block { border: 1px solid #dee2e6; }
    .tab-block .card-header {
        background: #f8f9fa;
        font-weight: 600;
    }
    .tab-block .card-header strong { color: #17367f; }
    .faq-item { border: 1px solid #eee; padding: 15px; border-radius: 6px; margin-bottom: 15px; background: #fafafa; }
    #add-tab, .add-faq { margin-bottom: 25px; }
    .existing-image-preview img { border: 1px solid #ddd; border-radius: 4px; padding: 3px; margin-right: 8px; margin-top: 8px; height: 90px; }
</style>

<?php
    $tabs = (!empty($data->product_tabs) && is_string($data->product_tabs))
        ? json_decode($data->product_tabs, true)
        : [];
    if (!is_array($tabs)) { $tabs = []; }
?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Edit Product</h3>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo e(route('admin/updateproduct', $data->id)); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($data->id); ?>" />

            
            <div class="row">
                <div class="col-sm-6">
                    <label>Category Name</label>
                    <select class="form-select" id="multiple-select-field" data-placeholder="Choose Category Name" name="category_id">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categories->id); ?>" <?php echo e(($categories->id == $data->category_id) ? 'selected' : ''); ?>>
                            <?php echo e($categories->category_name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" required placeholder="Enter Product Name" value="<?php echo e($data->product_name); ?>" />
                    <?php if($errors->has('product_name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('product_name')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6 form-group mt-3">
                    <label>Product Alt</label>
                    <input type="text" class="form-control" name="alt" required placeholder="Enter Product alt" value="<?php echo e($data->alt); ?>" />
                    <?php if($errors->has('alt')): ?>
                    <span class="text-danger"><?php echo e($errors->first('alt')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 form-group mt-3">
                    <label>Product Description (Banner)</label>
                    <textarea id="summernote" name="product_description" class="textarea"><?php echo e($data->product_description); ?></textarea>
                    <?php if($errors->has('product_description')): ?>
                    <span class="text-danger"><?php echo e($errors->first('product_description')); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <hr class="my-4">

            
            <h4 class="mb-3">Product Tabs</h4>
            <div id="tabs-wrapper">
                <?php if(count($tabs) > 0): ?>
                    <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-block card mb-3" data-index="<?php echo e($i); ?>">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <strong>Tab #<?php echo e($i + 1); ?></strong>
                            <button type="button" class="btn btn-sm btn-danger remove-tab" <?php if($i === 0): ?> style="display:none;" <?php endif; ?>>Remove</button>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tab Name</label>
                                <input type="text" name="items[<?php echo e($i); ?>][tab_name]" class="form-control" value="<?php echo e($tab['tab_name'] ?? ''); ?>" placeholder="e.g. Product Description" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="items[<?php echo e($i); ?>][description]" class="summernote textarea"><?php echo e($tab['description'] ?? ''); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tab Details</label>
                                <textarea name="items[<?php echo e($i); ?>][tab_details]" class="summernote textarea"><?php echo e($tab['tab_details'] ?? ''); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tab Features</label>
                                <textarea name="items[<?php echo e($i); ?>][tab_features]" class="summernote textarea"><?php echo e($tab['tab_features'] ?? ''); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tab Application</label>
                                <textarea name="items[<?php echo e($i); ?>][tab_app]" class="summernote textarea"><?php echo e($tab['tab_app'] ?? ''); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Technical Specification</label>
                                <textarea name="items[<?php echo e($i); ?>][technical_details]" class="summernote textarea"><?php echo e($tab['technical_details'] ?? ''); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="items[<?php echo e($i); ?>][product_image][]" id="tabImage<?php echo e($i); ?>" multiple />
                                    <label class="custom-file-label" for="tabImage<?php echo e($i); ?>">Choose image</label>
                                </div>

                                <?php if(!empty($tab['product_image'])): ?>
                                    <input type="hidden" name="items[<?php echo e($i); ?>][keep_existing_image]" value="1" />
                                    <div class="existing-image-preview">
                                        <?php $__currentLoopData = explode(',', $tab['product_image']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(trim($img) !== ''): ?>
                                            <img src="<?php echo e(asset('public/Product_Images/' . trim($img))); ?>" alt="Current Image" />
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    
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
                                <textarea name="items[0][description]" class="summernote textarea"><?php echo e($data->description); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tab Details</label>
                                <textarea name="items[0][tab_details]" class="summernote textarea"><?php echo e($data->tab_details); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tab Features</label>
                                <textarea name="items[0][tab_features]" class="summernote textarea"><?php echo e($data->tab_features); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tab Application</label>
                                <textarea name="items[0][tab_app]" class="summernote textarea"><?php echo e($data->tab_app); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Technical Specification</label>
                                <textarea name="items[0][technical_details]" class="summernote textarea"><?php echo e($data->technical_details); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="items[0][product_image][]" id="tabImage0" multiple />
                                    <label class="custom-file-label" for="tabImage0">Choose image</label>
                                </div>

                                <?php if(!empty($data->product_image)): ?>
                                    <input type="hidden" name="items[0][keep_existing_image]" value="1" />
                                    <div class="existing-image-preview">
                                        <?php $__currentLoopData = explode(',', $data->product_image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(trim($img) !== ''): ?>
                                            <img src="<?php echo e(asset('public/Product_Images/' . trim($img))); ?>" alt="Current Image" />
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <button type="button" id="add-tab" class="btn btn-secondary">
                <i class="fa fa-plus"></i> Add More
            </button>

            
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

            
            <div class="faq-section">
                <h4 class="mb-3">Product FAQs</h4>
                <?php if(!empty($data->faq) && is_string($data->faq)): ?>
                    <?php $faqArray = json_decode($data->faq); ?>
                    <?php $__currentLoopData = $faqArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Question</label>
                                <input type="text" name="faq_questions[]" class="form-control" value="<?php echo e($faq->question); ?>" placeholder="Enter Question">
                            </div>
                            <div class="col-sm-6">
                                <label>Answer</label>
                                <textarea name="faq_answers[]" class="form-control" placeholder="Enter Answer"><?php echo e($faq->answer); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
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
                <?php endif; ?>
                <button type="button" class="btn btn-secondary add-faq">Add Another FAQ</button>
            </div>

            <hr class="my-4">

            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="product_banner_image">Banner Image</label>
                        <input type="file" name="product_banner_image" class="form-control image" id="bannerImage">
                        <?php if($errors->has('product_banner_image')): ?>
                            <span class="text-danger"><?php echo e($errors->first('product_banner_image')); ?></span>
                        <?php endif; ?>
                    </div>
                    <?php if($data->product_banner_image): ?>
                    <img src="<?php echo e(asset('public/Product_Banner_Images/' . $data->product_banner_image)); ?>" alt="<?php echo e($data->product_name); ?>" width="100" class="mt-2">
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="mobile_image">Mobile Image</label>
                        <input type="file" name="mobile_image" class="form-control image" id="mobileImage">
                        <?php if($errors->has('mobile_image')): ?>
                            <span class="text-danger"><?php echo e($errors->first('mobile_image')); ?></span>
                        <?php endif; ?>
                    </div>
                    <?php if($data->mobile_image): ?>
                    <img src="<?php echo e(asset('public/Product_Mobile_Images/' . $data->mobile_image)); ?>" alt="<?php echo e($data->product_name); ?>" width="100" class="mt-2">
                    <?php endif; ?>
                </div>
            </div>

            
            <div class="row mt-3">
                <div class="col-sm-6 form-group">
                    <label>Product Short Description</label>
                    <input type="text" id="product_shortdescription" name="product_shortdescription" class="form-control" placeholder="Enter Product Short Description" value="<?php echo e($data->product_shortdescription); ?>" />
                    <?php if($errors->has('product_shortdescription')): ?>
                    <span class="text-danger"><?php echo e($errors->first('product_shortdescription')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Url</label>
                    <input type="text" class="form-control" name="producturl" required value="<?php echo e($data->producturl); ?>" placeholder="Enter Product Url" />
                    <?php if($errors->has('producturl')): ?>
                    <span class="text-danger"><?php echo e($errors->first('producturl')); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" value="<?php echo e($data->meta_title); ?>" placeholder="Enter Meta Title" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" name="meta_description" value="<?php echo e($data->meta_description); ?>" placeholder="Enter Meta Description" />
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('layouts.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $("#multiple-select-field").select2({
        theme: "bootstrap-5",
        width: $(this).data("width") ? $(this).data("width") : $(this).hasClass("w-100") ? "100%" : "style",
        placeholder: $(this).data("placeholder"),
        closeOnSelect: false,
    });

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
            block.querySelectorAll('textarea').forEach(t => {
                try { $(t).summernote('destroy'); } catch (err) {}
            });

            block.remove();
            renumberTabs();
        }
    });

    $(document).on('change', '.custom-file-input', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.adminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Intelliworkz\mmp\resources\views/admin/products/editproduct.blade.php ENDPATH**/ ?>