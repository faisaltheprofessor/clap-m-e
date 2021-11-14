<?php $__env->startSection('content'); ?>
<div class="row">
   
    <div class="col-md-6">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Questionnaire Form</h3>
            </div>
            <div class="block-content">
        
            <iframe src="<?php echo e($questionnaire->form_link); ?>" width="100%" height="1000"></iframe>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Available Questionnaires</h3>
            </div>
            <div class="block-content">
        
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full table-responsive">
                    <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Title</th>
    
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Description</th>
                        
                        <th>Kobo</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><a href="/project/<?php echo e($questionnaire->id); ?>" style="background:none"><?php echo e($questionnaire->id); ?></a></td>
                            <td class="font-w600"><a href="/questionnaire/<?php echo e($questionnaire->id); ?>" style="background:none"><?php echo e($questionnaire->title); ?></a></td>
                            <td class="d-none d-sm-table-cell"><a href="/questionnaire/<?php echo e($questionnaire->id); ?>" style="background:none"><?php echo e($questionnaire->description); ?></a></td>
                            <td class="d-none d-sm-table-cell popupWindow"><a href="<?php echo e($questionnaire->kobo_link); ?>" style="background:none" title="Open Seperately">Details <i class="fa fa-window-restore ml-5"></i>
                            </a></td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
  
    <script>
    let params_ = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=1000,height=1000, left=300, top=100`;
     $('.popupWindow').click(function(e) {
        e.preventDefault();
            let url = $(this).children('a').first().attr('href')
            // alert(url)
            open(url, 'Kobo', params_)
    })

        $(document).ready(function(){
            let active_form = `<?php echo e($questionnaire->form_link); ?>`
            $(`a[href="${active_form}"]`).parent('tr').addClass('active-form')
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Developer/Sites/laravel-sites/clap/resources/views/questionnaire/show.blade.php ENDPATH**/ ?>