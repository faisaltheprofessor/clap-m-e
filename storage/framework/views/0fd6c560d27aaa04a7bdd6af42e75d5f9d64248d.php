<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="/assets/js/plugins/select2/css/select2.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <!-- Default Elements -->
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Update Province</h3>
            </div>
            <div class="block-content">
    <form class="row" action="/province/<?php echo e($province->id); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <?php echo method_field('put'); ?>

        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Province Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo e($province->name); ?>">
            </div>

            <div class="form-group">
                <label for="name_dari">اسم ولایت</label>
                <input type="text" class="form-control" dir="rtl" id="name_dari" name="name_dari" value="<?php echo e($province->name_dari); ?>">
            </div>
            <div class="form-group row">
                <label class="col-12" for="region_id">Region</label>
                <div class="col-md-12">
                    <?php echo Form::select('region_id', $regions, $province->region_id, ['class' => 'form-control js-select2', 'placeholder' => '----', 'required' => 'required']); ?>

                </div>
            </div>

            <div class="form-group row">
                <label class="col-12" for="lat">Latitude</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="lat" name="lat"
                           placeholder="Latitude" value="<?php echo e($province->lat); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12" for="long">Longitude</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="long" name="long"
                           placeholder="Longitude" value="<?php echo e($province->long); ?>">
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update Province">
                <a href="/province" class="btn btn-secondary">Cancel</a>
            </div>

        </div>
    </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script>
    
        jQuery(function () {
                Codebase.helpers('select2');
            });
            </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/provinces/edit.blade.php ENDPATH**/ ?>