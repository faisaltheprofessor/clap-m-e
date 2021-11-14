<?php $__env->startSection('content'); ?>

<div class="block">
    <div class="block-header block-header-default bg-primary-light">
        <h3 class="block-title">Overall</h3>
    </div>
    <div class="block-content">
        <div class="row">

            <div class="col-md-4">
                <ul class="list-group push">
                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Projects
                        <span class="badge badge-pill badge-success"><?php echo e(App\Project::count()); ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Components
                        <span class="badge badge-pill badge-success"><?php echo e(App\Component::count()); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Subcomponents
                        <span class="badge badge-pill badge-success"><?php echo e(App\Subcomponent::count()); ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Activities
                        <span class="badge badge-pill badge-success"><?php echo e(App\Activity::count()); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Plans
                        <span class="badge badge-pill badge-success"><?php echo e(App\Plan::count()); ?></span>
                    </li>


                </ul>
            </div>


            <div class="col-md-4">
                <ul class="list-group push">
                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Provinces
                        <span
                            class="badge badge-pill badge-success"><?php echo e(App\MonthlyProgress::distinct('province_id')->count()); ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Districts
                        <span
                            class="badge badge-pill badge-success"><?php echo e(App\MonthlyProgress::distinct('district_id')->count()); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Total Appraisals
                        <span
                            class="badge badge-pill badge-success"><?php echo e($total_appraisals = App\Activity::sum('appraisal')); ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Acheived
                        <span
                            class="badge badge-pill badge-success"><?php echo e($achieved_appraisals = ceil(App\MonthlyProgress::sum('quantity'))); ?>

                            <?php
                               $acheived_appraisals =  intval($achieved_appraisals / $total_appraisals *100);
                            ?>
                            <?php if($acheived_appraisals > 100): ?> (100%) <?php else: ?> <?php endif; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Years
                        <span
                            class="badge badge-pill badge-success"><?php echo e(App\plan::distinct('year')->count()); ?></span>
                    </li>


                </ul>
            </div>


            <div class="col-md-4">
                <ul class="list-group push">
                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        All Users
                        <span class="badge badge-pill badge-success"><?php echo e(App\User::count()); ?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                        Active Users
                        <span
                            class="badge badge-pill badge-success"><?php echo e(App\MonthlyProgress::distinct('user_id')->count()); ?></span>
                    </li>

                </ul>

              
            </div>

           
         

          

        </div>

    </div>
</div>


<div class="block">
    <div class="block-header block-header-default bg-primary-light">
        <h3 class="block-title">Years</h3>
    </div>
    <div class="block-content">
        <div class="row">
            <div class="col-md-4">
                <h4>Planned</h4>
                <ul class="list-group push">
                  <?php $years = App\Plan::distinct('year')->orderBy('year')->pluck('year'); ?>
                  <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                    <?php echo e($year); ?>

                    <span class="badge badge-pill badge-success"><?php echo e(intval(App\Plan::where('year', $year)->sum('quantity'))); ?></span>
                </li>
        
            
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Actual</h4>
                <ul class="list-group push">
                  <?php $years = App\Plan::distinct('year')->orderBy('year')->pluck('year'); ?>
                  <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                    <?php echo e($year); ?>

                    <span class="badge badge-pill badge-success"><?php echo e(intval(App\MonthlyProgress::whereYear('start_date', $year)->sum('quantity'))); ?></span>
                </li>
        
            
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </ul>
            </div>
    
        </div>

    </div>
</div>


<div class="block">
    <div class="block-header block-header-default bg-primary-light">
        <h3 class="block-title">Provinces</h3>
    </div>
    <div class="block-content">
        <div class="row">
            <div class="col-md-4">
               
                <ul class="list-group push">
                  <?php $provinces= App\MonthlyProgress::with('province')->groupBy('province_id')->get('province_id'); ?>
                  <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                    <?php echo e($province->province->name); ?>

                    <span class="badge badge-pill badge-success"><?php echo e(intval(App\MonthlyProgress::where('province_id', $province->province_id)->sum('quantity'))); ?></span>
                </li>
        
            
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </ul>
            </div>
          
        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>

    <?php $__env->startSection('extra-content'); ?>

    <div class="row">

        <div class="col-6">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Activities</h3>
                </div>
                <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('activities')->dom;
} elseif ($_instance->childHasBeenRendered('3cVeRtO')) {
    $componentId = $_instance->getRenderedChildComponentId('3cVeRtO');
    $componentTag = $_instance->getRenderedChildComponentTagName('3cVeRtO');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3cVeRtO');
} else {
    $response = \Livewire\Livewire::mount('activities');
    $dom = $response->dom;
    $_instance->logRenderedChild('3cVeRtO', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
            </div>
        </div>



        <div class="col-6">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Details</h3>
                </div>
                <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('progress-details')->dom;
} elseif ($_instance->childHasBeenRendered('G3linap')) {
    $componentId = $_instance->getRenderedChildComponentId('G3linap');
    $componentTag = $_instance->getRenderedChildComponentTagName('G3linap');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('G3linap');
} else {
    $response = \Livewire\Livewire::mount('progress-details');
    $dom = $response->dom;
    $_instance->logRenderedChild('G3linap', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
            </div>
        </div>



    </div>



    

    
    



    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="/assets/js/plugins/nestable2/jquery.nestable.min.css">
    <style>
        .drag_disabled {
            pointer-events: none;
        }

        .drag_enabled {
            pointer-events: all;
        }

    </style>

    <?php echo \Livewire\Livewire::styles(); ?>


        <?php $__env->stopSection(); ?>





        <?php $__env->startSection('scripts'); ?>

        <!-- Page JS Plugins -->
        <script src="/assets/js/plugins/nestable2/jquery.nestable.min.js"></script>


        <script>
            $('.dd').nestable({
                maxDepth: 1
            });

        </script>



        <!-- Datatables -->
        <script src="/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="/assets/js/pages/be_tables_datatables.min.js"></script>
        <script>
            $(".table").dataTable();

        </script>


        <?php echo \Livewire\Livewire::scripts(); ?>


            <?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/birdseye/index.blade.php ENDPATH**/ ?>