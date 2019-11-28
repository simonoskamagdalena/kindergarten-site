<!DOCTYPE html>

@extends('app')

@section('title')
<title>PrimeKidz | About</title>
@endsection

@section('nav')
    @include('navigation.navAbout')
@endsection

<html lang="en">

<!-- Mirrored from t.commonsupport.com/prime-kidz/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 13:49:09 GMT -->

    @section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower-1"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky">About Us</h1>
           
        </div>
    </section>
    <!--End Page Title-->

    <!-- School Info Section -->
    <section class="info-section">
        <div class="auto-container">
            <div class="intro-text text-center">
                <h2>A Friendly school proud of their students</h2>
                <h4>New experiences</h4>
                <div class="anim-icon"><span class="icon icon-star"></span></div>
                <p>Everyday we give the oppportyity to children to engage into something that they really like, which we consider will
                    <br> get the child to improve and enhance into one particular field form young age and help it develop the necessery skills with our bestes knowledge.
                    <br> Everyday is a new adventure with the fun games we play at the end of the schoolday for relaxation. </p>
            </div>
            
        </div>
    </section>
    <!-- End Info Section -->

    <!-- Video Feature Section -->
    <section class="video-feature-sec">
        <div class="clearfix">
            <div class="video-column">
                <div class="inner-column clearfix">
                    <!-- <div class="layer-image" style="background-image: url(images/resource/video-bg.jpg);"></div> -->
                    <div class="video-box wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <img src="images/resource/video-img.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=_PsLRgEYf9E" class="play-btn" data-fancybox="gallery" data-caption=""><span class="play-icon"></span>Play Video </a>
                    </div>
                </div>
            </div>

            <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>We are <span class="text-parrot">Confident</span> &amp; Develop <span class="text-sky">Skills for Life</span></h2>
                    </div>
                    
                    <p>On the left you can find the video of our school which will make you understand our school activities better.<br>
                        The video shows the halls of our school, as well as the happy and content faces of the kids who study, learn and <br>
                        play carefree.
                    </p>
    
                </div>
            </div>
        </div>
    </section>
    <!-- Video Feature Section -->

    

    <!-- Learning Skills -->
    <section class="learning-skills">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="icon-1 doll-4 wow tada" data-wow-duration="1500ms" data-wow-delay="0ms"></span>
                <span class="icon-2 icon-star-2 wow zoomInStable" data-wow-duration="1500ms" data-wow-delay="0ms"></span>
                <h2><span class="text-orange">Learning </span> Skills</h2>
                <p>We provide sophisticated learningmmethods that will inspire and motivate the students<br> 
                to elaborate every subject and gain teamworkk as well as individual skills</p>
            </div>

            <div class="row clearfix">
                <div class="left-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-column">
                        <div class="skill-block">
                            <div class="inner">
                                <img src="images/resource/skill-1.png" alt="" class="icon">
                                <h4><a href="#">Responsibility</a></h4>
                                <p>We teach the kids through different methods of responsability as one main feature thay hahve to gain.</p>
                            </div>
                        </div>

                        <div class="skill-block">
                            <div class="inner">
                                <img src="images/resource/skill-2.png" alt="" class="icon">
                                <h4><a href="#">Teamwork</a></h4>
                                <p>\we put students in groups, monitor each one of them and direct them towards improvements</p>
                            </div>
                        </div>

                        <div class="skill-block">
                            <div class="inner">
                                <img src="images/resource/skill-3.png" alt="" class="icon">
                                <h4><a href="#">Communication</a></h4>
                                <p>Teamwork implies communication. We teach them on communication with their classmates, teammates and staff</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="right-column pull-right col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-column">
                        <div class="skill-block">
                            <div class="inner">
                                <img src="images/resource/skill-4.png" alt="" class="icon">
                                <h4><a href="#">Independence</a></h4>
                                <p>Besides teamwork we give taska that must be done indipendently in class</p>
                            </div>
                        </div>

                        <div class="skill-block">
                            <div class="inner">
                                <img src="images/resource/skill-5.png" alt="" class="icon">
                                <h4><a href="#">Motivation</a></h4>
                                <p>For each finishe task there is always an award that comes in form of a game or treat</p>
                            </div>
                        </div>

                        <div class="skill-block">
                            <div class="inner">
                                <img src="images/resource/skill-6.png" alt="" class="icon">
                                <h4><a href="#">Enquiring Mind</a></h4>
                                <p>We play fun games usually puzzles that make the mind of a kid more engaged</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="center-image col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/image-3.jpg" alt=""></figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Learning Skills -->

    
    
  

    @endsection

     @section('footer')
        @include('footer')
    @endsection

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from t.commonsupport.com/prime-kidz/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 13:51:06 GMT -->
</html>

