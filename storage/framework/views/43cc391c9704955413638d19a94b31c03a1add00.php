<?php $__env->startSection('styles-after'); ?>

<link rel="stylesheet" href="/assets/js/plugins/select2/css/select2.css">
<style>
    /* #data-table_filter
    {
        display: none;
    } */
    /* .green {
        color: forestgreen;
        font-weight: bold;
        background: #e3e3e3;
        padding: 5px;

    } */
</style>


<?php echo $__env->make('partials.datatables-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php if(isset($_GET['plan_id'])): ?>



<?php
    
    $plan = App\MonthlyProgress::find($_GET['plan_id']);
    $planDetails = App\Plan::find($_GET['plan_id']);
    $plan_name = $planDetails->activity->name . ' - ' . $planDetails->year;
    
    ?>


<?php $__env->startSection('breadcrumb',  Breadcrumbs::render('planProgress',$plan_name, $plan->id)); ?>





<?php endif; ?>
<?php $__env->startSection('page-title'); ?>

<!-- END Inline Form -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
    
</div>
<div class="row">
    <div class="col-md-9">
        <div class="block" style="min-height:140px">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Select Plan</h3>
            </div>
            <div class="block-content block-content-full">
                <form class="form-inline" action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                    <label class="sr-only" for="plan_id">Plan</label>
                    <?php if(isset($_GET['plan_id'])): ?>
                    <?php echo e(Form::select('plan_id',$plans,$_GET['plan_id'], ['class' => 'form-control mb-2 mr-sm-2 mb-sm-0 select2 plan-select', 'placeholder' => 'Select a plan'])); ?>

                    <?php else: ?>
                    <?php echo e(Form::select('plan_id',$plans,null, ['class' => 'form-control mb-2 mr-sm-2 mb-sm-0 select2 plan-select', 'placeholder' => 'Select a plan'])); ?>

                    <?php endif; ?>
                    
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                        <h3 class="block-title">Status: <span id="planPercentage">0</span>%  </h3>
                        

            </div>
            <div class="block-content">
                <ul>
                    <li>Planned:  <span id="plannedQuantity">0</span></li>
                    <li>Acheived: <span id="acheivedQuantity">0</span></li>
                </ul>
            </div>
        </div>

       
</div>
</div>
<?php if(isset($_GET['plan_id'])): ?>
<div class="row">
    <div class="col-md-12">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Plan Progress Details</h3>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>

            </div>
            <div class="block-content block-content-full">
            <table class="table table-striped table-bordered datatable" style="width:100%">
                <thead style="background:grey; color:white;">
                    <tr>
                   
                        <td>Province</td>
                        <td>District</td>
                        <td>Jan</td>
                        <td>Feb</td>
                        <td>Mar</td>
                        <td>Apr</td>
                        <td>May</td>
                        <td>Jun</td>
                        <td>Jul</td>
                        <td>Aug</td>
                        <td>Sep</td>
                        <td>Oct</td>
                        <td>Nov</td>
                        <td>Dec</td>
                        <td>Total</td>
                        <td>Remarks</td>
                        
                    </tr>
                </thead>
        
                <tbody>
                    <?php
                       
                            // $provinces = MonthlyProgress::where('plan_id', 124)->groupBy('province_id');
                            $districts = App\MonthlyProgress::with('district')->where('plan_id', $_GET['plan_id'])->groupBy('district_id')->get();
                          
                        ?>
                    <?php $quantity = 0; ?>
                    <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php   $total = 0; ?>
                        <tr>
                        
                            <td><?php if($district->province): ?><?php echo e($district->province->name); ?><?php endif; ?> </td>
                            <td><?php if($district->district): ?><?php echo e($district->district->name); ?><?php endif; ?></td>
        <?php $zeros = 0;?>
                            <?php for($x=1; $x<=12; $x++): ?>
                            <?php
                            $progress = App\MonthlyProgress::with('plan')->where('plan_id', $_GET['plan_id'])->where('district_id', $district->district_id)->whereMonth('start_date',$x)->first();
                            $progressCount = App\MonthlyProgress::where('plan_id', $_GET['plan_id'])->where('district_id', $district->district_id)->count('id');?>
                            <td>
     <?php if($progress): ?><?php echo e($progress->quantity); ?><?php $total += $progress->quantity;?><?php $quantity += $progress->quantity; ?><?php else: ?> 0
                                 <?php
                                     $zeros++;
                                 ?>
                                 <?php endif; ?>
                                    
                            </td>
                            <?php endfor; ?>
                            <td style="color: #28de81; font-weight:bold">
                                <?php echo e($total); ?>

                            </td>
                            
                        
                            
                           <td> <?php if($progressCount>12 || $progressCount > 12-$zeros ): ?>
                                
                                <span class="text-danger small">Chances of duplication
                            </span>
                           
           
                          <?php endif; ?>
                          
                                
        
                               
                           </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
            
                </tbody>


              
            </table>
            </div>
        </div>

        </div>

        <?php $plan = App\Plan::find($_GET['plan_id']) ?>
        <?php if($plan->quantity !=0 ): ?>
        <?php 
        $percentage = ($quantity / $plan->quantity) * 100;
        if($percentage>100) $percentage = 100;
        ?>
        <span id="hiddenPlanPercentage" style="display:none"><?php echo e(round($percentage)); ?></span>
        <?php else: ?> 
        <?php $percentage = 100 ?>
        <?php endif; ?>
</div>




<div  style="display:none">
    <span id="hiddenPlannedQuantity"><?php echo e($plan->quantity); ?></span>
    <span id="hiddenAcheivedQuantity"><?php echo e($quantity); ?></span>
</div>
    
<div class="row">
  <div class="col-lg-4 col-md-12">
    <div id="chart">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Province</h3>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>

            </div>
            <div class="block-content">
                
                <apexchart type="bar" height="350" :options="chartOptions" :series="series"></apexchart>
            </div>
        </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-12">
    <div id="districtChart">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">District</h3>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>

            </div>
            <div class="block-content">
                
                <apexchart type="bar" height="350" :options="chartOptions" :series="series"></apexchart>
            </div>
        </div>
    </div>
  </div>


  <div class="col-lg-4 col-md-12">
    <div id="monthChart">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Month</h3>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>

            </div>
            <div class="block-content">
                
                <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>
            </div>
        </div>
    </div>
  </div>

  
</div>
</div>

<?php else: ?> 

<?php $__env->startSection('breadcrumb', Breadcrumbs::render('progress_details_select_plan')); ?>

    <div class="alert alert-info">
        Please select a plan to see details
    </div>
<?php endif; ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>
<script>

$('.plan-select').on('select2:select', function (e) {
    let id = e.params.data.id;
    if(id!=='') {
        window.location.href = window.location.pathname + '?plan_id=' + id
  
    }
});


    $('.select2').select2({
    //   width: 'resolve',
    //   theme: 'classic',
    width: '100%'
    })

    $(document).ready(function(){
        let hiddenPlannedQuantity = $('#hiddenPlannedQuantity').html(),
            hiddenAcheivedQuantity = $('#hiddenAcheivedQuantity').html(),
            hiddenPlanPercentage = $('#hiddenPlanPercentage').html();
    
            $('#plannedQuantity').html(hiddenPlannedQuantity)
            $('#acheivedQuantity').html(hiddenAcheivedQuantity)
            $('#planPercentage').html(hiddenPlanPercentage)
            


    })
    
  

    
</script>


<script src="/js/charts.js"></script>







<?php echo $__env->make('partials.datatables-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Sites/clap/resources/views/rechecking/index.blade.php ENDPATH**/ ?>