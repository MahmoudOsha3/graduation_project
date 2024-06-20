<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Website/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->


    {{-- Css arabic --}}
    <link rel="stylesheet" href="{{ asset('Website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Website/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Website/css/slicknav.css') }}">


    @if (app()->getLocale() == 'ar')
        <!-- CSS here -->
        {{-- <link rel="stylesheet" href="{{ asset('Website/css/bootstrap.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('Website/css/style.css') }}"> --}}
        <!-- Arbic -->
        <link rel="stylesheet" href="{{ asset('Website/css/rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/magnific_rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/icons_rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/nice_rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/fraction_rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/gijo_rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/animate_rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/style_rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/slinknave_rtl.css') }}">
    @else
    <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('Website/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/gijgo.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('Website/css/style.css') }}">
    @endif
    @yield('css')
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

@php
    $lang = app()->getLocale() ;
@endphp
<body>
        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container">
                        @php
                            $dir = $lang == 'ar' ? 'rtl' : 'ltr' ;
                        @endphp
                        <div class="row align-items-center" style="direction:{{ $dir }}">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <img src="{{ asset('images/website/logo.jpg') }}" width="40px"  alt="logo">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="{{ route('site.home') }}">@lang('website.home')</a></li>
                                            <li><a href="{{ route('site.department') }}">@lang('website.deparments')</a></li>
                                            <li><a href="#">@lang('website.language') <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('site.doctors') }}">@lang('website.doctors')</a></li>
                                            <li style="font-size: 12px"><a href="{{ route('chatbot.index') }}">@lang('site.chatbot')</a></li>
                                            <li><a href="{{ route('website.logout') }}">@lang('site.logout')</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    {{-- @auth('admin') --}}
                                        <div class="thumb">
                                            <?php $user = auth()->user() ?>
                                            <a href="{{ route('user-profile') }}">
                                                <div class="row">
                                                    <img src="{{ asset('images/'."$user->image") }}" style="width: 40px;height:40px;border-radius:50%">
                                                    <h5 style="margin-top: 16px;margin-left:4px;margin-right:4px">{{ auth()->user()->name }}</h4>
                                                </div>
                                            </a>
                                        </div>
                                    {{-- @endauth --}}
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

        {{-- start content --}}
        @yield('content')
        {{-- end content --}}

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
    <script src="{{ asset('Website/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('Website/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src=" {{ asset('Website/js/popper.min.jss') }}"></script>
    <script src="{{ asset('Website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Website/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Website/js/ajax-form.js') }}"></script>
    <script src="{{ asset('Website/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('Website/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('Website/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('Website/js/scrollIt.js') }}"></script>
    <script src="{{ asset('Website/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('Website/js/wow.min.js') }}"></script>
    <script src="{{ asset('Website/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('Website/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('Website/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Website/js/plugins.js') }}"></script>
    <script src="{{ asset('Website/js/gijgo.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('Website/js/contact.js') }}"></script>
    <script src="{{ asset('Website/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('Website/js/jquery.form.js') }}"></script>
    <script src="{{ asset('Website/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('Website/js/mail-script.js') }}"></script>

    <script src="{{ asset('Website/js/main.js') }}"></script>
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
@yield('js')

</html>
