
@extends('app')

@section('title')
<title>PrimeKidz | Gallery</title>
@endsection

@section('nav')
    @include('navigation.navGallery')
@endsection
                        
@section('content')

   <!-- Preloader -->
   <div class="preloader"></div> 

   <section class="intro-section" style="padding:10px 0 125px 100px">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- <div class="text-column col-md-7 col-sm-12 col-xs-12"> -->
                    <div class="inner-column">
                        <span class="icon-1 doll-1 wow zoomInStable" data-wow-duration="2000ms" data-wow-delay="0ms"></span>
                        <span class="icon-2 doll-2 wow jello" data-wow-duration="1000ms" data-wow-delay="1000ms"></span>
                        <div class="sec-title">
                            <h2><span class="text-parrot"><br>Gallery</span> </h2>
                        </div>
                    </div>
                </div>
                        <p>
                            Don't miss out on the latest pictures, so that you see how the kids are having fun daily as well as on special events
                          
                        </p>
        </div>
    </section>

 
    <!--Gallery Section-->
    <section class="gallery-grid-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">

      
         
                
                <div class="filter-list row clearfix">
                    @if(count($images)!=0)
                        @foreach($images as $image)
                        <!--Gallery Item Two-->
                        
                        <div class="gallery-item mix all campus video col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img  src="{{ route('image',['filename' => $image->image]) }}" alt="">
                                    <!--Overlay Box-->
                                    <div class="caption-box clearfix">
                                        <div class="title">
                                            {{$image->description}}
                                        </div>
                                        <div class="icon-box">
                                            <a href="{{ route('image',['filename' => $image->image]) }}" class="link" data-fancybox="gallery" data-caption=""><span class="fa fa-search-plus"></span></a>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        @endforeach
               
                    @else
                        <div>
                        No pictures to show
                        </div>
                    @endif

                </div>

                <div>
                    <hr>
                   
                    @if(auth()->user())
                    <div id="addPhoto">
                        <div class="sec-title">
                            <h4 ><span class="text-orange"><br>Add photo</span> </h4>
                        </div>
            
                            
                            <form method="post" action="{{ route('upload-image') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!-- <label   ></label> -->
                                <input id="description" for="description" name="description" required placeholder="Opis" type="text" class="form-control">
                                <br>
                                <div class="form-control">
                                    <input type="file" name="image" id="image"  required >
                                </div>
                                <div>
                                    <button type="submit" value="Submit" class="post-button"> Post</button>
                                </div>
            
                            </form>
                         
            
                    </div>
                    @endif
                
                </div>
                <!-- Styled Pagination -->
                <!-- <div class="styled-pagination text-center">
                    <ul class="clearfix">
                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>

    </section>
    <!-- End Gallery Section -->

@endsection


@section('footer')
    @include('footer')
@endsection