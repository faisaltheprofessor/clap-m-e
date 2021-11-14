<?php $__env->startSection('breadcrumb', Breadcrumbs::render('report')); ?>

<?php
    $months =  [
     '1' => 'January',
     '2' => 'February',
     '3' => 'March',
     '4' => 'April',
     '5' => 'May',
     '6' => 'June',
     '7' => 'July',
     '8' => 'August',
     '9' => 'September',
     '10' => 'October',
     '11' => 'November',
     '12' => 'December',
    ];

    $years = [
    '2014' => '2014',
    '2015' => '2015',
    '2016' => '2016',
    '2017' => '2017',
    '2018' => '2018',
    '2019' => '2019',
    '2020' => '2020',
    '2021' => '2021',
    '2022' => '2022',
    '2023' => '2023',
    '2024' => '2024',
    '2025' => '2025',




    ];
    $selected_month = 1;
    $selected_year = 2019;
    if(isset($_GET['year'])) $selected_year = (int) $_GET['year'];
    if(isset($_GET['month'])) $selected_month = (int) $_GET['month'];
?>
<?php $__env->startSection('styles'); ?>
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/assets/js/plugins/select2/css/select2.css">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/assets/js/plugins/datatables/dataTables.bootstrap4.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title', 'Report'); ?>
<?php $__env->startSection('content'); ?>
    <div class="block">
        <div class="block-header block-header-default bg-primary-light">
            <h3 class="block-title">Filters</h3>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>


        </div>
        <div class="block-content block-content-full">
            <form action="/report/generate" method="get">
                <div class="row">
                    
                    <div class="col col-lg-4 col-md-12 col-sm-12 form-group" id="projects">
                        <?php echo e(Form::label('project_id', 'Project')); ?>

                        <?php echo e(Form::select('project_id', $projects, null, ['class' => 'form-control select2', 'placeholder' => 'Choose Project...'])); ?>

                        
                        <i class="form-group__bar"></i>
                    </div>

                    
                    <div class="col col-lg-4 col-md-12 col-sm-12 form-group" id="components">
                        <?php echo e(Form::label('component_id', 'Component')); ?>

                        <?php echo e(Form::select('component_id', $components, null, ['class' => 'form-control select2', 'placeholder' => 'Choose Component...'])); ?>


                        
                        <i class="form-group__bar"></i>
                    </div>


                    
                    <div class="col col-lg-4 col-md-12 col-sm-12 fom-group" id="subcomponents">

                        <?php echo e(Form::label('subcomponent_id', 'Sub Component')); ?>

                        <?php echo e(Form::select('subcomponent_id', $subcomponents, null, ['class' => 'form-control select2', 'placeholder' => 'Choose Subcomponent...'])); ?>


                        
                        <i class="form-group__bar"></i>
                    </div>
                </div>





                <div class="row">
                    
                    <div class="col col-lg-4 col-md-12 col-sm-12 form-group" id="activity">
                        <?php echo e(Form::label('activity_id', 'Activity')); ?>

                        <?php echo e(Form::select('activity_id', $activities, null, ['class' => 'form-control select2', 'placeholder' => 'Choose Activity...'])); ?>

                        <i class="form-group__bar"></i>
                    </div>


                    <div class="col col-lg-4 col-md-12 col-sm-12">
                        <label>Month</label>
                        <?php echo Form::select('month', $months, null, ['class' => 'form-control select2', 'placeholder' => 'Select Month'] ); ?>

                    </div>

                    <div class="col col-lg-4 col-md-12 col-sm-12">
                        <label>Year</label>
                        <?php echo Form::select('year', $years,null, ['class' => 'form-control select2', 'placeholder' => 'Select Month'] ); ?>

                    </div>

                    


                    

                    



                    
                    
                    


                    
                    







                </div>

                
                <div class="row">
                    
                    <div class="col col-lg-4 col-md-12 col-sm-12 form-group" id="provinces">
                        <?php echo e(Form::label('province_id', 'Province')); ?>

                        <?php echo e(Form::select('province_id', $provinces, null, ['class' => 'form-control select2', 'placeholder' => 'Choose Province...'])); ?>

                        <i class="form-group__bar"></i>
                    </div>

                    
                    <div class="col col-lg-4 col-md-12 col-sm-12 form-group" id="districts">
                        <?php echo e(Form::label('district_id', 'District')); ?>

                        <?php echo e(Form::select('district_id', $districts, null, ['class' => 'form-control select2', 'placeholder' => 'Choose District...'])); ?>

                        <i class="form-group__bar"></i>
                    </div>

                    
                    <div class="col col-lg-4 col-md-12 col-sm-12 form-group" id="villages">

                        <?php echo e(Form::label('village_id', 'Village')); ?>

                        <?php echo e(Form::select('village_id', $villages, null, ['class' => 'form-control select2', 'placeholder' => 'Choose Village...'])); ?>

                        <i class="form-group__bar"></i>
                    </div>
                    <div class="col-3">
                        <input type="submit" class="btn btn-primary form-control" value="Fetch All Records" name="fetch-all-records">
                    </div>
                    <div class="col-3">
                        <input type="submit" class="btn btn-secondary form-control" value="Paginate Records" name="paginate-records">
                    </div>
                </div>


            
            



        </div>
        </form>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script>


        modal = $('#add-new')

        $('a.add-ajax-item').on('click', function(e){
            e.preventDefault();
            $this = $(this)
            title = $this.data('title')
            modal.find('.modal-header h5').html(title)
            $.ajax({
                beforeSend: function(){},
                url: '/add-ajax-item',
                data: {view: $this.data('add')}
            }).done(function(returnData){
                modal.find('.modal-body').empty().append(returnData)
                $('.modal-body .select2').select2({
                    dropdownParent: $('#add-new')

                })

            })
            modal.modal()
        })


        $('.ajax-item-save').click(function() {
            form = modal.find('form')
            model = form.find('input[name="model"]').val()
            $.get({
                url: form.attr('action'),
                data: form.serialize(),
                success: (returnData) => swal({
                    title: 'Success!',
                    text: returnData,
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-primary'
                }),
                error: (e) =>{
                    ul = '<ul></ul>';
                    $.each(e.responseJSON.errors.name,(x, y) => {
                        $.notify({
                            title: 'Failed!',
                            message: y,
                        }, {
                            type: 'danger',
                            placement: {align:'center'}
                        });
                    })
                },
                complete: () => modal.modal('hide')



            })



        });

        $("form").submit(function() {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", true);

            return true;
        });


        $(".dropdown-menu a").click(function(){
            $("button.dropdown-toggle").text($(this).text());
            $('input[type="hidden"]').val($(this).data('operator'));
        });

        $('.select2').select2()
    </script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Developer/Sites/laravel-sites/clap/resources/views/reports/index.blade.php ENDPATH**/ ?>