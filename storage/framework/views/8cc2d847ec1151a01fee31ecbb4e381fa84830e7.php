
<?php $__env->startSection('content'); ?>
<section class="content">
<div class="container-fluid">
    
<div class="row">
<div class="col-lg-3 col-6">
    <div class="small-box bg-info">
    <div class="inner">
        <h3><?php echo e($productcount ?? ''); ?></h3>
        <p>Total Products</p>
    </div>
    <div class="icon">
        <i class="ion ion-bag"></i>
    </div>
        <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
    
</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('layouts.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.adminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Intelliworkz\mmp\resources\views/admin/admin.blade.php ENDPATH**/ ?>