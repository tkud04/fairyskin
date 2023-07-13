@extends('layout')

@section('title',"About Us")

@section('content')
@include('banner-2',['title' => 'About Us','subtitle' => 'Who we are and what we do'])
  
<!--About Us Area Start-->
<div class="about-us-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!--About Us Image Start-->
                        <div class="about-us-img-wrapper mb-30 mb-xs-15">
                            <div class="about-us-image img-full">
                                <a href="#"><img src="assets/images/about/about-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <!--About Us Image End-->
                    </div>
                    <div class="col-lg-6 col-12">
                        <!--About Us Content Start-->
                        <div class="about-us-content">
                            <h2>Our company</h2>
                            <p class="mb-20">We are private label cosmetics manufacturers specializing in creating new and sensational skin and skin care products. We can count on 5 years of experience in offering our brand's partners a high-quality and professional full service.</p>
                            <p class="mb-20">Our private label cosmetics skin care products show inclusivity, innovation, and versatility. That’s because our internal lab works effortlessly to combine new trends, ingredients, and techniques to efficiently take care of your clientele's skin.</p>
                            <p>From creating your formula to designing your packaging, you can rest assured that we will develop the best private label cosmetics for your brand. We are extremely responsive, and strive to meet the needs and requests of all our clients.</p>
                            <a href="{{url('shop')}}" class="btn">shop now</a>
                        </div>
                        <!--About Us Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!--About Us Area End-->
@stop





