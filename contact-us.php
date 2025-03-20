<!DOCTYPE html>

<html class="no-js" lang="zxx" dir="ltr">



<?php include('include/head.php') ?>



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

    <div class="header-area header-area--default">



        <!-- Header Top Wrap Start -->

        <!-- <div class="header-top-wrap border-bottom">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <p class="text-center top-message"><a href="#">Now Hiring:</a> Are you a driven and motivated 1st Line IT Support Engineer?</p>

                    </div>

                </div>

            </div>

        </div> -->

        <!-- Header Top Wrap End -->



        <!-- Header Bottom Wrap Start -->

        <?php include('include/header.php') ?>

        <!-- Header Bottom Wrap End -->



    </div>

    <!--====================  End of header area  ====================-->



    <!-- breadcrumb-area start -->

    <div class="breadcrumb-area breadcrumb-contact">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="breadcrumb_box text-center">

                        <h2 class="breadcrumb-title" style="color:white;">Contact Us</h2>

                        <!-- breadcrumb-list start -->

                        <ul class="breadcrumb-list">

                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                            <li class="breadcrumb-item active">Contact Us</li>

                        </ul>

                        <!-- breadcrumb-list end -->

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one mb-30">
                                <h3 class="heading">To make requests for <br>further information Also, <br><span class="text-color-primary">Contact Us</span> via our social media channels. </h3>
                                <div class="sub-heading">We just need a couple of hours! <br> No more than 2 hours since receiving your raised ticket.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">

                                <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                                <form id="contact-form" action="https://htmldemo.net/mitech/assets/php/mail.php" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="First Name" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Last Name " required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Enter Your Email" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_mobile" type="email" placeholder="Enter Your Mobile No" required>
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_subject" type="text" placeholder="Subject" required>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need." required></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->



            <?php include("include/testimonial.php") ?>


            <!--========== Call to Action Area Start ============-->
            <?php include("lets-talk.php") ?>
            <!--========== Call to Action Area End ============-->




        </div>


    </div>


        </div>


        <?php include('include/footer.php') ?>

        <!--====================  End of footer area  ====================-->

    </div>

    

    <!--====================  scroll top ====================-->

    <a href="#" class="scroll-top" id="scroll-top">

        <i class="arrow-top fas fa-chevron-up"></i>

        <i class="arrow-bottom fas fa-chevron-up"></i>

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

                                <a href="index-2.html">

                                    <img src="assets/images/logo/logo-dark.webp" class="img-fluid" alt="">

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

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>



    <!-- jQuery JS -->

    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>



    <!-- Bootstrap JS -->

    <script src="assets/js/vendor/bootstrap.min.js"></script>



    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->



    <script src="assets/js/plugins/plugins.min.js"></script>



    <!-- Main JS -->

    <script src="assets/js/main.js"></script>



</body>





<!-- Mirrored from htmldemo.net/Paydex Solutions/about-us-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Oct 2023 04:44:21 GMT -->

</html>