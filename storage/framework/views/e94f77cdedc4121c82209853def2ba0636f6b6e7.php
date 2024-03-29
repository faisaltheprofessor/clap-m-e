<?php $__env->startSection('page-title'); ?>
<div style="display: flex; justify-content:space-between">
    <span>Schemes</span>
    <span>
        <a href="/component" class="btn btn-primary">
            <i class="fa fa-plus"></i> Add Scheme
        </a>
    </span>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
  <?php echo e(Breadcrumbs::render('irrigation')); ?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div id="root">
    <div class="row">
        <div class="col-md-6">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">Add Irrigation Scheme</h3>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>

                </div>
                <div class="block-content">
                    <form action="/irrigation_scheme" method="post" enctype="multipart/form-data" class="js-validation-bootstrap">
                        <?php echo csrf_field(); ?>


                        
                        <div class="form-group row">
                            <label class="col-2" for="project_id">Project</label>
                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                <input class="custom-control-input" type="radio" name="project_id" id="project_id_1" value="1" >
                                <label class="custom-control-label" for="project_id_1">CLAP</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                <input class="custom-control-input" type="radio" name="project_id" id="project_id_2" value="2" >
                                <label class="custom-control-label" for="project_id_2">SNaPP2</label>
                            </div>
                        </div>
                            
                        
                        <div class="form-group row">
                            <label class="col-9" for="scheme_id">Scheme</label>
                            <div class="col-md-9" v-if="scheme">
                               <?php echo Form::select('scheme_id', $schemes, null, ['class' => 'form-control select2', 'placeholder' => 'Select Scheme...', 'required' => 'required']); ?>


                            </div>
                            
              
                            <div class="col-md-5" v-if="manualScheme">
                               <?php echo Form::text('scheme_name', null, ['class' => 'form-control', 'placeholder' => 'Scheme Name', 'required' => 'required']); ?>

                              
                            </div>
                            <div class="col-md-4" v-if="manualScheme">
                                <?php echo Form::text('scheme_code', null, ['class' => 'form-control', 'placeholder' => 'Scheme Code', 'required' => 'required']); ?>

                               
                             </div>

                        
                        
                            <div class="col-3">
                                <label class="css-control css-control-primary css-checkbox">
                                    <input type="checkbox" class="css-control-input" v-model="manualScheme">
                                    <span class="css-control-indicator"></span>Not listed
                                </label>
                            </div>
                        </div>   

                        

                        

                        
                        <div class="form-group row">
                            <label class="col-9" for="village_id">Village</label>
                            <div class="col-md-9" v-if="village">
                               <?php echo Form::select('village_id', $villages, null, ['class' => 'form-control select2', 'placeholder' => 'Select Village...', 'required' => 'required']); ?>

                              
                            </div>
                              
                            <div class="col-md-5" v-if="manualVillage">
                                <?php echo Form::text('village_name', null, ['class' => 'form-control', 'placeholder' => 'Village Name', 'required' => 'required']); ?>

                               
                             </div>
                             <div class="col-md-4" v-if="manualVillage">
                                 <?php echo Form::select('district_id', $districts, null, ['class' => 'form-control select2', 'placeholder' => 'Select District...', 'required' => 'required']); ?>

                                
                              </div>
                            <div class="col-3">
                                <label class="css-control css-control-primary css-checkbox">
                                    <input type="checkbox" class="css-control-input" v-model="manualVillage">
                                    <span class="css-control-indicator"></span>Not listed
                                </label>
                            </div>
                        </div>   
                        

                      
                       
                         
                            
            
                        

                         
                         <div class="form-group row">
                            <label class="col-9" for="ia_id">IA</label>
                            <div class="col-md-9" v-if="IA">
                               <?php echo Form::select('ia_id', $IAs, null, ['class' => 'form-control select2', 'placeholder' => 'Select IA...', 'required' => 'required']); ?>

                              
                            </div>
                            <div class="col-md-9" v-if="manualIA">
                                <?php echo Form::text('ia_name', null, ['class' => 'form-control', 'placeholder' => 'IA Name', 'required' => 'required']); ?>

                             </div>
                            <div class="col-3">
                                <label class="css-control css-control-primary css-checkbox">
                                    <input type="checkbox" class="css-control-input" v-model="manualIA">
                                    <span class="css-control-indicator"></span>Not listed
                                </label>
                            </div>
                        </div>   
                        
                      
                     

                        
                        <div class="form-group row manual">
                            <label class="col-9" for="start_point_long">Start Point</label>
                            <div class="col-md-6">
                               <?php echo Form::text('start_point_long', null, ['class' => 'form-control', 'placeholder' => 'Longitude', 'required' => 'required']); ?>  
                            </div>

                            <div class="col-md-6">
                                <?php echo Form::text('start_point_lat', null, ['class' => 'form-control', 'placeholder' => 'Latitude', 'required' => 'required']); ?>  
                             </div>
                        </div>
                        


                         
                         <div class="form-group row manual">
                            <label class="col-9" for="end_point_long">End Point</label>
                            <div class="col-md-6">
                               <?php echo Form::text('end_point_long', null, ['class' => 'form-control', 'placeholder' => 'Longitude', 'required' => 'required']); ?>  
                            </div>

                            <div class="col-md-6">
                                <?php echo Form::text('end_point_lat', null, ['class' => 'form-control', 'placeholder' => 'Latitude', 'required' => 'required']); ?>  
                             </div>
                        </div>
                        

                        
                       <div class="form-group row">
                        <div class="col-md-6">
                            <label for="start_date">Start Date</label>
                            <input type="text" class="js-flatpickr form-control bg-white" id="start_date" name="start_date" placeholder="Y-m-d">
                            </div>
                   



                     
                        <div class="col-md-6">
                            <label for="end_date">End Date</label>
                            <input type="text" class="js-flatpickr form-control bg-white" id="end_date" name="end_date" placeholder="Y-m-d">
                            </div>
                       </div>


                        

                          
                          <div class="form-group row manual">
                            <label class="col-4" for="total_command_area">Total Command Area (ha)</label>
                            <label class="col-4" for="irrigated_area">Irrigated Area (ha)</label>
                            <label class="col-4" for="nonirrigated_area">Nonrrigated Area (ha)</label>

                            <div class="col-md-4">
                               <?php echo Form::text('total_command_area', null, ['class' => 'form-control', 'placeholder' => 'Total Command Area', 'required' => 'required']); ?>  
                            </div>

                            <div class="col-md-4">
                                <?php echo Form::text('irrigated_area', null, ['class' => 'form-control', 'placeholder' => 'Irrigated Area', 'required' => 'required']); ?>  
                             </div>

                             <div class="col-md-4">
                                <?php echo Form::text('nonirrigated_area', null, ['class' => 'form-control', 'placeholder' => 'Nonirrigated Area']); ?>  
                             </div>
                        </div>
                        
                        

                         
                         <div class="form-group row manual">
                            <label class="col-6" for="direct_beneficiaries">Direct Beneficiaries</label>
                            <label class="col-6" for="indirect_beneficiaries">Indirect Beneficiaries</label>

                            <div class="col-md-6">
                               <?php echo Form::text('direct_beneficiaries', null, ['class' => 'form-control', 'placeholder' => 'Direct Beneficiaries', 'required' => 'required']); ?>  
                            </div>

                            <div class="col-md-6">
                                <?php echo Form::text('indirect_beneficiaries', null, ['class' => 'form-control', 'placeholder' => 'Indirect Beneficiaries', 'required' => 'required']); ?>  
                             </div>
                        </div>
                        


                          
                          <div class="form-group row manual">
                            <label class="col-12" for="engineering_estimated_cost">Engineering Estimated Cost</label>

                            <div class="col-md-6">
                               <?php echo Form::text('engineering_estimated_cost', null, ['class' => 'form-control', 'placeholder' => 'Afs', 'required' => 'required']); ?>  
                            </div>

                            <div class="col-md-6">
                                <?php echo Form::text('engineering_estimated_cost_usd', null, ['class' => 'form-control', 'placeholder' => 'USD', 'required' => 'required']); ?>  
                             </div>
                        </div>
                        

                         
                          <div class="form-group row manual">
                            <label class="col-12" for="contract_cost">Contract Cost</label>

                            <div class="col-md-6">
                               <?php echo Form::text('contract_cost', null, ['class' => 'form-control', 'placeholder' => 'Afs', 'required' => 'required']); ?>  
                            </div>

                            <div class="col-md-6">
                                <?php echo Form::text('contract_cost_usd', null, ['class' => 'form-control', 'placeholder' => 'USD', 'required' => 'required']); ?>  
                             </div>
                        </div>
                        

                          
                          <div class="form-group row manual">
                            <label class="col-6" for="project_status">Project Status</label>
                            <label class="col-6" for="remarks">Remarks</label>

                            <div class="col-md-6">
                               <?php echo Form::text('project_status', null, ['class' => 'form-control', 'placeholder' => 'Project Status', 'required' => 'required']); ?>  
                            </div>

                            <div class="col-md-6">
                                <?php echo Form::text('remarks', null, ['class' => 'form-control', 'placeholder' => 'Remarks']); ?>  
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
                    <h3 class="block-title">Irrigation Schemes</h3> <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table
                        class="table table-bordered table-responsive table-striped table-vcenter custom-datatable" style="width:100%">
                        <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Scheme</th>
                            <th>Code</th>
                            <th>Project</th>
                            <th>Village</th>
                            <th>District</th>
                            <th>Province</th>
                            <th>IA</th>
                            <th>Start Coordinates</th>
                            <th>End Coordinates</th>
                            <th>Total Command Area (ha)</th>
                            <th>Irrigated Area (ha)</th>
                            <th>Nonirrigated Area (ha)</th>
                            <th>Direct Beneficiaries</th>
                            <th>Indirect Beneficiaries</th>
                            <th>Engineering Estimated Cost (Afn)</th>
                            <th>Engineering Estimated Cost (USD)</th>
                            <th>Project Status</th>
                            <th>Contract Cost (Afn)</th>
                            <th>Contract Cost (USD)</th>
                            <th>Remarks</th>
                            

                           
                        </tr>
                        </thead>
                        <tbody>
                                <?php $x = 1 ?>
                                <?php $__currentLoopData = $irrigationSchemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $is): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr data-scheme="<?php echo e($is->id); ?>" class="scheme">
                                        <td><?php echo e($x++); ?></td>
                                        <td><?php echo e($is->scheme->name); ?> <a href="/scheme/<?php echo e($is->id); ?>/edit"><i class="fa fa-pencil"></i></a></td>
                                        <td><?php echo e($is->scheme->code); ?></td>
                                        <td><?php echo e($is->project->abbreviation); ?></td>
                                        <td><?php echo e($is->village->name); ?></td>
                                        <td><?php echo e($is->district->name); ?></td>
                                        <td><?php echo e($is->province->name); ?></td>
                                        <td><?php echo e($is->ia->name); ?></td>
                                        <td><?php echo e($is->start_point_lat); ?>, <?php echo e($is->start_point_long); ?></td>
                                        <td><?php echo e($is->end_point_lat); ?>, <?php echo e($is->end_point_long); ?></td>
                                        <td><?php echo e($is->total_command_area); ?></td>
                                        <td><?php echo e($is->irrigated_area); ?></td>
                                        <td><?php echo e($is->nonirrigated_area); ?></td>
                                        <td><?php echo e($is->direct_beneficiaries); ?></td>
                                        <td><?php echo e($is->indirect_beneficiaries); ?></td>
                                        <td><?php echo e($is->engineering_estimated_cost); ?></td>
                                        <td><?php echo e($is->engineering_estimated_cost_usd); ?></td>
                                        <td><?php echo e($is->project_status); ?></td>
                                        <td><?php echo e($is->contract_cost); ?></td>
                                        <td><?php echo e($is->contract_cost_usd); ?></td>
                                        <td><?php echo e($is->remarks); ?></td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="/assets/js/plugins/select2/css/select2.css">
<link rel="stylesheet" href="/assets/js/plugins/flatpickr/flatpickr.min.css">


<?php echo $__env->make('partials.datatables-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('partials.datatables-only', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/js/irrigation.js"></script>
    <!-- Page JS Plugins -->
    <script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/assets/js/plugins/flatpickr/flatpickr.min.js"></script>

    <!-- Page JS Code -->
    <script src="/assets/js/plugins/jquery-validation/additional-methods.js"></script>

  
    <!-- Page JS Code -->
    <script src="/assets/js/pages/be_forms_validation.min.js"></script>
    <script>jQuery(function(){ Codebase.helpers(['flatpickr']); });</script>
    <script>
        // $('body').on('DOMNodeInserted', 'select', function () {
        // $("select").select2(); 
        // });

        $(document).ready(function () {
      
            // $('select').select2()
            var groupColumn = 5;
            var table = $('.custom-datatable').DataTable({
                dom: 'Bftrip',
                buttons: [
                    {
                        extend: 'print',
                        className: 'btn-success',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
            extend: 'colvis',
            text: "Columns",
            postfixButtons: [ 'colvisRestore' ]
        }
             
                ],
        
                "columnDefs": [
                    { "visible": false, "targets": groupColumn }
                ],
                "order": [[ groupColumn, 'asc' ]],
                "displayLength": 25,
                keys:true,
                    searchPane: {
                        columns:[5,4,3,2,1,6],
                        threshold: 0
                    },
                    exportOptions: {
                        columns: ':visible'
                    },
                    // bFilter: false,
                  
                    "responsive": true,
        
                "drawCallback": function ( settings ) {
                    var api = this.api();
                    var rows = api.rows( {page:'current'} ).nodes();
                    var last=null;
         
                    api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                        if ( last !== group ) {
                            $(rows).eq( i ).before(
                                '<tr class="group"><td colspan="15">'+group+'</td></tr>'
                            );
         
                            last = group;
                        }
                    } );
                }
            } );
         
            // Order by the grouping
            $('.custom-datatable tbody').on( 'click', 'tr.group', function () {
                var currentOrder = table.order()[1];
                if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
                    table.order( [ groupColumn, 'desc' ] ).draw();
                }
                else {
                    table.order( [ groupColumn, 'asc' ] ).draw();
                }
            } );
        } );
 
          </script>

    <?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Sites/clap/resources/views/irrigation_schemes/index.blade.php ENDPATH**/ ?>