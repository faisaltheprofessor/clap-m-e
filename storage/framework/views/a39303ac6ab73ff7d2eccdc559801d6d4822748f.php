<?php if(count($breadcrumbs)): ?>
        <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($breadcrumb->url && !$loop->last): ?>

               <a class="breadcrumb-item" href="<?php echo e($breadcrumb->url); ?>"><?php echo e($breadcrumb->title); ?></a>
            <?php else: ?>
                <span class="breadcrumb-item active"><?php echo e($breadcrumb->title); ?></span>
            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/partials/breadcrumbs.blade.php ENDPATH**/ ?>