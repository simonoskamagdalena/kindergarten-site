
@extends('app')

@section('title')
<title>PrimeKidz | News</title>
@endsection

@section('nav')
    @include('navigation.navNews')
@endsection
                        
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
            <h1 class="text-sky">News</h1>
            <ul class="bread-crumb clearfix">
              
                
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-list">
                    @if(count($posts)!=0 )
                      @foreach($posts as $post)
                        <!-- News Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                               @if($post->image)
                                <a href="{{route('post-details',$post)}}">
                                    <div class="image">
                                        <img src="{{ route('image',['filename' => $post->image])}}">
                                    </div>               
                                </a>            
                                @endif
                                </div>
                                <div class="lower-content">
                                    <div class="title">
                                        <h3><a href="{{route('post-details',$post)}}">{{ $post->title }}</a></h3>
                                        <ul class="post-info">
                                        
                                            <li>
                                                <span class="fa fa-calendar"></span>
                                                {{Date::parse($post->created_at)->format('d F Y ')}}
                                                
                                            </li>
                                            <li>
                                                <span class="fa fa-tags"></span>
                                                Kategorija: 
                                                @if($post->category=='act')
                                                <a href="">Activities</a>
                                                @elseif($post->category=='ann')
                                                <a href="">Announcements</a>
                                                @elseif($post->category=='eve')
                                                <a href="">Events</a>
                                                @endif
                                                
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <p>{{ str_limit($post->content, 300, '...') }} </p>
                                    <a  href="{{route('post-details',$post)}}" class="read-more">More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End News Block -->
                        @endforeach 
                    @else

                       
                     
                        
                            <p> No posts to show</p>

                        @endif



                        <!-- Styled Pagination -->
                        <div class="styled-pagination text-center">
                            <p>
                                <ul>
                                    <li>
                                    {{ $posts->render() }}
                                    </li>   
                                </ul>
                            </p>
                        </div>


                    </div><!-- Blog List -->
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
                        
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="get" action="{{route('search')}}">
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

             

                        <!-- Social widget -->
                        <div class="sidebar-widget social-widget">
                            <div class="sidebar-title"><h3>Pratite nas</h3></div>
                            <div class="social-icons">
                                <ul class="social-icon-two clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                                            
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
@endsection
@section('footer')
   @include('footer')
@endsection
