<?php $__env->startSection('page-title'); ?>
<div style="display: flex; justify-content:space-between">
    <span>Projects</span>
    <span>
        <a href="/component" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Component
        </a>
    </span>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
  <?php echo e(Breadcrumbs::render('project')); ?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">Add Project</h3>
                </div>
                <div class="block-content">
                    <form action="/project" method="post" enctype="multipart/form-data" class="js-validation-bootstrap">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label class="col-12" for="name">Project Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                <!-- <div class="form-text text-muted">Project Name in English</div> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="name_dari">Project Name - Dari</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name_dari" name="name_dari"
                                       placeholder="Dari Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="abbreviation">Project Abbreviation</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="abbreviation" name="abbreviation"
                                       placeholder="Abbreviation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="description">Project Description</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="description" name="description"
                                       placeholder="Project Description">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Save</button>
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
                    <h3 class="block-title">Projects List <small>Full</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table
                        class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Name</th>

                            <th class="d-none d-sm-table-cell" style="width: 15%;">Abbreviation</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><a href="/project/<?php echo e($project->id); ?>"><?php echo e($project->id); ?></a></td>
                                <td class="font-w600"><a href="/project/<?php echo e($project->id); ?>"><?php echo e($project->name); ?></a></td>
                                <td class="d-none d-sm-table-cell"><a href="/project/<?php echo e($project->id); ?>"><?php echo e($project->abbreviation); ?></a></td>
                                
                                
                                
                                

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

    <!-- Page JS Plugins -->
    <script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <!-- Page JS Helpers (Select2 plugin) -->
    <script>jQuery(function () {
            Codebase.helpers('select2');
        });</script>

    <!-- Page JS Code -->
    <script src="/assets/js/plugins/jquery-validation/additional-methods.js"></script>

    <!-- Page JS Helpers (Select2 plugin) -->
    <script>jQuery(function () {
            Codebase.helpers('select2');
        });</script>

    <!-- Page JS Code -->
    <script src="/assets/js/pages/be_forms_validation.min.js"></script>
    <?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/projects/index.blade.php ENDPATH**/ ?>