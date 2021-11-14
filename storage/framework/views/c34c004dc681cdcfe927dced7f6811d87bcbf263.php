<?php $__env->startSection('styles'); ?>


    <style>
        #data-table_filter
        {
            display: none;
        }
        /* .green {
            color: forestgreen;
            font-weight: bold;
            background: #e3e3e3;
            padding: 5px;

        } */
    </style>
    <?php echo $__env->make('partials.datatables-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb', Breadcrumbs::render('result')); ?>

<?php $__env->startSection('page-title'); ?>
    
    
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        use App\Project;
        use App\Activity;
    ?>
    <div class="block">
        <div class="block-header block-header-default bg-primary-light">
            <h3 class="block-title">
                <?php if(method_exists($progress, 'links')): ?>
                    <?php echo e($progress->links()); ?>

                <?php endif; ?>
            </h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table id="data-table" class="datatable table table-bordered <?php echo e(!method_exists($progress, 'links') ? 'datatable' : ''); ?>">
                    <thead class="thead-default">
                    <tr>
                        <th>#</th>
                        <th>Activity Name</th>
                        <th>Project</th>
                        <th>Component</th>
                        <th>Subcomponent</th>
                        <th>Planned</th>
                        <th>Acheived</th>
                        <th>Percentage</th>
                    </tr>
                    </thead>




                    <tbody>
                    <?php if($progress): ?>
                        <?php $__currentLoopData = $progress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $output): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($output->plan): ?>
                                
                            <?php endif; ?>
                            
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <?php if($output->activity): ?>
                                        <a href="/activity/<?php echo e($output->activity->id); ?>"> <?php echo e($output->activity->name); ?> </a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($output->project): ?>
                                        <?php echo e($output->project->name); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($output->component): ?>
                                        <?php echo e($output->component->name); ?>

                                    <?php endif; ?>

                                </td>
                                <td>
                                    <?php if($output->subcomponent): ?>
                                        <?php echo e($output->subcomponent->name); ?>

                                    <?php endif; ?>



                                </td>

                                <td>
                                    <?php  echo $planned =  App\Plan::where('activity_id',$output->activity->id)->sum('quantity') ?>
                                </td>

                                <td>
                                    <?php echo $achieved =  \App\MonthlyProgress::where('project_id',$output->project->id)
                           ->where('activity_id', $output->activity->id)
                           ->sum('quantity')
                                    ?>

                                </td>

                                <td> <?php if($achieved > $planned): ?> 100% <?php else: ?> <?php echo e($achieved/$planned*100); ?>% <?php endif; ?></td>
                                


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Activity Name</th>
                        <th>Project</th>
                        <th>Component</th>
                        <th>Subcomponent</th>
                        <th>Planned</th>
                        <th>Acheived</th>
                        <th>Percentage</th>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
        <?php if(method_exists($progress, 'links')): ?>
            <?php echo e($progress->links()); ?>

        <?php endif; ?>
    </div>



    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>




    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/keytable/2.6.0/js/dataTables.keyTable.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/plug-ins/preview/searchPane/dataTables.searchPane.min.js"></script>
    <script>
        $(document).ready(function () {

            $(document).ready(function() {
                var groupColumn = 2;
                var table = $('.datatable').DataTable({
                    dom: 'Bftrip',
                    buttons: [
                        {
                            extend: 'print',
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
                        'colvis',

                    ],

                    "columnDefs": [
                        { "visible": false, "targets": groupColumn }
                    ],
                    "order": [[ groupColumn, 'asc' ]],
                    "displayLength": 25,
                    keys:true,
                    searchPane: {
                        columns:[2,3,4],
                        threshold: 0
                    },
                    exportOptions: {
                        columns: ':visible'
                    },
                    // bFilter: false,

                    "responsive": true,


                } );


            } );
        });
    </script>







<?php $__env->startSection('extra'); ?>
    $('.datatable').DataTable({
    "columnDefs": [
    { "visible": false, "targets": groupColumn }
    ],
    "order": [[ groupColumn, 'asc' ]],

    dom: 'Bfrtip',
    "paging": true,
    keys:true,
    searchPane: {
    columns:[1,2],
    threshold: 0
    },
    exportOptions: {
    columns: ':visible'
    },
    // bFilter: false,
    buttons: [
    {
    extend: 'print',
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
    'colvis',

    ],

    "responsive": true,
    "pageLength": 10,
    // "autoWidth": true,

    });
    });
    <?php $__env->stopSection(); ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Developer/Sites/laravel-sites/clap/resources/views/reports/cumulative_report_result.blade.php ENDPATH**/ ?>