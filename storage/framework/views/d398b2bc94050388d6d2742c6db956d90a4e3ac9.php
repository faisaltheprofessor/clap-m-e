<?php $__env->startSection('page-title'); ?> Project: <?php echo e($project->name); ?> <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

 <!-- Block Tabs Animated Slide Up -->
 <div class="block">
    <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#project-stats">Stats</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#project-components">Components <span class="badge badge-primary badge-pill"><?php echo e($project->components->count()); ?></span></a> 
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#project-subcomponents">Subcomponents <span class="badge badge-primary badge-pill"><?php echo e($project->subcomponents->count()); ?></span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#project-activities">Activities <span class="badge badge-primary badge-pill"><?php echo e($project->activities->count()); ?></span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#project-plans">Plans <span class="badge badge-primary badge-pill"><?php echo e($project->plans->count()); ?></span></a>
        </li>

       




        <li class="nav-item ml-auto">
            <a class="nav-link" href="#btabs-animated-slideup-settings"><i class="si si-settings"></i></a>
        </li>
    </ul>
    <div class="block-content tab-content overflow-hidden">
        <div class="tab-pane fade fade-up show active" id="project-stats" role="tabpanel">
            <h4 class="font-w400"><?php echo e($project->name); ?></h4>
            <p>Content slides up..</p>
        </div>


        <div class="tab-pane fade fade-up" id="project-components" role="tabpanel">
             <!-- Multiple Items -->
             <div class="block">
                <div class="block-content">
                    
                   <?php $__currentLoopData = $project->components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php $str = Str::random(10); ?>
                   <div id="<?php echo e(Str::camel($component->name)); ?>_<?php echo e($str); ?>" role="tablist" aria-multiselectable="true">
                    <div class="block block-bordered block-rounded mb-2">
                        <div class="block-header" role="tab" id="<?php echo e(Str::camel($component->name)); ?>_<?php echo e($str); ?>">
                            <a class="font-w600" data-toggle="collapse" data-parent="#<?php echo e(Str::camel($component->name)); ?>_<?php echo e($str); ?>" href="#<?php echo e(Str::camel($component->name)); ?>_<?php echo e($str); ?>_q1" aria-expanded="true" aria-controls="accordion2_q1">
                               <?php echo e($component-> name); ?>

                            </a>
                        </div>
                        <div id="<?php echo e(Str::camel($component->name)); ?>_<?php echo e($str); ?>_q1" class="collapse" role="tabpanel" aria-labelledby="<?php echo e(Str::camel($component->name)); ?>_<?php echo e($project->id); ?>_h1">
                            <div class="block-content">
                              
                                <?php if($component->subcomponents->count() > 0): ?>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Subcomponents</h3>
            
                        </div>
                        
                        <div class="block-content">
                            <ul class="list list-activity">
                               
                            
                                    <?php $__currentLoopData = $component->subcomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcomponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <i class="si si-wallet text-success"></i>
                                    <div class="font-w600"><?php echo e($subcomponent->name); ?></div>
                                    
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                               
                            </ul>
                        </div>
                    </div>
                    <?php else: ?>
                       <div class="alert alert-info">No Subcomponents</div>
                    <?php endif; ?>
                    <!-- END Timeline Activity -->

                   
                            </div>
                        </div>
                    </div>
                  
                </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- END Multiple Items -->
        </div>


        <div class="tab-pane fade fade-up" id="project-subcomponents" role="tabpanel">
            <!-- Multiple Items -->
            <div class="block">
               <div class="block-content">
                   
                  <?php $__currentLoopData = $project->subcomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcomponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div id="<?php echo e(Str::camel($subcomponent->name)); ?>_<?php echo e($project->id); ?>" role="tablist" aria-multiselectable="true">
                   <div class="block block-bordered block-rounded mb-2">
                       <div class="block-header" role="tab" id="<?php echo e(Str::camel($subcomponent->name)); ?>_<?php echo e($project->id); ?>">
                           <a class="font-w600" data-toggle="collapse" data-parent="#<?php echo e(Str::camel($subcomponent->name)); ?>_<?php echo e($project->id); ?>" href="#<?php echo e(Str::camel($subcomponent->name)); ?>_<?php echo e($project->id); ?>_q1" aria-expanded="true" aria-controls="accordion2_q1">
                              <?php echo e($subcomponent-> name); ?> <span class="badge badge-primary badge-pill"><?php echo e($subcomponent->activities->count()); ?></span>
                           </a>
                       </div>
                       <div id="<?php echo e(Str::camel($subcomponent->name)); ?>_<?php echo e($project->id); ?>_q1" class="collapse" role="tabpanel" aria-labelledby="<?php echo e(Str::camel($subcomponent->name)); ?>_<?php echo e($project->id); ?>_h1">
                           <div class="block-content">
                             
                               <?php if($subcomponent->activities->count() > 0): ?>
                   <div class="block">
                       <div class="block-header block-header-default">
                           <h3 class="block-title">Activities</h3>
           
                       </div>
                       
                       <div class="block-content">
                           <ul class="list list-activity">
                              
                                <?php $x = 1 ?>
                                   <?php $__currentLoopData = $subcomponent->activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <li>
                                
                                   <div class="font-w600"> <?php echo e($x++); ?>.   <?php echo e($activity->name); ?></div>
                                   
                               </li>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                              
                           </ul>
                       </div>
                   </div>
                   <?php else: ?>
                      <div class="alert alert-info">No Activities</div>
                   <?php endif; ?>
                   <!-- END Timeline Activity -->

                  
                           </div>
                       </div>
                   </div>
                 
               </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
           </div>
           <!-- END Multiple Items -->
       </div>
       

       <div class="tab-pane fade fade-up" id="project-activities" role="tabpanel">
        <!-- Multiple Items -->
        <div class="block">
           <div class="block-content">
               
              <?php $__currentLoopData = $project->activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $str = Str::random(10); ?>
              <div id="<?php echo e($str); ?>_<?php echo e($project->id); ?>" role="tablist" aria-multiselectable="true">
               <div class="block block-bordered block-rounded mb-2">
                   <div class="block-header" role="tab" id="<?php echo e($str); ?>_<?php echo e($project->id); ?>">
                       <a class="font-w600" data-toggle="collapse" data-parent="#<?php echo e($str); ?>_<?php echo e($project->id); ?>" href="#<?php echo e($str); ?>_<?php echo e($project->id); ?>_q1" aria-expanded="true" aria-controls="accordion2_q1">
                          <?php echo e($activity->name); ?> <span class="badge badge-primary badge-pill"><?php echo e($activity->plans->count()); ?></span>
                       </a>
                   </div>
                   <div id="<?php echo e($str); ?>_<?php echo e($project->id); ?>_q1" class="collapse" role="tabpanel" aria-labelledby="<?php echo e($str); ?>_<?php echo e($project->id); ?>_h1">
                       <div class="block-content">
                         
                           <?php if($activity->plans->count() > 0): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Planned</h3>
            
                        </div>
                        
                        <div class="block-content">
                            <ul class="list list-activity">
                               
                                 <?php $x = 1 ?>
                                    <?php $__currentLoopData = $activity->plans->sortBy('year'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                 
                                    <div class="font-w600"> <?php echo e($x++); ?>.   <?php echo e($plan->year); ?> <span class="badge badge-primary badge-pill"><?php echo e($plan->quantity); ?></span> <small><?php echo e($plan->id); ?> </small></div>
                                    
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                               
                            </ul>
                        </div>
                    </div>
    
                    
                  </div>
    
                  <div class=" col-md-6">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Acheived</h3>
            
                        </div>
                        
                        <div class="block-content">
                            <ul class="list list-activity">
                               
                          
                                    <?php $__currentLoopData = $activity->plans->sortBy('year'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                 
                                    <div class="font-w600"><?php echo e($plan->year); ?> <span class="badge badge-primary badge-pill">
                                        <?php echo e(App\MonthlyProgress::whereYear('start_date', $plan->year)->where('plan_id',$plan->id )->sum('quantity')); ?>

                                    </span></div>
                                    
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                               
                            </ul>
                        </div>
                    </div>
    
                    
                  </div>
            </div>
               <?php else: ?>
                  <div class="alert alert-info">No Activities</div>
               <?php endif; ?>
               <!-- END Timeline Activity -->

              
                       </div>
                   </div>
               </div>
             
           </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
       </div>
       <!-- END Multiple Items -->
   </div>

        <div class="tab-pane fade fade-up" id="project-plans" role="tabpanel">
            <h4 class="font-w400"><?php echo e($project->name); ?>t</h4>
            <p>Content slides up..</p>
        </div>

        <div class="tab-pane fade fade-up" id="project-provinces" role="tabpanel">
            <h4 class="font-w400"><?php echo e($project->name); ?>t</h4>
            <p>Content slides up..</p>
        </div>


        <div class="tab-pane fade fade-up" id="project-progress" role="tabpanel">
            <h4 class="font-w400"><?php echo e($project->name); ?>t</h4>
            <p>Content slides up..</p>
        </div>



        <div class="tab-pane fade fade-up" id="btabs-animated-slideup-settings" role="tabpanel">
            <h4 class="font-w400">Settings Content</h4>
            <p>Content slides up..</p>
        </div>
    </div>
</div>
<!-- END Block Tabs Animated Slide Up -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra-content'); ?>
    <?php echo $__env->make('includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h5><?php echo e($project->name_dari); ?></h5>
    <hr>

    <div class="row">
        <div class="col-6">
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">Stats</h3>
                </div>
                <div class="block-content">
                   
               </div>
           </div>
       </div>
       <div class="col-6">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Project Components</h3>
            </div>
            <div class="block-content">
                   <?php ($x = 1); ?>
                   <table class="table mb-0 table-sm table-responsive-sm">
                       <thead>
                       <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Dari Name</th>
                           
                       </tr>
                       </thead>

                       <tbody>
                       <?php $__currentLoopData = $project->components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                               <td><a href="/component/<?php echo e($component->id); ?>"><?php echo e($x++); ?></a></td>
                               <td><a href="/component/<?php echo e($component->id); ?>"><?php echo e($component->name); ?></a></td>
                               <td><a href="/component/<?php echo e($component->id); ?>"><?php echo e($component->name_dari); ?></a></td>
                              

                           </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>


   
    <div class="row">
        <div class="col-6">
            <div class="block">
                <div class="block-header block-header-default bg-primary-light">
                    <h3 class="block-title">Add Component to the Project</h3>
                </div>
                <div class="block-content">
                    <form class="row" action="/component" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="redirect" value="/project/<?php echo e($project->id); ?>">
                        <input type="hidden" name="project_id" value="<?php echo e($project->id); ?>">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Component Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                               <label for="name_dari">اسم بخش</label>
                               <input type="text" class="form-control" dir="rtl" id="name_dari" name="name_dari">
                               <i class="form-group__bar"></i>
                           </div>



                           <div class="clearfix"></div>

                           <div class="form-group">
                               <input type="submit" class="btn btn-primary" value="Add Component">
                           </div>

                       </div>
                   </form>
               </div>
           </div>
       </div>
       <div class="col-6">
        <div class="block">
            <div class="block-header block-header-default bg-primary-light">
                <h3 class="block-title">Project Components</h3>
            </div>
            <div class="block-content">
                   <?php ($x = 1); ?>
                   <table class="table mb-0 table-sm table-responsive-sm">
                       <thead>
                       <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Dari Name</th>
                           
                       </tr>
                       </thead>

                       <tbody>
                       <?php $__currentLoopData = $project->components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                               <td><a href="/component/<?php echo e($component->id); ?>"><?php echo e($x++); ?></a></td>
                               <td><a href="/component/<?php echo e($component->id); ?>"><?php echo e($component->name); ?></a></td>
                               <td><a href="/component/<?php echo e($component->id); ?>"><?php echo e($component->name_dari); ?></a></td>
                              

                           </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Developer/Sites/laravel-sites/clap/resources/views/projects/show.blade.php ENDPATH**/ ?>