<?php $__env->startSection('breadcrumb', Breadcrumbs::render('profile')); ?>

<?php $__env->startSection('content'); ?>
    <!-- User Info -->
    <div class="bg-image bg-image-bottom" style="background-image: url('/assets/media/photos/photo13@2x.jpg');">
        <div class="bg-primary-dark-op py-30">
            <div class="content content-full text-center">
                <!-- Avatar -->
                <div class="mb-15">
                    <a class="img-link" href="be_pages_generic_profile.html">
                        <img class="img-avatar img-avatar96 img-avatar-thumb" src="/assets/media/avatars/avatar15.jpg" alt="">
                    </a>
                </div>
                <!-- END Avatar -->

                <!-- Personal -->
                <h1 class="h3 text-white font-w700 mb-10"><?php echo e(Auth::user()->first_name); ?> <?php echo e(AUth::user()->last_name); ?></h1>
                <h2 class="h5 text-white-op">
                   <?php echo e(Auth::user()->position); ?> <a class="text-primary-light" href="javascript:void(0)">Database Developer</a>
                </h2>
                <!-- END Personal -->

               
            </div>
        </div>
    </div>
    <!-- END User Info -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/profile/index.blade.php ENDPATH**/ ?>