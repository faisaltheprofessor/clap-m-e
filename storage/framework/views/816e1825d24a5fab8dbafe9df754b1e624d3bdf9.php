<?php $__env->startSection('content'); ?>
    <div class="block">
        <div class="block-header block-header-default bg-primary-light">
            <h3 class="block-title">Entry Progress</h3>
        </div>
        <div class="block-content">
          <table class="table datatable" id="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Total Records</th>
                        <th>Today</th>
                        <th>Yesterday</th>
                        <th>Last 7 Days</th>
                        <th>Last 30 Days</th>
                        <th>Latest</th>
                    </tr>
                </thead>
             <tbody>
                 <?php $users = App\User::all() ?>
                 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if( $monthlyProgress->where('user_id', $user->id)->count() > 0 ): ?>
                     <tr>
                         <td><?php echo e($user->first_name); ?>


                         </td>
                         <td><?php echo e($monthlyProgress->where('user_id', '=', $user->id)->count()); ?></td>
                         <td><a href="/entry-summary/<?php echo e($user->id); ?>/<?php echo e(\Carbon\Carbon::today()->toDateString()); ?>"><?php echo e($monthlyProgressToday->where('user_id', '=', $user->id)->count()); ?></a></td>
                         
                         <td><a href="/entry-summary/<?php echo e($user->id); ?>/<?php echo e(\Carbon\Carbon::today()->subDay()->toDateString()); ?>"><?php echo e($monthlyProgressYesterday->where('user_id',
                         '=',
                         $user->id)->count()); ?></a></td>
                         <td><?php echo e($monthlyProgressThisWeek->where('user_id', '=', $user->id)->count()); ?></td>
                         <td><?php echo e($monthlyProgressThisMonth->where('user_id', '=', $user->id)->count()); ?></td>
                         <td>
                             <?php ( $date = \App\MonthlyProgress::latest('created_at')->where('user_id', $user->id)->first()->created_at ); ?>
                                <?php echo e($date->diffForHumans()); ?>

                         </td>
                     </tr>
                     <?php endif; ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </tbody>

              <tfoot>
              <tr>
                     <td><strong>Total</strong></td>
                     <td><strong><?php echo e($monthlyProgress->count()); ?></strong></td>
                     <td><strong><?php echo e($monthlyProgressToday->count()); ?></strong></td>
              </tr>
              </tfoot>
          </table>
      </div>
  </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

    <!-- Datatables -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>

    <script>
        $('table').dataTable({
            "order": [[ 1, "desc" ]]
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/admin/entry_summary.blade.php ENDPATH**/ ?>