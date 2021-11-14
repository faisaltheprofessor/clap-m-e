<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="/assets/js/plugins/select2/css/select2.css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb', Breadcrumbs::render('create-plan')); ?>
<?php $__env->startSection('page-title', 'Add Plan'); ?>
<?php $__env->startSection('content'); ?>
<div class="block">
    <div class="block-header block-header-default bg-primary-light">
        <h3 class="block-title">Plan Details</h3>
    </div>
    <div class="block-content">
        <form action="/plan" method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                
                <div class="col col-lg-6 col-md-12 col-sm-12 form-group" id="projects">
                    <?php echo e(Form::label('project_id', 'Project')); ?>

                     <?php echo e(Form::select('project_id', $projects, null, ['class' => 'form-control js-select2', 'placeholder' => 'Choose Project...'])); ?>

                    
            
                    
                </div>
    
    
                
                
                    
                    
                    
                    
                
    
    
                
                
    
                    
                    
                    
                    
                
    
    
                
                <div class="col col-lg-6 col-md-12 col-sm-12 form-group" id="activity">
                    <?php echo e(Form::label('activity_id', 'Activity')); ?>

                    <?php echo e(Form::select('activity_id', $activities, null, ['class' => 'form-control js-select2', 'placeholder' => 'Choose Activity...'])); ?>


                    
                    <i class="form-group__bar"></i>
                    <span class="small" style="float: right; margin-top:10px"><a href="/components/create" class="btn btn-sm btn-outline-info add-ajax-item" data-add="add-component" data-target="components" data-title="Add New Component"> New </a></span>
                </div>
    
    
    
    
    
    
                
                <div class="col col-lg-3 col-md-12 col-sm-12 form-group">
                    <?php echo e(Form::label('quantity', 'Quantity')); ?>

                    <?php echo e(Form::text('quantity', null, ['class' => 'form-control'])); ?>

                    <i class="form-group__bar"></i>
    
                    
                </div>
    
    
                <div class="col col-lg-3 col-md-12 col-sm-12 form-group">
                    <?php echo e(Form::label('unit_id', 'Unit')); ?>

                    <?php echo e(Form::select('unit_id', $units, null, ['class' => 'form-control select2'])); ?>

                    <i class="form-group__bar"></i>
    
                    
                </div>
    
                <div class="col col-lg-6 col-md-12 col-sm-12 form-group">
                    <?php echo e(Form::label('indicator_id', 'Indicator')); ?>

                    <?php echo e(Form::select('indicator_id', $indicators, null, ['class' => 'form-control select2', 'placeholder' => 'Please select and indicator'])); ?>

                    <i class="form-group__bar"></i>
    
                </div>
    
                
                <div class="col col-lg-6 col-md-12 col-sm-12 form-group">
                    <?php echo e(Form::label('cost', 'Cost')); ?>

                    <?php echo e(Form::number('cost', null, ['class' => 'form-control'])); ?>

                    <i class="form-group__bar"></i>
                </div>
    
    
    
    
                <div class="col col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <select id="year" name="year" class="form-control select2">
    
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020" selected>2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
    
                                    </select>
                                </div>
    
                            </div>
    
    
                    <div class="col col-md-6">
                        <label for="quarter">Planned Quarter</label>
                        <div class="form-group">
                            <select id="quarter" name="quarter" class="form-control select2">
                                <option value="0">Annual</option>
                                <option value="1">First Quarter</option>
                                <option value="2">Second Quarter</option>
                                <option value="3">Third Quarter</option>
                                <option value="4">Fourth Quarter</option>
                            </select>
                        </div>
                    </div>
                        </div>
                </div>
    
    
    
    
    
    
    
    
            
                
                <div class="col col-lg-6 col-md-12 col-sm-12 form-group" id="provinces">
                    <?php echo e(Form::label('province_id', 'Province')); ?>

                    <select id="province_id" name="province_id" class="select2-ajax form-control" placeholder="Select a Province...."></select>
                    <i class="form-group__bar"></i>
                    <span class="small" style="float: right; margin-top:10px"><a href="/components/create" class="btn btn-sm btn-outline-info add-ajax-item" data-add="add-component" data-target="components" data-title="Add New Component"> New </a></span>
                </div>
    
                
                <div class="col col-lg-6 col-md-12 col-sm-12 form-group" id="districts">
                    <?php echo e(Form::label('district_id', 'District')); ?>

                    <select id="district_id" name="district_id" class="select2-ajax form-control" placeholder="Select a District...."></select>
                    <i class="form-group__bar"></i>
                    <span class="small" style="float: right; margin-top:10px"><a href="/components/create" class="btn btn-sm btn-outline-info add-ajax-item" data-add="add-component" data-target="components" data-title="Add New Component"> New </a></span>
                </div>
    
                
                <div class="col col-lg-6 col-md-12 col-sm-12 form-group" id="villages">
    
                    <?php echo e(Form::label('village_id', 'Village')); ?>

                    <select id="village_id" name="village_id" class="select2-ajax form-control" placeholder="Select a Village...."></select>
                    <i class="form-group__bar"></i>
                    <span class="small" style="float: right; margin-top:10px"><a href="/components/create" class="btn btn-sm btn-outline-info add-ajax-item" data-add="add-component" data-target="components" data-title="Add New Component"> New </a></span>
    
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

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/plans/create.blade.php ENDPATH**/ ?>