<!DOCTYPE html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>The Safetech Solutions Technology Solutions</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="icon" href="{{ asset('') }}assets/images/fav-dv.png">

<!-- CSS
    ============================================ -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/css/vendor/bootstrap.min.css">

<!-- Font Family CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/css/vendor/cerebrisans.css">

<!-- FontAwesome CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/css/vendor/fontawesome-all.min.css">
<link rel="stylesheet" href="{{ asset('') }}assets/css/vendor/linea-icons.css">

<!-- Swiper slider CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/swiper.min.css">

<!-- animate-text CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/animate-text.css">

<!-- Animate CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/animate.min.css">

<!-- Light gallery CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/css/plugins/lightgallery.min.css">

<link rel="stylesheet" href="{{ asset('') }}assets/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('') }}assets/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="{{ asset('') }}assets/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
<link rel="stylesheet" href="{{ asset('') }}assets/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/npm/slick-carousel/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/ajax/libs/animate.css/3.7.2/animate.min.css"/>
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/css/banner-slick.css">
<link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">



<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "kcwuun4283");
</script>
</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->
    <style>
    .header__logo > a img {
        width: 181px !important;
        height: 71px !important;
    /* width: 110px; */
}
</style>

@include('body.header')

<div id="main-wrapper">
     @yield('contents')
</div>





        <!--====================  footer area ====================-->
        @include('body.foooter')
     <!--====================  End of footer area  ====================-->

    </div>

    <!-- form popup start -->
            <div class="form-popup">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto my-auto">
                            <div class="contact-form-service-wrap">
                                <div class="contact-title text-center my-3">
                                    <h5 class="mb-10">Need a hand?</h5>
                                    <p class="text">Reach out to the world’s most reliable IT services.</p>
                                </div>

                                <!-- <form class="contact-form" id="contact-form-2" action="https://whizthemes.com/mail-php/jowel/mitech/php/services-mail.php" method="post"> -->
                                <form class="contact-form" action="https://safetech.in/assets/php/services-mail.php" method="post">
                                    <div class="contact-form__two">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *">
                                            </div>
                                            
                                        </div>
                                        <div class="contact-inner">
                                                <div class="contry">
                                                    <select name="" id="">
                                                        <option value="">+91</option>
                                                        <option value="">+92</option>
                                                        <option value="">+93</option>
                                                    </select>
                                                    <input type="text" name="" id="" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                </div>
                                            </div>
                                        <div class="contact-select">
                                            <div class="form-item contact-inner">
                                                <span class="inquiry">
                                    <select id="Visiting" name="Visiting">
                                        <option disabled selected>Select Department to email</option>
                                        <option value="Your inquiry about">Your inquiry about</option>
                                        <option value="General Information Request">General Information Request</option>
                                        <option value="Partner Relations">Partner Relations</option>
                                        <option value="Careers">Careers</option>
                                        <option value="Software Licencing">Software Licencing</option>
                                    </select>

                                </span>
                                            </div>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need."></textarea>
                                        </div>
                                        <div class="comment-submit-btn text-center">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege-2"></p>
                                        </div>
                                    </div>
                                </form>
                                <div class="close-btn" id="close-btn">
                                     <span>X</span>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- form popup end -->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->


    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="{{ asset('') }}">
                                    <img src="{{ asset('') }}assets/images/logo/logo-dark.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index-2.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                <li><a href="index-processing.html"><span>Processing</span></a></li>
                                <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                <li><a href="index-services.html"><span>Services</span></a></li>
                                <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                                <li><a href="index-modern-it-company.html"><span>Modern IT Company</span></a></li>
                                <li><a href="index-machine-learning.html"><span>Machine Learning</span></a></li>
                                <li><a href="index-software-innovation.html"><span>Software Innovation</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Company</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="about-us-01.html"><span>About us</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                        <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                        <li class="has-children">
                                            <a href="#"><span>Submenu Level Two</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                <li><a href="leadership.html"><span>Leadership</span></a></li>
                                <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                <li><a href="our-history.html"><span>Our history</span></a></li>
                                <li><a href="faqs.html"><span>FAQs</span></a></li>
                                <li><a href="careers.html"><span>Careers</span></a></li>
                                <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">IT solutions</a>
                            <ul class="sub-menu">
                                <li><a href="it-services.html"><span>IT Services</span></a></li>
                                <li><a href="managed-it-service.html"><span>Managed IT Services</span></a></li>
                                <li><a href="industries.html"><span>Industries</span></a></li>
                                <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Elements</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">Element Group 01</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                        <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                        <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                        <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                        <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                        <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                        <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                        <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 02</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-counters.html"><span>Counters</span></a></li>
                                        <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                        <li><a href="element-flexible-image-slider.html"><span>Flexible image slider</span></a></li>
                                        <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                        <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                        <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                        <li><a href="element-lists.html"><span>Lists</span></a></li>
                                        <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 03</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                        <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                        <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                        <li><a href="element-progress-circle.html"><span>Progress Circle</span></a></li>
                                        <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                        <li><a href="element-social-networks.html"><span>Social Networks</span></a></li>
                                        <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                        <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 04</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                        <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                        <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a></li>
                                        <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Case Studies</a>
                            <ul class="sub-menu">
                                <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Blogs</a>
                            <ul class="sub-menu">
                                <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                <li class="has-children">
                                    <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                        <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                        <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->







    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->

    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('') }}assets/js/vendor/modernizr-2.8.3.min.js"></script>
<!-- <script src="https://gist.github.com/codebyangel/c00632037ec58fe764af959bbc543996.js"></script> -->
<!-- jQuery JS -->
<!-- <script src="{{ asset('') }}assets/js/vendor/jquery-3.5.1.min.js"></script> -->
<script src="{{ asset('') }}assets/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="{{ asset('') }}assets/js/vendor/jquery-migrate-3.3.0.min.js"></script> -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>-->

<!-- Bootstrap JS -->
<!-- <script src="{{ asset('') }}assets/js/vendor/bootstrap.min.js"></script> -->
<script src="{{ asset('') }}assets/ajax/libs/bootstrap/5.1.1/js/bootstrap.min.js"></script>

<!-- wow JS -->
<!-- <script src="{{ asset('') }}assets/js/plugins/wow.min.js"></script> -->
<script src="{{ asset('') }}assets/ajax/libs/wow/1.1.2/wow.min.js"></script>

<!-- Swiper Slider JS -->
<!-- <script src="{{ asset('') }}assets/js/plugins/swiper.min.js"></script> -->
<script src="{{ asset('') }}assets/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>

<!-- Light gallery JS -->
<!-- <script src="{{ asset('') }}assets/js/plugins/lightgallery.min.js"></script> -->
<script src="{{ asset('') }}assets/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js"></script>

<!-- Waypoints JS -->
<script src="{{ asset('') }}assets/js/plugins/waypoints.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script> -->

<!-- Counter down JS -->
<script src="{{ asset('') }}assets/js/plugins/countdown.min.js"></script>

<!-- Isotope JS -->
<script src="{{ asset('') }}assets/js/plugins/isotope.min.js"></script>

<!-- Masonry JS -->
<script src="{{ asset('') }}assets/js/plugins/masonry.min.js"></script>

<!-- ImagesLoaded JS -->
<script src="{{ asset('') }}assets/js/plugins/images-loaded.min.js"></script>

<!-- Wavify JS -->
<script src="{{ asset('') }}assets/js/plugins/wavify.js"></script>

<!-- jQuery Wavify JS -->
<script src="{{ asset('') }}assets/js/plugins/jquery.wavify.js"></script>

<!-- circle progress JS -->
<script src="{{ asset('') }}assets/js/plugins/circle-progress.min.js"></script>

<!-- counterup JS -->
<script src="{{ asset('') }}assets/js/plugins/counterup.min.js"></script>

<!-- animation text JS -->
<script src="{{ asset('') }}assets/js/plugins/animation-text.min.js"></script>

<!-- Vivus JS -->
<script src="{{ asset('') }}assets/js/plugins/vivus.min.js"></script>

<!-- Some plugins JS -->
<script src="{{ asset('') }}assets/js/plugins/some-plugins.js"></script>


<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<!--         
<script src="{{ asset('') }}assets/js/plugins/plugins.min.js"></script> 
-->
<script type="text/javascript" src="{{ asset('') }}assets/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}assets/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/npm/slick-carousel/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/codepen/slider/slick-animation.min.js"></script>
<!-- Main JS -->
<script src="{{ asset('') }}assets/js/main.js"></script>    <script>
        $('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});
    </script>
    
    
    <script>
        /*
        ** With Slick Slider Plugin : https://github.com/marvinhuebner/slick-animation
        ** And Slick Animation Plugin : https://github.com/marvinhuebner/slick-animation
        */
        
        // Init slick slider + animation
        $('.slider').slick({
          autoplay: true,
          speed: 800,
          lazyLoad: 'progressive',
          arrows: true,
          dots: false,
        	prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
        	nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
        }).slickAnimation();
        
        
        
        $('.slick-nav').on('click touch', function(e) {
        
            e.preventDefault();
        
            let arrow = $(this);
        
            if(!arrow.hasClass('animate')) {
                arrow.addClass('animate');
                setTimeout(() => {
                    arrow.removeClass('animate');
                }, 1600);
            }
        
        });
    </script>

</body>

</html>