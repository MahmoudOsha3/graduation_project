<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('Website/img/favicon.png')); ?>">
    <!-- Place favicon.ico in the root directory -->


    
    <link rel="stylesheet" href="<?php echo e(asset('Website/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Website/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Website/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Website/css/slicknav.css')); ?>">


    <?php if(app()->getLocale() == 'ar'): ?>
        <!-- CSS here -->
        
        
        <!-- Arbic -->
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/magnific_rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/icons_rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/nice_rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/fraction_rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/gijo_rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/animate_rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/style_rtl.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/slinknave_rtl.css')); ?>">
    <?php else: ?>
    <!-- CSS here -->
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/magnific-popup.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/themify-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/nice-select.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/flaticon.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/gijgo.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/animate.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('Website/css/style.css')); ?>">
    <?php endif; ?>
    <?php echo $__env->yieldContent('css'); ?>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<?php
    $lang = app()->getLocale() ;
?>
<body>
        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container">
                        <?php
                            $dir = $lang == 'ar' ? 'rtl' : 'ltr' ;
                        ?>
                        <div class="row align-items-center" style="direction:<?php echo e($dir); ?>">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <img src="<?php echo e(asset('images/website/logo.jpg')); ?>" width="40px"  alt="logo">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="<?php echo e(route('site.home')); ?>"><?php echo app('translator')->get('website.home'); ?></a></li>
                                            <li><a href="<?php echo e(route('site.department')); ?>"><?php echo app('translator')->get('website.deparments'); ?></a></li>
                                            <li><a href="#"><?php echo app('translator')->get('website.language'); ?> <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                                            <?php echo e($properties['native']); ?>

                                                        </a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo e(route('site.doctors')); ?>"><?php echo app('translator')->get('website.doctors'); ?></a></li>
                                            <li style="font-size: 12px"><a href="<?php echo e(route('chatbot.index')); ?>"><?php echo app('translator')->get('site.chatbot'); ?></a></li>
                                            <li><a href="<?php echo e(route('website.logout')); ?>"><?php echo app('translator')->get('site.logout'); ?></a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    
                                        <div class="thumb">
                                            <?php $user = auth()->user() ?>
                                            <a href="<?php echo e(route('user-profile')); ?>">
                                                <div class="row">
                                                    <img src="<?php echo e(asset('images/'."$user->image")); ?>" style="width: 40px;height:40px;border-radius:50%">
                                                    <h5 style="margin-top: 16px;margin-left:4px;margin-right:4px"><?php echo e(auth()->user()->name); ?></h4>
                                                </div>
                                            </a>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->

        
        <?php echo $__env->yieldContent('content'); ?>
        

        <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                    Firmament morning sixth subdue darkness
                                    creeping gathered divide.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Departments
                            </h3>
                            <ul>
                                <li><a href="#">Eye Care</a></li>
                                <li><a href="#">Skin Care</a></li>
                                <li><a href="#">Pathology</a></li>
                                <li><a href="#">Medicine</a></li>
                                <li><a href="#">Dental</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#"> Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Address
                            </h3>
                            <p>
                                200, D-block, Green lane USA <br>
                                +10 367 467 8934 <br>
                                docmed@contact.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- footer end  -->
</body>

    <!-- JS here -->
    <script src="<?php echo e(asset('Website/js/vendor/modernizr-3.5.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <script src=" <?php echo e(asset('Website/js/popper.min.jss')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/ajax-form.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/scrollIt.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/jquery.slicknav.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/gijgo.min.js')); ?>"></script>
    <!--contact js-->
    <script src="<?php echo e(asset('Website/js/contact.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/jquery.form.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Website/js/mail-script.js')); ?>"></script>

    <script src="<?php echo e(asset('Website/js/main.js')); ?>"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
<?php echo $__env->yieldContent('js'); ?>

</html>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/layouts/website/app.blade.php ENDPATH**/ ?>