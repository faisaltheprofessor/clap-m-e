<?php $__env->startSection('content'); ?>
<div class="block">
    <div class="block-header block-header-default bg-primary-light">
        <h3 class="block-title" style="float:left">My Progress</h3>
        <a href="/entry_summary" class="btn btn-primary mr-10 mb-15">Seel All Progress</a>
        <?php echo e($monthlyProgresses->links()); ?>

    </div>
    <div class="block-content">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Activity</th>
                <th>Province</th>
                <th>District</th>
                <th>Quantity</th>
                <th>Date</th>

                
            </tr>

            <?php 
            $x = 1;
            if(method_exists($monthlyProgresses, 'links') && isset($_GET['page'])) $x = $x *100 * ($_GET['page']-1)+ 1;
            ?>
            <?php $__currentLoopData = $monthlyProgresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monthlyProgress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($x); ?></td>
                <td><?php echo e($monthlyProgress->activity->name); ?> <small>(<?php echo e($monthlyProgress->id); ?>)</small></td>
                <td><?php echo e($monthlyProgress->province->name); ?></td>
                <td>
                    <?php if($monthlyProgress->district): ?>
                    <?php echo e($monthlyProgress->district->name); ?>

                    <?php endif; ?>
                </td>
                <td><?php echo e($monthlyProgress->quantity); ?></td>
                <td><?php echo e($monthlyProgress->start_date->format('F Y')); ?></td>


                
                
            </tr>
            <?php $x++ ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <?php echo e($monthlyProgresses->links()); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/admin/my_progress.blade.php ENDPATH**/ ?>