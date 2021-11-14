<?php $__env->startSection('page-title', "Districts"); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.css">
    <link rel="stylesheet" href="/assets/js/plugins/datatables/dataTables.bootstrap4.css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger alert-dismissible">
        District already exists
    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <div class="row">
        <div class="col-md-6">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">Add District</h3>
                </div>
                <div class="block-content">
                    <form action="/district" method="post" enctype="multipart/form-data" class="js-validation-bootstrap">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label class="col-12" for="name">District Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                <!-- <div class="form-text text-muted">Project Name in English</div> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="name_dari">District Name - Dari</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name_dari" name="name_dari"
                                       placeholder="Dari Name">
                            </div>
                        </div>




                        <div class="form-group row">
                            <label class="col-12" for="province_id">Province</label>
                            <div class="col-md-12">
                                <?php echo Form::select('province_id', $provinces, '', ['class' => 'form-control js-select2', 'placeholder' => '----', 'required' => 'required']); ?>

                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-12" for="lat">Latitude</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="lat" name="lat"
                                       placeholder="Latitude">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="long">Longitude</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="long" name="long"
                                       placeholder="Longitude">
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
                    <h3 class="block-title">Districts List <small>Full</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table
                        class="table table-bordered table-striped table-vcenter"
                    id="componentsTable">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Province</th>
                            <th>Actions</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center">
                                    <a href="/district/<?php echo e($district->id); ?>">
                                        <?php echo e($district->id); ?>

                                    </a>
                                </td>
                                <td class="font-w600">
                                    <a href="/district/<?php echo e($district->id); ?>">
                                        <?php echo e($district->name); ?></td>
                                    </a>
                                <td class="font-w600"><?php echo e($district->province->name); ?></td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="/district/<?php echo e($district->id); ?>/edit"><i class="fa fa-pencil"></i></a> &nbsp; &nbsp;
                                    <a href="#"><i class="fa fa-trash" style="color:crimson"></i></a>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Province</th>

                            
                        </tr>
                        </tfoot>


                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


    <script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <!-- Page JS Helpers (Select2 plugin) -->
    <script>jQuery(function () {
            Codebase.helpers('select2');
        });</script>

    <!-- Page JS Code -->
    <script src="/assets/js/plugins/jquery-validation/additional-methods.js"></script>


    <!-- Page JS Code -->
    <script src="/assets/js/pages/be_forms_validation.min.js"></script>
    <?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Datatables -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>
    <script>
        $(".table").dataTable();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Sites/clap/resources/views/districts/index.blade.php ENDPATH**/ ?>