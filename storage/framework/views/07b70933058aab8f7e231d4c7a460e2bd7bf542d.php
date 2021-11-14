<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Add Questionnaire</h3>
            </div>
            <div class="block-content">
        
                <form action="/questionnaire" method="post" enctype="multipart/form-data" class="js-validation-bootstrap">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label class="col-12" for="name">Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                            <!-- <div class="form-text text-muted">Project Name in English</div> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12" for="description">Description</label>
                        <div class="col-md-12">
                            <textarea type="text" class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12" for="name">Form Link</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="form_link" name="form_link" placeholder="https://example.com" required>
                            <!-- <div class="form-text text-muted">Project Name in English</div> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="name">Kobo Link</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="kobo_link" name="kobo_link" placeholder="https://example.com" required>
                            <!-- <div class="form-text text-muted">Project Name in English</div> -->
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
    </div>
    <div class="col-md-6">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Available Questionnaires</h3>
            </div>
            <div class="block-content">
                
                <table
 class="table table-bordered table-striped table-vcenter js-dataTable-full">
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
                        <td class="text-center"><a href="/project/<?php echo e($questionnaire->id); ?>" target="_blank"><?php echo e($questionnaire->id); ?></a></td>
                        <td class="font-w600"><a href="/questionnaire/<?php echo e($questionnaire->id); ?>" target="_blank"><?php echo e($questionnaire->title); ?></a></td>
                        <td class="d-none d-sm-table-cell"><a href="/questionnaire/<?php echo e($questionnaire->id); ?>" target="_blank"><?php echo e($questionnaire->description); ?></a></td>
                        <td class="d-none d-sm-table-cell popupWindow"><a href="<?php echo e($questionnaire->kobo_link); ?>">Details <i class="fa fa-window-restore ml-5"></i></a></td>
                        
                        

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
   

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
</script>
<?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Developer/Sites/clap/resources/views/questionnaire/index.blade.php ENDPATH**/ ?>