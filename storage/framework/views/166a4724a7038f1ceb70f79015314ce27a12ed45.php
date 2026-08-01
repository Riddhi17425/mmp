 <?php $__env->startSection('sidebar'); ?>
 <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Edit Product</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo e(route('admin/updateproduct',$data->id)); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($data->id); ?>" />
            <div class="row">
                <div class="col-sm-6">
                    <label>Category Name</label>
                    <select class="form-select" id="multiple-select-field" data-placeholder="Choose Category Name" name="category_id">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categories->id); ?>" <?php echo e(($categories->
                          id == $data->category_id) ? 'selected':''); ?>><?php echo e($categories->category_name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" require placeholder="Enter Product Name" value="<?php echo e($data->product_name); ?>" />
                    <?php if($errors->has('product_name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('product_name')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Product Alt</label>
                    <input type="text" class="form-control" name="alt" require placeholder="Enter Product alt" value="<?php echo e($data->alt); ?>" />
                    <?php if($errors->has('alt')): ?>
                    <span class="text-danger"><?php echo e($errors->first('alt')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 form-group">
                    <label>Product Description(Banner)</label>
                    <textarea id="summernote" name="product_description" class="textarea">
                    <?php echo e($data->product_description); ?></textarea>
                    <?php if($errors->has('product_description')): ?>
                    <span class="text-danger"><?php echo e($errors->first('product_description')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 form-group">
                    <label>Description</label>
                    <textarea id="summernote" name="description" class="textarea">
                    <?php echo e($data->description); ?></textarea>
                    <?php if($errors->has('description')): ?>
                    <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="col-sm-12 form-group">
                    <label>Tab Details</label>
                    <textarea id="summernote" name="tab_details" class="textarea">
                    <?php echo e($data->tab_details); ?></textarea>
                    <?php if($errors->has('tab_details')): ?>
                    <span class="text-danger"><?php echo e($errors->first('tab_details')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 form-group">
                    <label>Tab Features</label>
                    <textarea id="summernote" name="tab_features" class="textarea">
                    <?php echo e($data->tab_features); ?></textarea>
                    <?php if($errors->has('tab_features')): ?>
                    <span class="text-danger"><?php echo e($errors->first('tab_features')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 form-group">
                    <label>Tab Application</label>
                    <textarea id="summernote" name="tab_app" class="textarea">
                    <?php echo e($data->tab_app); ?></textarea>
                    <?php if($errors->has('tab_app')): ?>
                    <span class="text-danger"><?php echo e($errors->first('tab_app')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 form-group">
                    <label>Technical Specification</label>
                    <textarea id="summernote" name="technical_details" class="textarea">
                    <?php echo e($data->technical_details); ?></textarea>
                    <?php if($errors->has('technical_details')): ?>
                    <span class="text-danger"><?php echo e($errors->first('technical_details')); ?></span>
                    <?php endif; ?>
                </div>
            </div>
            
                <div class="faq-section">
                <h4>Product FAQs</h4>
                <!-- Check if $data->faq is not empty and is a string -->
                <?php if(!empty($data->faq) && is_string($data->faq)): ?>
                    <!-- Decode the JSON string into an array -->
                    <?php $faqArray = json_decode($data->faq); ?>
                    <!-- Loop through the decoded array -->
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
                <?php endif; ?>
                <button type="button" class="btn btn-secondary add-faq">Add Another FAQ</button>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="product_banner_image">Image</label>
                        <input type="file" name="product_banner_image" class="form-control image">
                        <?php if($errors->has('product_banner_image')): ?>
                            <span class="text-danger"><?php echo e($errors->first('product_banner_image')); ?></span>
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo e(asset('public/Product_Banner_Images/' . $data->product_banner_image)); ?>" alt="<?php echo e($data->name); ?>" width="50px" height="50px">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="mobile_image">Mobile Image</label>
                        <input type="file" name="mobile_image" class="form-control image">
                        <?php if($errors->has('mobile_image')): ?>
                            <span class="text-danger"><?php echo e($errors->first('mobile_image')); ?></span>
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo e(asset('public/Product_Mobile_Images/' . $data->mobile_image)); ?>" alt="<?php echo e($data->name); ?>" width="50px" height="50px">
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
                        <?php if($errors->has('product_image')): ?>
                        <span class="text-danger"><?php echo e($errors->first('product_image')); ?></span>
                        <?php endif; ?> <?php $images = explode(',', $data->product_image); ?>
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label for="current_image">Current Image:</label>
                        <img src="<?php echo e(asset('public/Product_Images/' . $image)); ?>" alt="Current Image" style="height: 150px; margin-top: 10px" />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php if($errors->has('product_image')): ?>
                        <span class="text-danger"><?php echo e($errors->first('product_image')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Product Short Description</label>
                    <input type="text" id="product_shortdescription" name="product_shortdescription" class="form-control" placeholder="Enter Product Short Description" value="<?php echo e($data->product_shortdescription); ?>" />
                    <?php if($errors->has('product_shortdescription')): ?>
                    <span class="text-danger"><?php echo e($errors->first('product_shortdescription')); ?></span>
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
                <div class="col-sm-6 form-group">
                    <label>Product Url</label>
                    <input type="text" class="form-control" name="producturl" require value="<?php echo e($data->producturl); ?>" placeholder="Enter Product Url" />
                    <?php if($errors->has('producturl')): ?>
                    <span class="text-danger"><?php echo e($errors->first('producturl')); ?></span>
                    <?php endif; ?>
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
<?php $__env->stopSection(); ?> <?php $__env->startSection('footer'); ?> <?php echo $__env->make('layouts.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.adminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Intelliworkz\mmp\resources\views/admin/products/editproduct.blade.php ENDPATH**/ ?>