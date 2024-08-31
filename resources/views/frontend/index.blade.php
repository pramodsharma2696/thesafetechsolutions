@extends('master')
@section('contents')
<div class="site-wrapper-reveal">
            
            <section class="banner__slider">
            	<div class="slider stick-dots">
            		<div class="slide">
            			<div class="slide__img"> <img src="#" alt="" data-lazy="{{ asset('') }}assets/images/home-banner/slide-1.jpg" class="full-image animated" data-animation-in="zoomInImage" /> </div>
            			<div class="slide__content ">
            				<div class="slide__content--headings text-center">
            					<p class="animated top-title" data-animation-in="fadeInUp" data-delay-in="0.3">Welcome to The Safetech Solutions</p>
            					<h2 class="animated title" data-animation-in="fadeInUp">Software Solutions, Simplified.</h2>
            					<!--<button class="btn-light btn button-custom animated" data-animation-in="fadeInUp">Our menu</button>-->
            				</div>
            			</div>
            		</div>
            		<div class="slide">
            			<div class="slide__img"> <img src="#" alt="" data-lazy="{{ asset('') }}assets/images/home-banner/slide-2.jpg" class="full-image animated" data-animation-in="zoomOutImage" /> </div>
            			<div class="slide__content slide__content__right">
            				<div class="slide__content--headings text-right">
            					<!--<p class="animated top-title" data-animation-in="fadeInLeft" data-delay-in="0.2">Wish you have good food at our restaurant</p>-->
            					<h2 class="animated title" data-animation-in="fadeInLeft">Where Innovation Meets Implementation.</h2>
            					<!--<button class="btn-success btn button-custom animated text-black" data-animation-in="fadeInUp">Order Now</button>-->
            				</div>
            			</div>
            		</div>
            		<div class="slide">
            			<div class="slide__img"> <img src="#" alt="" data-lazy="{{ asset('') }}assets/images/home-banner/slide-3.jpg" class="full-image animated" data-animation-in="zoomInImage" /> </div>
            			<div class="slide__content slide__content__left">
            				<div class="slide__content--headings text-left">
            					<!--<p class="animated top-title" data-animation-in="fadeInRight" data-delay-in="0.2">Purchase today. just $76</p>-->
            					<h2 class="animated title" data-animation-in="fadeInRight">Building Bridges in the Digital World.</h2>
            					<!--<button class="btn-light btn button-custom animated" data-animation-in="fadeInUp">Today's Menu</button>-->
            				</div>
            			</div>
            		</div>
            	</div>
            	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            		<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
            			<circle r="20" cy="22" cx="22" id="test">
            		</symbol>
            	</svg>
            </section>
            
            <!--============ Infotechno Hero End ============-->
            <!--=========== fun fact Wrapper Start ==========-->
            <!-- <div class="fun-fact-wrapper bg-theme-three" style="padding-top:20px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center" style="margin-bottom:20px;">
                            <div class="fun-fact__count"><span class="counter">22</span><span>+</span></div>
                                <h6 class="fun-fact__text">Industries Catered</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center" style="margin-bottom:20px;">
                            <div class="fun-fact__count"><span class="counter">7</span><span> Cr+</span></div>
                                <h6 class="fun-fact__text">Account Reached</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center" style="margin-bottom:20px;">
                            <div class="fun-fact__count"><span class="counter">150</span><span>+</span></div>
                                <h6 class="fun-fact__text">Projects Delivered</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center" style="margin-bottom:20px;">
                                <div class="fun-fact__count"><span class="counter">2500</span><span>Cr+</span></div>
                                <h6 class="fun-fact__text">Revenue Handled</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--=========== fun fact Wrapper End ==========-->

            <!--=========== About Company Area Start ==========-->
            <div class="machine-learning-about-company-area machine-learning-about-bg pb-3 pt-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-left mb-3">
                                <h4 class="section-sub-title mb-2">ABOUT COMPANY</h4>
                                <h5 class="">Everyone in your <span class="text-color-primary">organization</span>
                                can make an impact with <span class="text-color-primary">Technology</span>
                                </h5>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="image-inner-video-section">
                                <div class="main-video-box">
                                    <a href="https://www.youtube.com/embed/Q-5IxmTb8PA?si=On7oaY0dQ-NH167o" class="video-link" data-fancybox="gallery">
                                        <div class="single-popup-wrap">
                                            <img class="img-fluid border-radus-5" src="{{ asset('') }}assets/images/banners/n-popup.jpg" alt="">
                                            <div class="ht-popup-video video-button">
                                                <div class="video-mark">
                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                </div>
                                                <div class="video-button__two">
                                                    <div class="video-play">
                                                        <span class="video-play-icon"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto">
                            <div class="machine-learning-about-content">
                                <div class="section-title mb-20">
                                    <h4>Innovate within your existing workflow</h4>
                                    <p class="dec-text mt-20" align="justify">The Safetech Solutions is a web design and development company in Mumbai, India that prioritizes client satisfaction, innovation, and a profitable return on investment (Money making business models). We work at the nexus of functional and technological skills to support our clients' growth and create cutting-edge business strategies.</p>
                                    <div class="button-box mt-30">
                                        <a href="javascript:void(0)" class="ht-btn ht-btn-md contact-us">Talk to a consultant</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========== About Company Area End ==========-->

            <!--=========== Machine Learning Service Area Start ==========-->
            <div class="machine-learning-service-area machine-learning-service-bg pb-4 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center">
                                <h6 class="section-sub-title mb-2 mt-2">WHY CHOOSE US</h6>
                                <h5 class="heading">Tech <span class="text-color-primary">IT</span> Easy</h5>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feature-images__five">
                                <div class="row">

                                    <div class="col-lg-3 col-md-6 wow move-up mb-4">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-05">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <div class="default-image">
                                                        <img class="img-fulid" src="{{ asset('') }}assets/images/icons/stability.png" alt="Stability">
                                                    </div>
                                                    <div class="hover-images">
                                                        <img class="img-fulid" src="{{ asset('') }}assets/images/icons/stability-hover.png" alt="Stability">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Stability</h6>
                                                    <div class="text text-black">We have resisted our business and solution throughout all odd situations, we have a stable business model.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                    <div class="col-lg-3 col-md-6 wow move-up mb-4">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-05">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <div class="default-image">
                                                        <img class="img-fulid" src="{{ asset('') }}assets/images/icons/domain-expertise.png" alt="Domains Expertise">
                                                    </div>
                                                    <div class="hover-images">
                                                        <img class="img-fulid" src="{{ asset('') }}assets/images/icons/domain-expertise-hover.png" alt="Domains Expertise">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Domains Expertise</h6>
                                                    <div class="text text-black">In the last many years we have achieved the milestone by achieving rich experience in different industries.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                    <div class="col-lg-3 col-md-6 wow move-up mb-4">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-05">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <div class="default-image">
                                                        <img class="img-fulid" src="{{ asset('') }}assets/images/icons/timeliness.png" alt="Timeliness">
                                                    </div>
                                                    <div class="hover-images">
                                                        <img class="img-fulid" src="{{ asset('') }}assets/images/icons/timeliness-hover.png" alt="Timeliness">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Timeliness</h6>
                                                    <div class="text text-black">Since we always follow systematic work culture, we always follow the timeliness in every step.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-3 col-md-6 wow move-up mb-4">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-05">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <div class="default-image">
                                                        <img class="img-fulid" src="{{ asset('') }}assets/images/icons/standardization.png" alt="Standardization">
                                                    </div>
                                                    <div class="hover-images">
                                                        <img class="img-fulid" src="{{ asset('') }}assets/images/icons/standardization-hover.png" alt="Standardization">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Standardization</h6>
                                                    <div class="text text-black">In due course of time The Safetech Solutions has started complying with different ways and means to standardize the operations.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="button-box mt-30 text-center">
                                        <a href="why-choose-us.html" class="ht-btn ht-btn-md">Know More</a>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--=========== Machine Learning Service Area End ==========-->

            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer machine-learning-contact-us-bg section-space--ptb_60">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="conact-us-wrap-three">
                                <h6 class="mb-3 section-sub-title text-white">OUR SOLUTION</h6>
                                <h4 class="heading text-white"><span class="text-color-primary">Unlock</span> the full potential of your customer relationships</h4>
                            </div>
                            <div class="contact-info-two mt-40 text-left">
                                <div class="contact-us-button mt-20">
                                    <a href="tel:9082107333" class="btn btn--secondary">Contact us</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!-- ============ Team Member Wrapper Start =============== -->
            <div class="team-member-wrapper section-space--pt_40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-title section-space--mb_60">
                                <h3 class="heading">Our <span class="text-color-primary">experience </span> industry</h3>
                                <p class="text mt-30 text-black">“Experience is the ultimate currency in today's world, and the experience industry is where it's at. From creation to managing, the experiences we create and share are what connect us and enrich our lives."</p>

                                <div class="sider-title-button-box mt-30">
                                    <a href="cases.html" class="btn-text font-weight--bold small-mt__20">View Industry List <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 ht-team-member-style-one">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 wow move-up text-center">
                                    <div class="grid-item">
                                        <a href="manufacturing-industry.html">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="{{ asset('') }}assets/images/icons/manufacturing.png" alt="" width="80px">
                                            </div>
                                            <div class="team-info text-left">
                                                <h6 class="name">Manufacturing </h6>
                                                <!-- <div class="position">Marketing & Sales</div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up text-center">
                                    <div class="grid-item">
                                        <a href="service-industry.html">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="{{ asset('') }}assets/images/icons/service-industry.png" alt="" width="80px">
                                            </div>
                                            <div class="team-info ">
                                                <h6 class="name">Services</h6>
                                                <!-- <div class="position">Inventory & CRM</div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up text-center">
                                    <div class="grid-item">
                                        <a href="bfsi.html">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="{{ asset('') }}assets/images/icons/bfsi.png" alt="" width="80px">
                                            </div>
                                            <div class="team-info ">
                                                <h6 class="name">BFSI</h6>
                                                <!-- <div class="position">Fintech App</div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up text-center">
                                    <div class="grid-item">
                                        <a href="trade-and-ecommerce-industry.html">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="{{ asset('') }}assets/images/icons/trade-ecommerce-industry.png" alt="Ecommerce" width="80px">
                                            </div>
                                            <div class="team-info ">
                                                <h6 class="name">Ecommerce</h6>
                                                <!-- <div class="position">Doctors Appointment & Care Taker Mgt</div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 ht-team-member-style-one">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 wow move-up text-center">
                                    <div class="grid-item">
                                        <a href="real-estate.html">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="{{ asset('') }}assets/images/icons/real-estate.png" alt="" width="80px">
                                            </div>
                                            <div class="team-info ">
                                                <h6 class="name">Real Estate </h6>
                                                <!-- <div class="position">Marketing & Sales</div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up text-center">
                                    <div class="grid-item">
                                        <a href="travel-and-tourism.html">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="{{ asset('') }}assets/images/icons/travel-and-tourism.png" alt="" width="80px">
                                            </div>
                                            <div class="team-info ">
                                                <h6 class="name">Travel & Tourism</h6>
                                                <!-- <div class="position">Booking & CRM</div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up text-center">
                                    <div class="grid-item">
                                        <a href="government.html">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="{{ asset('') }}assets/images/icons/government.png" alt="Government" width="80px">
                                            </div>
                                            <div class="team-info ">
                                                <h6 class="name">Government</h6>
                                                <!-- <div class="position">Doorstep Booking & CRM</div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up text-center">
                                    <div class="grid-item">
                                        <a href="education.html">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="{{ asset('') }}assets/images/icons/education.png" alt="Education" width="80px">
                                            </div>
                                            <div class="team-info ">
                                                <h6 class="name">Education</h6>
                                                <!-- <div class="position">Franchise & POS System</div> -->
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============ Team Member Wrapper End =============== -->
            <!--============ Contact Us Area Start =================-->
            <div class="contact-us-area service-contact-bg section-space--ptb_30">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12">
                            <div class="contact-info sytle-one service-contact text-left">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="contact-info-title-wrap text-center">
                                            <h3 class="heading text-white">4.6/5.0</h3>
                                            <div class="ht-star-rating lg-style">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-half-alt"></span>
                                            </div>
                                            <p class="sub-text text-white">by 150+ clients</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 my-auto">
                                        <div class="contact-list-item">
                                            <a href="tel:9082107333" class="single-contact-list">
                                                <div class="content-wrap">
                                                    <div class="content">
                                                        <div class="icon text-white">
                                                            <span class="fal fa-phone"></span>
                                                        </div>
                                                        <div class="main-content">
                                                            <h6 class="heading text-white">Call for advice now!</h6>
                                                            <h6 class="name text-white">+91 9082107333</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 my-auto">
                                        <div class="contact-list-item">
                                            <a href="mailto:www.thesafetechsolutions.com" class="single-contact-list">
                                                <div class="content-wrap">
                                                    <div class="content">
                                                        <div class="icon text-white">
                                                            <span class="fal fa-envelope"></span>
                                                        </div>
                                                        <div class="main-content">
                                                            <h6 class="heading text-white">Say hello</h6>
                                                            <h6 class="name text-white">www.thesafetechsolutions.com</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 my-auto">
                                        <div class="contact-info-two text-center">
                                            <div class="contact-us-button">
                                                <a href="javascript:void(0)" class="btn btn--secondary contact-us" id="contact-us">Contact us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                

                            </div>
                        </div>

                        <!-- <div class="col-lg-7 ms-auto">
                            <div class="contact-form-service-wrap">
                                <div class="contact-title text-center section-space--mb_30">
                                    <h5 class="mb-10">Need a hand?</h5>
                                    <p class="text">Reach out to the world’s most reliable IT services.</p>
                                </div>

                                <form class="contact-form" id="contact-form-2" action="https://whizthemes.com/mail-php/jowel/mitech/php/services-mail.php" method="post">
                                <form class="contact-form" id="contact-form-2" action="assets/php/services-mail.php" method="post">
                                    <div class="contact-form__two">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *">
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
                                        <div class="comment-submit-btn">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege-2"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>

            
                        
            <!--============ Contact Us Area End =================-->
            <!--===========  Projects wrapper Start =============-->
            <!-- <div class="projects-wrapper machine-learning-project-bg section-space--ptb_30">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_20">
                                <h6 class="section-sub-title mb-1">Case studies</h6>
                                <h5 class="heading">Our projects make us proud</span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="projects-wrap style-01 wow move-up">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{ asset('') }}assets/images/projects/case-study-01-480x298.webp" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="heading">Healthy Meal Services</h6>
                                        <div class="text">At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.
                                        </div>
                                        <div class="box-projects-arrow">
                                            <span class="button-text">View case study</span>
                                            <i class="fa fa-long-arrow-right ml-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="projects-wrap style-01 wow move-up">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{ asset('') }}assets/images/projects/case-study-01-480x298.webp" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="heading">Healthy Meal Services</h6>
                                        <div class="text">At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.
                                        </div>
                                        <div class="box-projects-arrow">
                                            <span class="button-text">View case study</span>
                                            <i class="fa fa-long-arrow-right ml-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="projects-wrap style-01 wow move-up">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{ asset('') }}assets/images/projects/case-study-01-480x298.webp" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="heading">Health care</h6>
                                        <div class="text">At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.
                                        </div>
                                        <div class="box-projects-arrow">
                                            <span class="button-text">View case study</span>
                                            <i class="fa fa-long-arrow-right ml-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="projects-wrap style-01 wow move-up">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{ asset('') }}assets/images/projects/case-study-01-480x298.webp" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="heading">Real Estate</h6>
                                        <div class="text">At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.
                                        </div>
                                        <div class="box-projects-arrow">
                                            <span class="button-text">View case study</span>
                                            <i class="fa fa-long-arrow-right ml-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--===========  Projects wrapper End =============-->
            <!--===========  Projects wrapper Start =============-->
            <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index-3.html">
                                    <img src="{{ asset('') }}assets/img/logo/logo-dv-full-b.png" class="img-fluid" alt="">
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
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="has-children">
                            <a href="#">Company</a>
                            <ul class="sub-menu">
                                <li><a href="#"><span>About Us</span></a></li>
                                <li><a href="#"><span>Leadership Team</span></a></li>
                                <li><a href="#"><span>Technology Stack</span></a></li>
                                <li><a href="#"><span>Why choose us</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/services') }}"><span>Our Services</span></a></li>
                                <li><a href="{{ url('/product-services') }}"><span>Product Services</span></a></li>
                                <li><a href="{{ url('/financial-technology-setup') }}"><span>Financial Technology Setup</span></a></li>                            
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Solutions</a>
                            <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">Web Development</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/cmswebsite')}}"><span class="text-black">CMS Website</span></a></li>
                                        <li><a href="{{ url('/webportals')}}"><span class="text-black">Web Portals</span></a></li>
                                        <li><a href="{{ url('/ecommerce-website')}}"><span class="text-black">Ecommerce Website</span></a></li>
                                        <li><a href="{{ url('/inventory-billing')}}"><span class="text-black">Inventory & Billing Software</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Mobile App Development</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/ecommerce-mobile-app')}}"><span class="text-black">E-Commerce Mobile App</span></a></li>
                                        <li><a href="android-mobile-app.html"><span class="text-black">Android Mobile App</span></a></li>
                                        <li><a href="ios-mobile-app.html"><span class="text-black">IOS Mobile App</span></a></li>
                                        <li><a href="hybrid-mobile-app.html"><span class="text-black">Hybrid Mobile App</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Integrations</a>
                                    <ul class="sub-menu">
                                        <li><a href="ecommerce-integration-2.html"><span class="text-black">Ecommerce Integration</span></a></li>
                                        <li><a href="third-party-integration.html"><span class="text-black">Third Party Integration</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">White Lable Projects</a>
                                    <ul class="sub-menu">
                                        <li><a href="offshore-development-centre.html"><span class="text-black">Offshore Development Centre</span></a></li>
                                        <li><a href="staffing.html"><span class="text-black">Staffing</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li><a href="cases-2.html">Cases</a></li>
                        <li class="has-children">
                            <a href="javascript:void(0)">Resource</a>
                            <ul class="sub-menu">
                                <li><a href="#"><span>Portfolio</span></a></li>
                                <li><a href="#"><span>Careers</span></a></li>
                                <li><a href="faq.html"><span>FAQs</span></a></li>
                                <li><a href="#"><span>Blog</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="client-access client-access-mobile text-center">
                            <a href="login.html" target="_blank">Client Access</a>
                        </div>
                </nav>
            </div>
        </div>
    </div>            <!--===========  Projects wrapper End =============-->
            <!--=========== Testimonials Area Start =============-->
            <div class="demo">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mt_20">
                                <!-- <h6 class="section-sub-title mb-1">Case studies</h6> -->
                                <h5 class="heading">Testimonials</h5>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                        <div class="col-md-8 mx-auto pb-3 pt-1">
                            <div id="testimonial-slider" class="owl-carousel">
                                <div class="testimonial">
                                    <p class="description">
                                    "The Safetech Solutions is One of the best companies in technology development I have ever worked with. I really appreciate their project handling skills."
                                    </p>
                                    <h3 class="title">Mr. Sumeet, Adfuturistic</h3>
                                    <div class="pic">
                                        <img src="{{ asset('') }}assets/images/testimonial/client1.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <p class="description">
                                    "The Safetech Solutions is really good company, we appreciate them for honesty and fair working style, along with great customer support policy."
                                    </p>
                                    <h3 class="title">Sunshine Couriers</h3>
                                    <div class="pic">
                                        <img src="{{ asset('') }}assets/images/testimonial/client2.png" alt="">
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <p class="description">
                                    "I am really very happy to share my work experience with The Safetech Solutions Technology Solutions Pvt Ltd. is fantastic, the team culture is fantastic with in time support mechanism placed very well."
                                    </p>
                                    <h3 class="title">Social Title</h3>
                                    <div class="pic">
                                        <img src="{{ asset('') }}assets/images/testimonial/client3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!--=========== Testimonials Area End =============-->


            <!--====================  brand logo slider area ====================-->
            <div class="brand-logo-slider-area section-space--ptb_60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- brand logo slider -->
                            <div class="brand-logo-slider__container-area">
                                <div class="swiper-container brand-logo-slider__container">
                                    <div class="swiper-wrapper brand-logo-slider__one">
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/8-hour-logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/8-hour-logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/arghyam-care-logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/arghyam-care-logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/CA-Master.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/CA-Master.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/CIO-LOGO.html" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/CIO-LOGO.html" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/Cocoon.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/Cocoon.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/easy-now-logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/easy-now-logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/e-link-software-tech-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/e-link-software-tech-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/gadre_associates-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/gadre_associates-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/Galleon.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/Galleon.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/Hi-Tech-enterprises-logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/Hi-Tech-enterprises-logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/Integrated-Logistics-logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/Integrated-Logistics-logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/jet-freight-logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/jet-freight-logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/jsw-foundation-logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/jsw-foundation-logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/krishi-farm2kitchen.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/krishi-farm2kitchen.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/laser-telesystem-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/laser-telesystem-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/Magnum-Logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/Magnum-Logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/mumbai-insurance-institute-fort-mumbai-institutes-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/mumbai-insurance-institute-fort-mumbai-institutes-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/only-parathas-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/only-parathas-logo.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/prangan-01.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/prangan-01.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/socialtitli-marketing-pvt-ltd-company-profile.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/socialtitli-marketing-pvt-ltd-company-profile.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/SSIS-Infotech-Logo.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/SSIS-Infotech-Logo.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/Star-Group-Logo.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/Star-Group-Logo.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/Sunshine-Couriers.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/Sunshine-Couriers.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/v2s-Tech.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/v2s-Tech.jpg" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/WINIFIN.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/WINIFIN.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ asset('') }}assets/images/brand/WTC.html" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ asset('') }}assets/images/brand/WTC.html" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  End of brand logo slider area  ====================-->

@endsection