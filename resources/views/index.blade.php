@extends('layout')

@section('title',"Welcome")

@section('content')


@include('banner',['banners' => $banners])

 <!--Banner section start-->
 <?php
  $leftSlide = $homeSlides['left'];
  $middleSlide = $homeSlides['middle'];
  $rightSlide = $homeSlides['right'];
 ?>
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
                        <div class="single-banner mb-30">
                            <a href="{{$middleSlide['url']}}">
                               <img src="{{$middleSlide['img']}}" alt="">
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
 	 
    
@stop