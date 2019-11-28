



@extends('app')
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
            <h1 class="text-sky">Results</h1>
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
                    @if(count($postsSearched)!=0 )
                      @foreach($postsSearched as $search)
                        <!-- News Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                @if($search->image)
                                    <div class="image">
                                        <a href="{{route('post-details',$search)}}"><img src="{{route('image',['filename' => $search->image])}}" alt=""></a>
                                    </div>
                                @endif
                                </div>
                                <div class="lower-content">
                                    <div class="title">
                                        <h3><a href="{{route('post-details',$search)}}">{{ $search->title }}</a></h3>
                                        <ul class="post-info">
                                        
                                            <li>
                                                <span class="fa fa-calendar"></span>
                                                    Date:  {{Date::parse($search->created_at)->format('d F Y')}} 
                                                
                                            </li>
                                            <li>
                                                <span class="fa fa-tags"></span>
                                                Category: 
                                                @if($search->category=='act')
                                                <a href="{{route('activities')}}">Activities</a>
                                                @elseif($search->category=='ann')
                                                <a href="{{route('announcements')}}">Announcements</a>
                                                @elseif($search->category=='eve')
                                                <a href="{{route('events')}}">Events</a>
                                                @endif
                                                
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <p>{{ str_limit($search->content, 300, '...') }} </p>
                                    <a href="{{route('post-details',$search)}}" class="read-more">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- End News Block -->
                        @endforeach 
                    @else

                       
                     
                        
                            <p> No results found</p>

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
                            <div class="sidebar-title"><h3>Latest</h3></div> <!-- najnovo od vesti -->
                            <div class="widget-content">
                            @foreach($latestNews as $post)
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
                            <div class="sidebar-title"><h3>Follow us</h3></div>
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

