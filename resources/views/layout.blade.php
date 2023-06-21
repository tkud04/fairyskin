<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <?php
   $contact = [
    'phone' => "09048166902",
    'email' => "fairyskintreatmentsorders@gmail.com"
   ];

   $currencies = ['NGN'];
   $languages = [
    ['img' => 'assets/images/language/english.png','value' => 'English']
  ];

  $categories = [
    ['name' => 'Category 1','url' => '#'],
    ['name' => 'Category 2','url' => '#'],
    ['name' => 'Category 3','url' => '#'],
    ['name' => 'Category 4','url' => '#'],
    ['name' => 'Category 5','url' => '#'],
  ];

  ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | Fairyskin - Specialists in Skin and Skincare Products</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Buy the most glamorous earrings, bracelets, brooches and more from Ace Luxury Store.">
    @yield('metas')
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>

<div id="main-wrapper">
  <!--Header section start-->
  <header class="header header-transparent header-sticky">
            <div class="header-top bg-dark">
                <div class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
                    <div class="row align-items-center">

                        <div class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                            <!--Links start-->
                            <div class="header-top-links color-white">
                                <ul>
                                    <li><a href="tel:{{$contact['phone']}}"><i class="fa fa-phone"></i>{{$contact['phone']}}</a></li>
                                    <li><a href="mailto:{{$contact['email']}}"><i class="fa fa-envelope-open-o"></i>{{$contact['email']}}</a></li>
                                </ul>
                            </div>
                            <!--Links end-->
                            <!--Socail start-->
                            <div class="header-top-social color-white">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <!--Socail end-->
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                <ul class="ht-us-menu color-white d-flex">
                                   <?php
                                    if($user === null){
                                   ?>
                                    <li><a href="#"><i class="fa fa-user-circle-o"></i>Welcome!</a>
                                        <ul class="ht-dropdown right">
                                            <li><a href="{{url('login}}">Login</a></li>
                                            <li><a href="{{url('signup')}}">Sign up</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                    }else{
                                    ?>
                                     <li><a href="#"><i class="fa fa-user-circle-o"></i>Hi, {{$user->fname}}</a>
                                        <ul class="ht-dropdown right">
                                            <li><a href="{{url('dashboard')}}">My Account</a></li>
                                            <li><a href="{{url('bye')}}">Log out</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                     }
                                    ?>
                                </ul>
                                <ul class="ht-cr-menu color-white d-flex">
                                    <li><a href="#">{{$currencies[0]}}</a>
                                        <ul class="ht-dropdown width-20">
                                            <?php
                                             foreach($currencies as $c){
                                            ?>
                                            <li><a href="#">{{$c}}</a></li>
                                            <?php
                                             }
                                            ?>
                                        </ul>
                                    </li>
                                    <li><a href="#"><img src="{{$languages[0]['img']}}" alt="">{{$languages[0]['value']}}</a>
                                        <ul class="ht-dropdown width-50">
                                            <?php
                                             foreach($languages as $l){
                                            ?>
                                            <li><a href="#"><img src="{{$l['img']}}" alt="">{{$l['value']}}</a></li>
                                            <?php
                                             }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-bottom menu-right bg-dark">
                <div class="container-fluid pl-75 pr-75 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
                    <div class="row align-items-center">

                        <!--Logo start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="assets/images/logo-white.png" alt=""></a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu color-white">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="#">Shop</a>
                                    <ul class="sub-menu">
                                            <li><a href="{{url('shop')}}">All Products</a></li>
                                            <?php
                                             foreach($categories as $c){
                                            ?>
                                            <li><a href="{{$c['url']}}">{{$c['name']}}</a></li>
                                            <?php
                                             }
                                            ?>
                                      </ul>
                                    </li>
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <li><a href="#">About Us</a>
                                      <ul class="sub-menu">
                                        <li><a href="{{url('about')}}">About Us</a></li>
                                        <li><a href="{{url('faq')}}">FAQ</a></li>
                                        <li><a href="{{url('mission')}}">Mission Statement</a></li>
                                      </ul>
                                    </li>
                                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">
                                <button class="header-search-toggle color-white"><i class="fa fa-search"></i></button>
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-cart color-white">
                                <a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i><span>3</span></a>
                                <!--Mini Cart Dropdown Start-->
                                <div class="header-cart-dropdown">
                                    <ul class="cart-items">
                                    <?php
			                               $cc = (isset($cart)) ? count($cart) : 0;

                                     for($a = 0; $a < $cc; $a++)
			                              	{
                                        $c = $cart[$a];
				                              	$item = $c['product'];
					                              $qty = $c['qty'];
					                              $itemAmount = $item['pd']['amount'];
                                        $img = $item['imggs'][0];
                                        $pu = url('product')."?xf=".$item['sku'];
                                        $ru = url('remove-from-cart')."?xf=".$item['sku'];
		                                ?>
                                        <li class="single-cart-item">
                                            <div class="cart-img">
                                                <a href="{{url('cart')}}"><img src="{{$img}}" alt="">{{$item['name']}}</a>
                                            </div>
                                            <div class="cart-content">
                                                <h5 class="product-name"><a href="{{$pu}}">{{$item['name']}}</a></h5>
                                                <span class="product-quantity">{{$c['qty']}} ×</span>
                                                <span class="product-price">&#8358;{{number_format($itemAmount,2)}}</span>
                                            </div>
                                            <div class="cart-item-remove">
                                                <a title="Remove" href="{{$ru}}"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </li>
                                      <?php
                                      }
                                      ?>
                                    </ul>
                                    <div class="cart-total">
                                        <h5>Subtotal :<span class="float-right">$39.79</span></h5>
                                        <h5>Total : <span class="float-right">$46.79</span></h5>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="{{url('cart')}}">View Cart</a>
                                        <a href="{{url('checkout')}}">checkout</a>
                                    </div>
                                </div>
                                <!--Mini Cart Dropdown End-->
                            </div>
                        </div>
                        <!--Search Cart End-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none d-block">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header section end-->
</div>
</body>
</html>
