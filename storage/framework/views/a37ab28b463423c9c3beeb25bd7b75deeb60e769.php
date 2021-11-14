<?php $__env->startSection('head'); ?>
    <!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

<link rel="stylesheet" href="<?php echo e(asset('vendor/file-manager/css/file-manager.css')); ?>">
<style>
    .btn-group:last-child {
        display: none;
    }
</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div style="height: 600px;">
    <div id="fm"></div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('vendor/file-manager/js/file-manager.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/filemanager/index.blade.php ENDPATH**/ ?>