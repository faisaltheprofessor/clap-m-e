
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>CLAP - Login</title>
    <link rel="apple-touch-icon" href="/assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/assets/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/assets/css/style.css">
    <!-- END: Custom CSS-->

    <style>

.custom-login-button{
            /* opacity: 0.8; */
        }

        .custom-login-button:hover{
            /* text-decoration: underline !important;
            box-shadow: none;
            opacity: 1; */

            box-shadow: none;
        }

        .is-invalid-custom {
            outline: 1px solid red;
        }

        .is-invalid-custom::::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: red;
  opacity: 1; /* Firefox */
}
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                 <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                     <a href="/"><img src="/assets/app-assets/images/pages/login.png" alt="branding logo"></a>
                                </div>
                            </div>
                            <div class="row m-0" style="width:100%">

                                <div class="col-lg-12 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2" style="width:100%">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Welcome back, please login to your account.</p>
                                        <div class="card-content">
                                            <?php if($errors->any()): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                            <div class="card-body pt-1">
                                                <form method="POST" action="<?php echo e(route('login')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" placeholder="email@example.com" required autocomplete="off" value="<?php echo e(old('email')); ?>">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="email">Email</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" id="password" name="password" placeholder="Password" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="password">Password</label>
                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                            </fieldset>
                                                          
                                                        </div>
                                                       
                                                      

                                                  
                                                        <div class="text-right"><a href="#auth-forgot-password.html" class="card-link">Forgot Password?</a></div>
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-primary float-right btn-inline rounded-0 custom-login-button">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                                
                                            </div>
                                            <div class="footer-btn d-inline">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/assets/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/assets/app-assets/js/core/app-menu.js"></script>
    <script src="/assets/app-assets/js/core/app.js"></script>
    <script src="/assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>


    // $('#email').on('input', function(){
    //     if($('#password').val() != undefined || $('#password').val() != null  )
    //     $('button').removeAttr('disabled');
    // });
</script>
</html>
<?php /**PATH /Users/faisal/Dropbox/My Mac (MacBook-Pro)/Documents/Sites/clap/resources/views/auth/login.blade.php ENDPATH**/ ?>