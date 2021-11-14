<?php $__env->startSection('page-title', $activity->name); ?>

<?php $__env->startSection('breadcrumb',  Breadcrumbs::render('activity.show',$activity->name, $activity->id)); ?>


<?php $__env->startSection('content'); ?>
    <div class="row" id="chart">
        <div class="col-md-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">Details</h3>
                </div>
               
                <div class="block-content">
                <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>
                   
                </div>
                </div>
            </div>
        </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script let activity_id=<?php echo e($activity->id); ?>></script>
    <script src="/js/activities.js"></script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Developer/Sites/laravel-sites/clap/resources/views/activities/show.blade.php ENDPATH**/ ?>