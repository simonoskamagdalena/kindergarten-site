@extends('app')

@section('title')
<title>PrimeKidz | Contact</title>
@endsection

@section('nav')
    @include('navigation.navContact')
@endsection              
          
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky">Contact Us</h1>
   
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="intro-text text-center">
                <h2>Get in touch with us</h2>
                <h4>For any kind of information you need ...</h4>
                <div class="anim-icon"><span class="icon icon-star"></span></div>
            </div>

            <div class="row clearfix">

                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Send us Message</h2>
                        <!-- <p>Elit eiusmod tempor dunty aliqua uas enim sed veniam tempore quised ipsum nostrud  amet consecteur adipisicing elit sedo eiusmod tempor incididunt.</p> -->
                    </div>

                    <div class="contact-form">
                        <!--Contact Form-->
                        <form method="post" action="http://t.commonsupport.com/prime-kidz/sendemail.php" id="contact-form" novalidate>
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Full Name *" required="">
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email address *" required="">
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button type="submit" class="theme-btn btn-style-one">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <ul class="contact-info-list">
                            <li>
                                <div class="title-box"><i class="flaticon-map-marker-1 text-parrot"></i>Location</div>
                                <div class="info"><p>34 High Street, Blazfield Ave, <br> FL 95403  -  USA</p></div>
                            </li>
                            <li class="active">
                                <div class="title-box"><i class="flaticon-phone-auricular-with-high-volume text-sky"></i>Call Us </div>
                                <div class="info"><p>Support:  + 08 645 280 947 <br> Inquiry:  + 08 645 290 948</p></div>
                            </li>
                            <li>
                                <div class="title-box"><i class="flaticon-black text-orange"></i>Email</div>
                                <div class="info"><p>admin@primekidz.org </p></div>
                            </li>
                        </ul>

                        <div class="social-icons">
                            <ul class="social-icon-two">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact Page Section -->

    <!-- Subscribe Section -->
    <section class="subscribe-section" style="background-image: url(images/background/5.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-7 col-sm-12 col-xs-12">
                    <h2>Subscribe to our Newsletter</h2>
                    <p>Enter your email and we'll send you details about new courses and events.</p>
                </div>

                <div class="form-column col-md-5 col-sm-12 col-xs-12">
                    <div class="subscribe-form">
                        <form method="post" action="http://t.commonsupport.com/prime-kidz/contact.html">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Enter Your email" required="">
                                <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

    <!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="{{asset('js/jquery.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

@endsection



@section('footer')
    @include('footer')
@endsection