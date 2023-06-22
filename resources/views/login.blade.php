@extends('layout')

@section('title','Login')

@section('content')
@include('banner-2',['title' => 'Login','subtitle' => 'Log in to your account'])

<!--Login Register section start-->
<div class="login-register-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                        <!--Login Form Start-->
                        <div class="col-md-12 col-sm-12">
                            <div class="customer-login-register">
                                <div class="form-login-title">
                                    <h2>Login</h2>
                                </div>
                                <div class="login-form">
                                    <form action="{{url('login')}}" id="login-form" method="post">
                                        {!! csrf_field() !!}
                                        <div class="form-fild">
                                            <p><label>Email address <span class="required">*</span></label></p>
                                            <input name="email" id="email" value="" type="text">
                                        </div>
                                        <div class="form-fild">
                                            <p><label>Password <span class="required">*</span></label></p>
                                            <input name="password" id="password" value="" type="password">
                                        </div>
                                        <div class="login-submit">
                                            <button type="submit" id="login-btn" class="btn">Login</button>
                                            <label>
                                                <input class="checkbox" name="rememberme" value="" type="checkbox">
                                                <span>Remember me</span>
                                            </label>
                                        </div>
                                        <div class="lost-password">
                                            <a href="#">Lost your password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Login Form End-->
                      
                    </div>            
            </div>
        </div>
        <!--Login Register section end-->
@stop