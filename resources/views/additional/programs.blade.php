@extends('app')

@section('title')
<title>PrimeKidz | Programs</title>
@endsection

@section('nav')
    @include('navigation.navNone')
@endsection <!-- Facilities Section -->

@section('content')
    <!-- Preloader -->
    <div class="preloader"></div>
<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/5.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower-1"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-parrot">Programs &nbsp; & &nbsp; Courses</h1>
       
        </div>
    </section>
    <!--End Page Title-->


 <section class="facilites-section" id="facilities">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <span class="icon doll-3"></span>
                        <div class="sec-title">
                            <h2><span class="text-parrot">Programs</span> </h2>
                        </div>
                        <p> The programs are unique opportunity for your kid to learn, communicate and make friends </p>
                        <div class="facilities">
                            <div class="row clearfix">
                           

                <div>
                    <div class="row"> 

                        <div class="col-xl-2"> 
                            <div class="inner-box hover-program1">
                                <div style="text-align:center">
                                    <div class="image-box "><img src="images/resource/certificate.png" alt="" style="height:100px;"></div>
                                    <h4>Certificate progarms</h4>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-xl-2"> 
                            <div class="inner-box hover-program2">
                                <div style="text-align:center">
                                    <div class="image-box"><img src="images/resource/online.png" alt="" style="height:100px;"></div>
                                    
                                    <h4>Online Learning</h4>
                                </div>
                            </div>
                        </div>
<br>
<br>
                        <div class="col-xl-2"> 
                            <div class="inner-box hover-program3">
                                <div style="text-align:center">
                                    <div class="image-box "><img src="images/resource/short.jpg" alt="" style="height:100px;"></div>
                                    <h4>Short Courses</h4>
                                    <br>
                                </div>
                            </div>
                        </div>
<br>
                        <div class="col-xl-2"> 
                            <div class="inner-box hover-program4">
                                <div style="text-align:center">
                                    <div class="image-box"><img src="images/resource/summer.png" alt="" style="height:100px;"></div>
                                    <h4>Summer Programs</h4>
                                    <br>
                                </div>
                            </div>
                        </div>

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
                <div  class="layer-image">
                    <img src="images/resource/image-1.jpg" alt="" height="800px">
                </div>
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
                <h2><span class="text-sky">Courses</span> </h2>
            </div>

            <!-- Image Column -->
            <div class="image-column">
                <div class="inner-column">
                    <!-- <div  style="background-image: url(images/resource/image-1.jpg);"></div> -->
                    <div class="layer-image" style="margin-top:0px; margin-left:600px; position:absolute">
                        <img src="images/resource/summer-camp.jpg" alt="" style="height:400px; width:800px">
                    </div>
                </div>
            </div>
            <h3><span class="text-orange hover-languages">- Languages (choose 2)</span> </h3>
            <h3><span class="text-parrot">- Mathematics</span> </h3>
            <h3><span class="text-parrot">- Chemitry</span> </h3>
            <h3><span class="text-parrot">- Biology</span> </h3>
            <h3><span class="text-parrot">- Physics</span> </h3>
            <h3><span class="text-parrot">- History</span> </h3>
            <h3><span class="text-parrot">- Geograohy</span> </h3>
            <h3><span class="text-parrot">- Informatics</span> </h3>
            <h3><span class="text-parrot">- Phyical Education</span> </h3>
<br>
            <h2><span class="text-sky">Special courses</span> </h2>
            <h3><span class="text-parrot">- Sewing</span> </h3>
            <h3><span class="text-parrot">- Cooking</span> </h3>
            <h3><span class="text-parrot">- Arts and Crafts</span> </h3>
            <h3><span class="text-orange hover-music">- Music education</span> </h3>

        </div>
    </section>
    <!-- End Staff Section -->


    @endsection

    @section('footer')
        @include('footer')
    @endsection
