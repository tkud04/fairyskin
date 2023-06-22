@extends('layout')

@section('title','Signup')

@section('content')
@include('banner-2',['title' => 'Signup','subtitle' => 'Create an account'])

<!--Login Register section start-->
<div class="login-register-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                        
                        <!--Register Form Start-->
                        <div class="col-md-12 col-sm-12">
                            <div class="customer-login-register register-pt-0">
                                <div class="form-register-title">
                                    <h2>Register</h2>
                                </div>
                                <div class="register-form">
                                    <form action="{{url('register')}}" method="post">
                                       {!! csrf_field() !!}
                                      <div class="row">
                                       <div class="col-md-6 co-sm-6">
                                         <div class="form-fild">
                                            <p><label>First name <span class="required">*</span></label></p>
                                            <input name="fname" id="fname" value="" type="text">
                                         </div>
                                       </div>
                                       <div class="col-md-6 co-sm-6">
                                         <div class="form-fild">
                                            <p><label>Last name <span class="required">*</span></label></p>
                                            <input name="lname" id="lname" value="" type="text">
                                         </div>
                                       </div>
                                      </div>

                                      <div class="row">
                                       <div class="col-md-6 co-sm-6">
                                         <div class="form-fild">
                                            <p><label>Email address <span class="required">*</span></label></p>
                                            <input name="email" id="email" value="" type="text">
                                         </div>
                                       </div>
                                       <div class="col-md-6 co-sm-6">
                                         <div class="form-fild">
                                            <p><label>Phone number <span class="required">*</span></label></p>
                                            <input name="phone" id="phone" value="" type="text">
                                         </div>
                                       </div>
                                      </div>

                                      <div class="row">
                                       <div class="col-md-6 co-sm-6">
                                        <div class="form-fild">
                                            <p><label>Password <span class="required">*</span></label></p>
                                            <input name="password" id="password" value="" type="password">
                                        </div>
                                       </div>
                                       <div class="col-md-6 co-sm-6">
                                         <div class="form-fild">
                                            <p><label>Confirm Password <span class="required">*</span></label></p>
                                            <input name="password_confirmation" id="password-2" value="" type="password">
                                         </div>
                                       </div>
                                      </div>
                                        
                                        
                                        <div class="register-submit">
                                            <button type="submit" id="register-btn" class="btn">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Register Form End-->
                    </div>            
            </div>
        </div>
        <!--Login Register section end-->
@stop