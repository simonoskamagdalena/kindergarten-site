<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from t.commonsupport.com/prime-kidz/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 13:52:49 GMT -->
<head>
<meta charset="utf-8">
<title>PrimeKidz | {{$post->title}} </title>

<!-- Stylesheets -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>


<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
 	
    <!-- Main Header-->
    <header class="main-header">
        

        <!-- Main Box -->
        <div class="header-lower">
            <div class="auto-container">
        	   <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li ><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li class="dropdown current"><a href="#">News</a>
                                        <ul>
                                            <li><a href="{{route('activities')}}">Activities</a></li>
                                            <li><a href="{{route('announcements')}}">Announcements</a></li>
                                            <li><a href="{{route('events')}}">Events</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('gallery')}}">Gallery</a>
                                    </li>                       
                                    <!-- <li><a href="contact.html">Documents</a></li> -->
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    @if(auth()->user())
                                    <li class="dropdown"><a href="#">Admin</a>
                                        <ul>
                                            <li><a href="{{route('posts')}}">Add post</a></li>
                                            <li><a href="{{route('gallery','#addPhoto')}}">Add photo</a></li>
                                        </ul>
                                    </li>
                                    @endif

                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!-- Call btn -->
                        @if(auth()->user())
                        <div class="btn-box">
                            <a href="{{route('logout-user')}}" class="call-btn" title="">Log out</a>
                        </div>
                        @endif
                
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index-2.html" title=""><img src="images/logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li class="dropdown"><a href="#">News</a>
                                <ul>
                                            <li><a href="{{route('activities')}}">Activities</a></li>
                                            <li><a href="{{route('announcements')}}">Announcements</a></li>
                                            <li><a href="{{route('events')}}">Events</a></li>
                                        </ul>
                                </li>
                                
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                             </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('images/background/6.jpg')}});">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-orange">{{$post->title}}</h1>
        
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side blog-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">
                        <!-- News Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                
                                <div class="image-box">
                                    <div class="image"><img src="{{route('image',['filename' => $post->image])}}" alt=""></div>
                                </div>
                                <div class="lower-content">
                                    <div class="title">
                                        <!-- <h3>{{$post->title}}</h3> -->
                                        <ul class="post-info">
                                            <li>
                                                <span class="fa fa-calendar"></span>
                                                <a href="#">{{Date::parse($post->created_at)->format('d F Y ')}}</a>
                                            </li>
                                            <li>
                                                <span class="fa fa-tags"></span>
                                                
                                                Category 
                                                @if($post->category=='act')
                                                <a href="{{route('activities')}}">Activities</a>
                                                @elseif($post->category=='ann')
                                                <a href="{{route('announcements')}}">Announcements</a>
                                                @elseif($post->category=='eve')
                                                <a href="{{route('events')}}">Events</a>
                                                @endif
                                            </li>
                                    
                                        
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p class="whiteSpace">{{$post->content}}  </p>
                                    </div>
                                    @if(auth()->user())
                                    <!--route('edit-post',$post) -->
                                    <div style="text-align:right">
                                        <!-- <a href="{{route('delete',$post)}}" class="delete">Delete</a> -->
                                        <a href="{{route('edit-post',$post)}}" class="read-more">Edit</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div><!-- Blog List -->

                    

                    <!-- Post Pagination -->
                    <div class="post-pagination clearfix">
                        
                        <div class="post-pagination clearfix " style="border-bottom:none; padding-bottom: 5px;">
                            @if($prev)
                            <div class="pull-left text-left title-next-prev">
                                <span class="by"> <strong>{{Date::parse($post->created_at)->format('d F')}}</strong></span>
                                <h5 class="text-orange"><a href="{{route('post-details',$post->id-1)}}"></a>{{$prev->title}}</h5>
                          </div>
                          @endif
                            @if($next)
                            <div class="pull-right text-right title-next-prev">
                                <span class="by"> <strong>{{Date::parse($post->created_at)->format('d F')}}</strong></span>
                                <h5 class="text-orange" ><a href="{{route('post-details',$post->id+1)}}"></a>{{$next->title}}</h5>
                            </div>
                            @endif
                        </div>

                        <div class=" ">
                            @if($prev)
                            <div class="pull-left text-left ">
                               
                                <a href="{{route('post-details',$post->id-1)}}" class="prev-post"><span class="fa fa-angle-left"></span>Prev Post</a>
                            </div>
                            @endif
                            @if($next)
                            <div class="pull-right text-right ">
                                
                                <a href="{{route('post-details',$post->id+1)}}" class="next-post">Next Post <span class="fa fa-angle-right"></span></a>
                            </div>
                            @endif
                        </div>
                    </div>

                    
                        
           
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
                        
                          <!--search box-->
                          <div class="sidebar-widget search-box">
                            <form method="get" action=""> 
                            <!-- route('search')  in ation -->
                                <div class="form-group">
                                    <input type="search" name="search" id="search" value="" placeholder="Search" required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Categories</h3></div>
                            <ul class="category-list">
                                <li><a href="{{route('activities')}}">Activities</a></li>
                                <li><a href="{{route('announcements')}}">Announcements</a></li>
                                <li><a href="{{route('events')}}">Events</a></li>
                            </ul>
                        </div>

                        <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h3>Latest</h3></div>
                            <div class="widget-content">
                                @foreach($latestPosts as $post)
                                    <article class="post">
                                        <a href="{{route('post-details',$post)}}" class="thumb"><img src="{{route('image',['filename' => $post->image])}}" alt=""></a>
                                        <h3><a href="{{route('post-details',$post)}}">{{$post->title}}</a></h3>
                                        <div class="post-info">{{Date::parse($post->created_at)->format('d F Y ')}}</div>
                                    </article>
                                @endforeach
                            </div>
                        </div>

                                            
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->




<!-- Main Footer -->
<footer class="main-footer">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-12 col-xs-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <figure><a href="{{route('index')}}"><img src="{{asset('images/footer-logo.png')}}" alt=""></a></figure> 
                            </div>
                            <div class="widget-content">
                                <p>We would like to show you all the features PrimeKidz school offers for your children</p>
                                <span class="icon icon-sparrow wow slideInLeft" data-wow-duration="2500ms" data-wow-delay="0ms"></span>
                            </div>
                        </div>
                    </div>
                        
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget posts-widget">
                            <h2 class="widget-title">Latest</h2>
                            <div class="widget-content">
                                <div class="posts">
                                    @foreach($footerLatestNews as $footerNews)
                                    <div class="post">
                                        <figure class="post-thumb">
                                            <img src="{{route('image',['filename' => $footerNews->image])}}" alt="">
                                            <a href="{{route('post-details',$footerNews)}}" class="overlay-link">
                                                <span class="fa fa-link"></span>
                                            </a>
                                        </figure>
                                        <div class="desc-text">
                                            <a href="{{route('post-details',$footerNews)}}">{{$footerNews->title}}</a>
                                        </div>
                                        <div class="info"><i class="fa fa-calendar"></i>{{Date::parse($footerNews->created_at)->format('d F Y ')}} <span> </span></div>
                                    </div>
                                    @endforeach
                        
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <h2 class="widget-title">Contact</h2>
                            <div class="widget-content">
                                <ul class="contact-info-list">
                                    <li><i class="flaticon-phone-auricular-with-high-volume"></i>Tel: 08 645 280 947</li>
                                    <li><i class="flaticon-map-marker-1"></i>34 High Street, Blazfield Ave,  FL 95403 USA</li>
                                    <li><i class="flaticon-black"></i>admin@primekidz.org</li>
                                </ul>

                                <!-- <ul class="social-icon-two">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>-->

                                <span class="icon icon-heart wow jello" data-wow-duration="1500ms" data-wow-delay="0ms"></span>
                            </div>       
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <!-- End Main Footer -->
    
</div>
<!--End pagewrapper-->














<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

</body>




</html>