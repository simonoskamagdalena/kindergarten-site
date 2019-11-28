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
                                    <li class="current"><a href="{{route('about')}}">About</a></li>
                                    <li class="dropdown "><a href="#">News</a>
                                        <ul>
                                            <li><a href="{{route('activities')}}">Activities</a></li>
                                            <li><a href="{{route('announcements')}}">Announcements</a></li>
                                            <li><a href="{{route('events')}}">Events</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('gallery')}}">Gallery</a>
                                    </li>                       
                                    <!-- <li><a href="{{route('contact')}}">Documents</a></li> -->
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
                                <li ><a href="{{route('index')}}">Home</a></li>
                                <li class="current"><a href="{{route('about')}}">About</a></li>
                                <li class="dropdown "><a href="#">News</a>
                                <ul>
                                            <li><a href="{{route('activities')}}">Activities</a></li>
                                            <li><a href="{{route('announcements')}}">Announcements</a></li>
                                            <li><a href="{{route('events')}}">Events</a></li>
                                        </ul>
                                </li>
                                
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
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
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->