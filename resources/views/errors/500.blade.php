<?php
$user = null;
$c = [];
$cart = [];
$plugins = [];
?>
@extends('layout')

@section('title',"Request Failed")

@section('content')
@include('banner-2',['title' => 'Request Failed'])

    <!-- 404 Error Section Start -->
    <div class="404-error-section section pt-55 pt-lg-35 pt-md-40 pt-sm-35 pt-xs-30  pb-100 pb-lg-80 pb-md-70 pb-sm-40 pb-xs-35">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="error-wrapper text-center">
                            <div class="error-text">
                                <h1>404</h1>
                                <h2>Oops! YUR REQUEST FAILED</h2>
                                <p>Sorry your request failed due to an issue on the server, our team are working hard to resolve this, please try again later.</p>
                            </div>
                            <div class="search-error">
                                <form action="#">
                                    <input placeholder="Search" type="text">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="error-button">
                                <a href="{{url('/')}}">Back to home page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 Error Section End --> 
    
@stop