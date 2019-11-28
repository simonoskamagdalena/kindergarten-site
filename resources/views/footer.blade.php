

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