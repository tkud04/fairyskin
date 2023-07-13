@extends('layout')

@section('title',"Welcome")

@section('content')


@include('banner',['banners' => $banners])

<?php
  $leftSlide = $homeSlides['left'];
  $middleSlide = $homeSlides['middle'];
  $rightSlide = $homeSlides['right'];
 ?>

@section('scripts')
<script>
    const middleSlides = [
        <?php
         foreach($middleSlide as $m){
            echo json_encode($m).",";
         }
        ?>
    ]

    let counter = 0
    $('#middle-slide-a').attr('href',middleSlides[0]['url'])
        $('#middle-slide-img').attr('src',middleSlides[0]['img'])
    setInterval(() => {
      if(counter < middleSlides.length){
       
        let s = middleSlides[counter]
        $('#middle-slide-a').attr('href',s['url'])
        $('#middle-slide-img').attr('src',s['img'])
        ++counter
      }
      else{
        counter = 0
      }
    },3000)
</script>
@stop

 <!--Banner section start-->
 
 <div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="{{$leftSlide['url']}}">
                               <img src="{{$leftSlide['img']}}" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- Single Banner Start -->
                        <div id="middle-banner" class="single-banner mb-30">
                            <a id="middle-slide-a" href="">
                               <img id="middle-slide-img" src="" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                        <a href="{{$rightSlide['url']}}">
                               <img src="{{$rightSlide['img']}}" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Banner section end-->
 	 
        @include('top-deals',['products' => $topDeals])
    
        @include('products-tab',['products' => $tabProducts])

        <!--Call To Action section start-->
        <div class="cta-section section bg-image pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-40"
            data-bg="assets/images/bg/cta-bg.jpg">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="cta-content">
                            <h3>Subscribe to our <span>Mailing</span> List</h3>
                            <p><span>Subcribe to the Fairyskin mailing list to receive update on new arrivals,</span>
                                <span>special offers and other discount information.</span></p>
                            <div class="cta-form">
                                <form id="mc-form" class="mc-form">
                                    <input id="mc-email" type="email" autocomplete="off"
                                        placeholder="Your email address here" />
                                    <button id="mc-submit" class="cta-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Call To Action section end-->

        @include('products-slide',['productGroups' => $productGroups])

        @include('home-blog',['posts' => $posts])
@stop