<?php $__env->startSection('breadcrumb'); ?>
   <?php echo e(Breadcrumbs::render('plan')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">

            <!-- Dynamic Table Full Pagination -->
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">All Plans</h3>



                    <a href="/plan/create" style="float: right; margin-right:10px; margin-bottom: 20px;"
                       class="btn btn-success">Create
                        Plan</a>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Activity</th>
                            <th>Project</th>
                            <th>Component</th>
                            <th>Subcomponent</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $x = 1 ?>
                        <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($x++); ?></td>
                                <td class="font-w600">
                                    <?php if($plan->activity): ?>
                                        <?php echo e($plan->activity->name); ?> - <small style="color: white;padding:5px;border-radius:5px; background:black"><?php echo e($plan->year); ?></small>
                                        -
                                        <a href="/plan/<?php echo e($plan->id); ?>">Progress</a>
                                        <a href="/plan/<?php echo e($plan->id); ?>/edit" style="float:right"><i class="fa fa-pencil"></i></a>
                                    <?php endif; ?>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <?php if($plan->project): ?>

                                        <?php echo e($plan->project->abbreviation); ?>

                                    <?php endif; ?>
                                </td>
                                <td class="d-none d-sm-table-cell">

                                          <?php if($plan->component): ?>

                                            <?php echo e($plan->component->name); ?>

                                        <?php endif; ?>

                                </td>
                                <td>
                                    <?php if($plan->subcomponent): ?>

                                        <?php echo e($plan->subcomponent->name); ?>

                                    <?php endif; ?>
                                </td>






                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full Pagination -->

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

    <style>
        tr:hover {
            cursor: pointer;
            color: #27ae60;
        }

    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- Datatables -->
    <script src="/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/pages/be_tables_datatables.min.js"></script>
    <script>
        // $(".table").dataTable();
    </script>

    <?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/plans/index.blade.php ENDPATH**/ ?>