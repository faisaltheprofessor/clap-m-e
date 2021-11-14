<?php $__env->startSection('page-title'); ?>
<div style="display: flex; justify-content:space-between">
    <span>Activities</span>
    <span>
        <a href="/plan" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Plan
        </a>
    </span>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb', Breadcrumbs::render('activity')); ?>
<?php $__env->startSection('styles'); ?>
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/assets/js/plugins/select2/css/select2.css">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/assets/js/plugins/datatables/dataTables.bootstrap4.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-md-6">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">Add Activity</h3>
                </div>
                <div class="block-content">
                    <form class="row js-validation-bootstrap" action="<?php echo e(url('activity')); ?>" method="post" >
                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Activity Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <label for="name_dari">اسم فعالیت</label>
                                <input type="text" class="form-control" dir="rtl" id="name_dari" name="name_dari">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <?php echo e(Form::label('subcomponent_id', 'Subcomponent')); ?>

                                <?php echo e(Form::select('subcomponent_id', $subComponents, null, ['class' => 'form-control js-select2', 'required' => 'required', 'placeholder' => '----' ])); ?>

                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <?php echo e(Form::label('unit_id', 'Unit')); ?>

                                <?php echo e(Form::select('unit_id', $units, null, ['class' => 'form-control js-select2', 'required' => 'required', 'placeholder' => '----' ])); ?>

                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <?php echo e(Form::label('appraisal', 'Appraisal')); ?>

                                <input type="number" class="form-control" name="appraisal" id="appraisal">

                                <i class="form-group__bar"></i>
                            </div>

                            <div class="clearfix"></div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-alt-primary">Save</button>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
        <div class="col-md-6">
            <!-- Dynamic Table Full -->
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">Activity List <small>Full</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-striped mb-0 table-responsive data-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Activity</th>

                            <th style="width: 50%;">Project</th>
                            <th>Component</th>
                            <th>Subcomponent</th>
                            <th>Unit</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php ($x = 1); ?>
                        <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($x++); ?></th>
                                <td><a href="/activity/<?php echo e($activity->id); ?>"><?php echo e($activity->name); ?></a></td>

                                <td><?php echo e($activity->project->name); ?></td>
                                <td><?php echo e($activity->component->name); ?></td>
                                <td><?php echo e($activity->subcomponent->name); ?></td>
                                <td><?php echo e($activity->unit->name); ?></td>




                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page JS Plugins -->
    <script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <!-- Page JS Helpers (Select2 plugin) -->
    <script>jQuery(function () {
            Codebase.helpers('select2');
        });</script>


    <script src="/assets/js/plugins/jquery-validation/additional-methods.js"></script>


    <script>jQuery(function () {
            Codebase.helpers('select2');
        });</script>


    <script src="/assets/js/pages/be_forms_validation.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>
    <script>
        $(".table").dataTable();
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/activities/index.blade.php ENDPATH**/ ?>