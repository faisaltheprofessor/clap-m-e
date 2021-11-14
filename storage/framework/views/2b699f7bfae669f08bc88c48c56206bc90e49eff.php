<?php $__env->startSection('page-title', 'Home' ); ?>
<?php
    $activity = new App\Activity();
    $plan = new App\Plan();
    $progress = new App\MonthlyProgress();
?>
<?php $__env->startSection('breadcrumb', Breadcrumbs::render('home')); ?>
<?php $__env->startSection('content'); ?>
     <!-- Page Content -->
     <div class="content">
          <!-- Content Sliders -->
          <div class="row items-push">
          
              <div class="col-md-4">
                  <!-- Tiles Slider 3 -->
                  <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                      
                      <div class="block text-center bg-white mb-0">
                          <div class="block-content block-content-full bg-primary-lighter">
                              <i class="fa fa-keyboard-o fa-5x text-primary"></i>
                          </div>
                          <div class="block-content block-content-full block-content-sm bg-primary">
                              <?php 
                                $no_of_outputs = App\MonthlyProgress::count();
                                $no_of_irrigation_schemes = App\Irrigation::count();
                              ?>
                              <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_outputs + $no_of_irrigation_schemes); ?></div>
                              <div class="text-white-op"><?php echo e($progress->whereDate('created_at', '>=', date('Y-m-d'))->count() + App\Irrigation::whereDate('created_at', date('Y-m-d'))->count()); ?> Added Today</div>
                          </div>
                      </div>

                      <div class="block text-center bg-white mb-0">
                        <div class="block-content block-content-full bg-primary-lighter">
                            <i class="fa fa-tasks fa-5x text-primary"></i>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-primary">
                            <?php 
                              $no_of_plans = App\Plan::count();
                            ?>
                            <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_plans); ?></div>
                            <div class="text-white-op"><?php if($no_of_plans == 1): ?> Plan <?php else: ?> Plans <?php endif; ?></div>
                        </div>
                    </div>

                    <div class="block text-center bg-white mb-0">
                        <div class="block-content block-content-full bg-primary-lighter">
                            <i class="si si-basket-loaded fa-5x text-primary"></i>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-primary">
                            <?php 
                              $no_of_activities = App\Activity::count();
                            ?>
                            <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_activities); ?></div>
                            <div class="text-white-op"><?php if($no_of_activities == 1): ?> Activity <?php else: ?> Activities <?php endif; ?></div>
                        </div>
                    </div>
                      
                  </div>
                  <!-- END Tiles Slider 3 -->
              </div>
              


                
                <div class="col-md-4">
                    <!-- Tiles Slider 3 -->
                    <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                        
                        <div class="block text-center bg-white mb-0">
                            <div class="block-content block-content-full bg-primary-lighter">
                                <i class="fa fa-android fa-5x text-primary"></i>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-primary">
                                <?php 
                                  $no_of_projects = App\Project::count();
                                ?>
                                <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_projects); ?></div>
                                <div class="text-white-op"><?php if($no_of_projects == 1): ?> Project <?php else: ?> Projects <?php endif; ?></div>
                            </div>
                        </div>
  
                        <div class="block text-center bg-white mb-0">
                          <div class="block-content block-content-full bg-primary-lighter">
                              <i class="fa fa-window-maximize fa-5x text-primary"></i>
                          </div>
                          <div class="block-content block-content-full block-content-sm bg-primary">
                              <?php 
                                $no_of_components = App\Component::count();
                              ?>
                              <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_components); ?></div>
                              <div class="text-white-op"><?php if($no_of_components == 1): ?> Component <?php else: ?> Components <?php endif; ?></div>
                          </div>
                      </div>
  
                      <div class="block text-center bg-white mb-0">
                          <div class="block-content block-content-full bg-primary-lighter">
                              <i class="fa fa-tasks fa-5x text-primary"></i>
                          </div>
                          <div class="block-content block-content-full block-content-sm bg-primary">
                              <?php 
                                $no_of_subcomponents = App\Subcomponent::count();
                              ?>
                              <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_subcomponents); ?></div>
                              <div class="text-white-op"><?php if($no_of_subcomponents == 1): ?> Subcomponents <?php else: ?> Subcomponents <?php endif; ?></div>
                          </div>
                      </div>
                        
                    </div>
                    <!-- END Tiles Slider 3 -->
                </div>
                

                  
              <div class="col-md-4">
                <!-- Tiles Slider 3 -->
                <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                    
                    <div class="block text-center bg-white mb-0">
                        <div class="block-content block-content-full bg-primary-lighter">
                            <i class="fa fa-leaf fa-5x text-primary"></i>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-primary">
                           
                            <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_irrigation_schemes); ?></div>
                            <div class="text-white-op"><?php if($no_of_irrigation_schemes== 1): ?> Irrigation Scheme <?php else: ?> Irrigation Schemes <?php endif; ?></div>
                        </div>
                    </div>

                    <div class="block text-center bg-white mb-0">
                        <div class="block-content block-content-full bg-primary-lighter">
                            <i class="fa fa-user fa-5x text-primary"></i>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-primary">
                            <?php 
                              $no_of_users = App\User::count();
                            ?>
                            <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_users); ?></div>
                            <div class="text-white-op"><?php if($no_of_users == 1): ?> User <?php else: ?> Users <?php endif; ?></div>
                        </div>
                    </div>

                    <div class="block text-center bg-white mb-0">
                      <div class="block-content block-content-full bg-primary-lighter">
                          <i class="fa fa-files-o fa-5x text-primary"></i>
                      </div>
                      <div class="block-content block-content-full block-content-sm bg-primary">
                          <?php 
                            $no_of_questionnaires = App\Questionnaire::count();
                          ?>
                          <div class="font-size-h3 font-w600 text-white"><?php echo e($no_of_questionnaires); ?></div>
                          <div class="text-white-op"><?php if($no_of_questionnaires == 1): ?> Questionnaire <?php else: ?> Questionnaire <?php endif; ?></div>
                      </div>
                  </div>

                
                    
                </div>
                <!-- END Tiles Slider 3 -->
            </div>
            

            
          </div>
          <!-- END Content Sliders -->
             <!-- Google Map -->

             


             <div class="row">
                <div class="col-md-6" id="entryProgressChart">
                    <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default  border-b bg-primary-light">
                            <h3 class="block-title">Database Entry Trend</h3>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>

                        </div>
                        <div class="block-content">
                            <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>
                    </div>
          
             </div>
                 </div>

                 <div class="col-md-6" id="actualVsPlanned">
                    <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default  border-b bg-primary-light">
                            <h3 class="block-title">Actual vs Planned</h3>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>

                        </div>
                        <div class="block-content">
                            <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>
                    </div>
          
             </div>
                 </div>


            </div>
             
                <div class="row" id="app">
                    <div class="col-md-12" >
                        <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default  border-b bg-primary-light">
                                <h3 class="block-title">IFAD/MAIL on Map</h3>

                                    <label class="css-control css-control-warning css-switch">
                                        <input type="checkbox" class="css-control-input" :checked="showProvinces ? 'checked' : ''" @change="showProvinces = !showProvinces">
                                        <span class="css-control-indicator"></span><span style="color:white">Provinces</span>
                                    </label>

                               
    
                               
                                    <label class="css-control css-control-warning css-switch">
                                        <input type="checkbox" class="css-control-input" :checked="showDistricts" @change="showDistricts = !showDistricts">
                                        <span class="css-control-indicator"></span><span style="color:white">Districts</span>
                                    </label>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                             
                            </div>
                            <div class="block-content">
                    
                            <gmap-map
                                :center="{lat:33.9391, lng:67.7100}"
                                :zoom="zoom"
                                style="width:100%; height:600px"
                                @click="infoWindowOpened=false; districtInfoWindowOpened=false"
                                @zoom_changed="handleZoomChange"
                                >
                            <gmap-info-window
                            :options="infoWindowOptions"
                            :position="infoWindowPosition"
                            :opened="infoWindowOpened"
                           
                            @closeclick="handleInfoWindowClosed"
                            >
                               <div class="info-window" style="width:300px; padding:15px">
                                   <h2>{{ activeProvince.name }}</h2>
                                   <p style="margin-bottom: 0; font-weight:bold">Districts covered: <span>{{ activeProvince.no_of_districts }}</span></p>
                                   <hr style="margin:0 0 5px 0">
                                   <ol style="padding-left: 20px;margin-top:0; padding-top:0">
                                       <li v-for="district in activeProvince.districts" :key="district.id">{{district.name}} <span style="color:green; font-weight:bold;">({{district.percentage}}%)</span></li>
                                   </ol>
                                   <p>Activities: {{ activeProvince.activity_count }} <span style="color:green">({{activeProvince.percentage}}%)</span></p>
                               </div>
                            </gmap-info-window>
                                <gmap-marker v-if="showProvinces" v-for="province in provinces" :key="province.id" @click="handleMarkerClicked(province)"
                                    :position="getPosition(province)"
                                    :clickable="true"
                                    :draggable="false"
                                    
                                    >
                                </gmap-marker>
        
                                    /Districts
        
                            <gmap-info-window
                            :options="districtInfoWindowOptions"
                            :position="districtInfoWindowPosition"
                            :opened="districtInfoWindowOpened"
                            @closeclick="handleInfoWindowClosed"
                            >
                               <div class="info-window">
                                   <h2>{{ activeDistrict.name }}</h2>
                                    <ul>
                                        <li v-for="(count, project) in activeDistrict.projectActivityCount" :key="'districtProject' + Math.random()" v-if="count>0"> {{project}} : {{ count }}</li>
                                    </ul>
                               </div>
                            </gmap-info-window>
        
                                <gmap-marker v-if="zoom >= 8 && showDistricts" v-for="district in districts" :key="'dist' + district.id" @click="handleDistrictMarkerClicked(district)"
                                :position="getPosition(district)"
                                :clickable="true"
                                :draggable="false"
                                
                                :icon="'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'"
                                
                                
                                >
                            </gmap-marker>
        
        
                            </gmap-map>
                        </div>
              
                 </div>
                     </div>
                </div>
   
         <!-- END Google Map -->




        <div class="row invisible mt-30" data-toggle="appear">
            <!-- Row #3 -->
            <div class="col-md-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default  border-b bg-primary-light">
                        <h3 class="block-title">Recent Progress (Outputs)</h3>
                       
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">#</th>
                                    <th>Activity</th>
                                    <th class="d-none d-sm-table-cell">Province</th>
                                    <th class="">District</th>
                                    <th>Quantity</th>
                                    <th>Entry User</th>
                                    <th>Entry Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1 ?>
                              <?php $__currentLoopData = $progress->orderBy('id','desc')->limit(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $current_progress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td>
                                    <a class="font-w600" href="be_pages_ecom_order.html"><?php echo e($x++); ?></a>
                                </td>
                                <td>
                                   <?php if($current_progress->activity): ?>
                                   <?php echo e($current_progress->activity->name); ?>

                                   <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($current_progress->province): ?>
                                    <?php echo e($current_progress->province->name); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($current_progress->district): ?>
                                    <?php echo e($current_progress->district->name); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo e($current_progress->quantity); ?>

                                </td>
                                  <td><?php echo e($current_progress->user->first_name); ?></td>
                                  <td><?php if($current_progress->created_at->toDateString() == Carbon\Carbon::now()->toDateString()): ?> <?php echo e($current_progress->created_at->diffForHumans()); ?> <?php else: ?> <?php echo e($current_progress->created_at->toDateString()); ?> <?php endif; ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            
            <div class="col-md-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default  border-b bg-primary-light">
                        <h3 class="block-title">Recent Progress (Irrigation Schemes)</h3>
                        <?php 
                            $irrigation_schemes = App\Irrigation::latest()->limit(10)->get();
                        ?>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">#</th>
                                    <th>Scheme</th>
                                    <th>Code</th>
                                    <th class="d-none d-sm-table-cell">Province</th>
                                    <th class="">District</th>
                                    <th>Entry User</th>
                                    <th>Entry Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1 ?>
                              <?php $__currentLoopData = App\Irrigation::orderBy('id','desc')->limit(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $irrigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td>
                                    <a class="font-w600" href="be_pages_ecom_order.html"><?php echo e($x++); ?></a>
                                </td>
                                <td>
                                   <?php if($irrigation->scheme): ?>
                                   <?php echo e($irrigation->scheme->name); ?>

                                   <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($irrigation->scheme): ?>
                                    <?php echo e($irrigation->scheme->code); ?>

                                    <?php endif; ?>
                                 </td>
                                <td>
                                    <?php if($irrigation->province): ?>
                                    <?php echo e($irrigation->province->name); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($irrigation->district): ?>
                                    <?php echo e($irrigation->district->name); ?>

                                    <?php endif; ?>
                                </td>
                               
                                  <td><?php echo e($irrigation->user->first_name); ?></td>
                                  <td><?php if($irrigation->created_at->toDateString() == Carbon\Carbon::now()->toDateString()): ?> <?php echo e($irrigation->created_at->diffForHumans()); ?> <?php else: ?> <?php echo e($current_progress->created_at->toDateString()); ?> <?php endif; ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>











            <!-- END Row #3 -->
        </div>


   
    </div>
    <!-- END Page Content -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>


<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->


<!-- Page JS Plugins -->


<!-- Page JS Code -->



<script src="/js/app.js"></script>
<script>
    $('#entrySummary').click(() => window.open('/entry-summary','_blank'))
</script>

  <!-- Page JS Plugins -->
  <script src="/assets/js/plugins/slick/slick.min.js"></script>

  <!-- Page JS Helpers (Slick Slider plugin) -->
  <script>jQuery(function(){ Codebase.helpers('slick'); });</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
 <!-- Page JS Plugins CSS -->
 <link rel="stylesheet" href="assets/js/plugins/slick/slick.css">
 <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.css">
<link rel="stylesheet" href="/css/map-icons.min.css">
    <style>
        #map {
            height: 100%;
        }

        #entrySummary:hover {
            cursor: pointer !important;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/faisal/Developer/Sites/laravel-sites/clap/resources/views/dashboard.blade.php ENDPATH**/ ?>