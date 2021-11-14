<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="/assets/js/plugins/select2/css/select2.css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb', Breadcrumbs::render('create-plan')); ?>
<?php $__env->startSection('page-title', 'Add Plan'); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $years = [
                '2014' => '2014',
                '2015' => '2015',
                '2016' => '2016',
                '2017' => '2017',
                '2018' => '2018',
                '2019' => '2019',
                '2020' => '2020',
                '2021' => '2021',
                '2022' => '2022',
                '2023' => '2023',
                '2024' => '2024',
                '2025' => '2025',
             ];
    ?>
    <div class="block">
        <div class="block-header block-header-default bg-primary-light">
            <h3 class="block-title">Update Plan</h3>
        </div>
        <div class="block-content">
            <form action="/plan/<?php echo e($plan->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    
                    <div class="col col-lg-6 col-md-12 col-sm-12 form-group" id="projects">
                        <?php echo e(Form::label('project_id', 'Project')); ?>

                        <?php echo e(Form::select('project_id', $projects, $plan->project_id, ['class' => 'form-control js-select2', 'placeholder' => 'Choose Project...'])); ?>

                        

                        
                    </div>


                    
                    
                    
                    
                    
                    
                    


                    
                    

                    
                    
                    
                    
                    


                    
                    <div class="col col-lg-6 col-md-12 col-sm-12 form-group" id="activity">
                        <?php echo e(Form::label('activity_id', 'Activity')); ?>

                        <?php echo e(Form::select('activity_id', $activities, $plan->activity_id, ['class' => 'form-control js-select2', 'placeholder' => 'Choose Activity...'])); ?>


                        
                        <i class="form-group__bar"></i>
                        <span class="small" style="float: right; margin-top:10px"><a href="/components/create" class="btn btn-sm btn-outline-info add-ajax-item" data-add="add-component" data-target="components" data-title="Add New Component"> New </a></span>
                    </div>






                    
                    <div class="col col-lg-3 col-md-12 col-sm-12 form-group">
                        <?php echo e(Form::label('quantity', 'Quantity')); ?>

                        <?php echo e(Form::text('quantity', $plan->quantity, ['class' => 'form-control'])); ?>

                        <i class="form-group__bar"></i>

                        
                    </div>


                    <div class="col col-lg-3 col-md-12 col-sm-12 form-group">
                        <?php echo e(Form::label('unit_id', 'Unit')); ?>

                        <?php echo e(Form::select('unit_id', $units, $plan->unit_id, ['class' => 'form-control js-select2'])); ?>

                        <i class="form-group__bar"></i>

                        
                    </div>

                    <div class="col col-lg-6 col-md-12 col-sm-12 form-group">
                        <?php echo e(Form::label('indicator_id', 'Indicator')); ?>

                        <?php echo e(Form::select('indicator_id', $indicators, $plan->indicator_id, ['class' => 'form-control js-select2', 'placeholder' => 'Please select and indicator'])); ?>

                        <i class="form-group__bar"></i>

                    </div>

                    
                    <div class="col col-lg-6 col-md-12 col-sm-12 form-group">
                        <?php echo e(Form::label('cost', 'Cost')); ?>

                        <?php echo e(Form::number('cost', $plan->cost, ['class' => 'form-control'])); ?>

                        <i class="form-group__bar"></i>
                    </div>




                    <div class="col col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <?php echo e(Form::select('year', $years, $plan->year, ['class' => 'form-control js-select2', 'placeholder' => 'Please select year'])); ?>


                                </div>

                            </div>



                        </div>
                    </div>

















                </div>
                <div class="row">
                    <div class="form-group col">
                        <input type="reset" value="Cancel" class="btn-danger form-control">
                        
                    </div>
                    <div class="form-group col">
                        <input type="submit" class="btn btn-primary form-control" value="Save">

                    </div>
                </div>






            </form>
        </div>
    </div>


    
    <div class="modal fade" id="add-new" style="overflow:hidden;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title pull-left">Default modal</h5>
                </div>
                <hr>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link ajax-item-save" >Save changes</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page JS Plugins -->
    <script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>

    

    <script>jQuery(function () {
            Codebase.helpers('select2');
        });</script>

    
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/plans/edit.blade.php ENDPATH**/ ?>