@extends('app')

@section('title')
<title>PrimeKidz | Learn More</title>
@endsection

@section('nav')
    @include('navigation.navNone')
@endsection <!-- Facilities Section -->

@section('content')
    <!-- Preloader -->
    <div class="preloader"></div>
<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower-1"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-orange">Learn more about our school</h1>
       
        </div>
    </section>
    <!--End Page Title-->

 <div class="image-box ">
    <img src="images/resource/image-1.jpg" alt="" style="margin-top:100px; margin-left:800px; position:absolute">
</div>
 <section class="facilites-section" id="facilities">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <span class="icon doll-3"></span>
                        <div class="sec-title">
                            <h2><span class="text-parrot">School</span> Facilities</h2>
                        </div>
                        <h3>EveryDay Care for your Children ...</h3>
                        <p> These are facilities that the kids get to use or experince in our school </p>
                        <div class="facilities">
                            <div class="row clearfix">
                                <div class="facility-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image-box"><img src="images/resource/facility-1.png" alt=""></div>
                                        <h4>Clean Playgrounds</h4>
                                    </div>
                                </div>

                                <div class="facility-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image-box"><img src="images/resource/facility-2.png" alt=""></div>
                                        <h4>Private School Bus</h4>
                                    </div>
                                </div>

                                <div class="facility-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image-box"><img src="images/resource/facility-3.png" alt=""></div>
                                        <h4>Modern Canteen</h4>
                                    </div>
                                </div>

                                <div class="facility-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image-box"><img src="images/resource/facility-4.png" alt=""></div>
                                        <h4>Colorful Classes</h4>
                                    </div>
                                </div>

                                <div class="facility-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image-box"><img src="images/resource/facility-5.png" alt=""></div>
                                        <h4>Positive Learning</h4>
                                    </div>
                                </div>

                                <div class="facility-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image-box"><img src="images/resource/facility-6.png" alt=""></div>
                                        <h4>Fun With Games</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Image Column -->
        <div class="image-column">
            <div class="inner-column">
                <!-- <div class="layer-image" style="background-image: url(images/resource/image-1.jpg);"></div> -->
               
            </div>
        </div>
    </section>
    <!-- End Facilities Section -->

    

    <!-- Staff Section -->
    <section class="staff-section" id="staff">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="icon-1 doll-5"></span>
                <span class="icon-2 icon-pencil-2"></span>
                <h2><span class="text-sky">Teachers</span> Staff</h2>
                <p>These are the staff that you can contact in the school or through the information given</p>
            </div>

            <div class="row clearfix">
                <!-- Staff Block -->
                <div class="staff-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="0ms"><img src="images/resource/staff-1.jpg" alt=""></div>
                        <div class="info-box">
                            <h3> Maria Thomas</h3>
                            <p>Founder &amp; Head</p>
                            <p>maria.thomas@primekidz.org</p>
                        </div>
                    </div>
                </div>

                <!-- Staff Block -->
                <div class="staff-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="300ms"><img src="images/resource/staff-2.jpg" alt=""></div>
                        <div class="info-box">
                            <h3>Anna Victoria</h3>
                            <p>Sports Instructor</p>
                            <p>anna.victoria@primekidz.org</p>

                        </div>
                    </div>
                </div>

                <!-- Staff Block -->
                <div class="staff-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="600ms"> <img src="images/resource/staff-3.jpg" alt=""></div>
                        <div class="info-box">
                            <h3>Kate Nathan</h3>
                            <p>Primary Teacher</p>
                            <p>kate.nathan@primekidz.org</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Staff Section -->

    @endsection

    @section('footer')
        @include('footer')
    @endsection
