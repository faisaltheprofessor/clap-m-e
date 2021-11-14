<div class="block-content block-content-full">
    <div class="js-nestable-connected-simple dd">
        <ol class="dd-list" style="width: 100%">
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <td></td>
                </tr>
                </thead>


                <tbody>
                <?php $__currentLoopData = $progress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $current_progress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <li class="dd-item dd-collapsed" data-id="<?php echo e($current_progress->id); ?>">
                                <div class="dd-handle"><?php echo e($current_progress->activity->name); ?></div>
                                <?php
                                    $provinces = \App\MonthlyProgress::where('activity_id', $current_progress->activity->id)->groupBy('province_id')->get('province_id');
                                ?>
                                <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <ol class="dd-list" wire:click="update">
                                        <li class="dd-item dd-nodrag" data-id="2">
                                            <div class="dd-handle"><?php echo e(\App\Province::find($province->province_id)->name); ?></div>
                                        </li>

                                    </ol>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </li>
                        </td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </ol>
    </div>
</div>
<?php /**PATH /Users/faisal/Developer/Sites/laravel-sites/clap/resources/views/livewire/activities.blade.php ENDPATH**/ ?>