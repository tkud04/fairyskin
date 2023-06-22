<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <?php
   $contact = [
    'phone' => "+234 904 816 6902",
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

  $brands = [
    ['img' => 'assets/images/brands/sponsor.png'],
    ['img' => 'assets/images/brands/sponsor.png'],
    ['img' => 'assets/images/brands/sponsor.png'],
    ['img' => 'assets/images/brands/sponsor.png'],
    ['img' => 'assets/images/brands/sponsor.png'],
  ];

  ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?> | Fairyskin - Specialists in Skin and Skincare Products</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="<?php echo e(url('/')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Buy the most glamorous earrings, bracelets, brooches and more from Ace Luxury Store.">
    <?php echo $__env->yieldContent('metas'); ?>
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    

    <!-- libs -->
    <link rel="stylesheet" href="assets/lib/sweet-alert/sweetalert2.css">
    <script src="assets/lib/sweet-alert/sweetalert2.js"></script>

    
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
                                    <li><a href="tel:<?php echo e($contact['phone']); ?>"><i class="fa fa-phone"></i><?php echo e($contact['phone']); ?></a></li>
                                    <li><a href="mailto:<?php echo e($contact['email']); ?>"><i class="fa fa-envelope-open-o"></i><?php echo e($contact['email']); ?></a></li>
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
                                            <li><a href="<?php echo e(url('login')); ?>">Login</a></li>
                                            <li><a href="<?php echo e(url('signup')); ?>">Sign up</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                    }else{
                                    ?>
                                     <li><a href="#"><i class="fa fa-user-circle-o"></i>Hi, <?php echo e($user->fname); ?></a>
                                        <ul class="ht-dropdown right">
                                            <li><a href="<?php echo e(url('dashboard')); ?>">My Account</a></li>
                                            <?php
                                             if($user->role === 'admin'){
                                            ?>
                                              <li><a href="<?php echo e(url('admin-centre')); ?>">Admin Centre</a></li>
                                            <?php
                                             }
                                            ?>
                                            <li><a href="<?php echo e(url('bye')); ?>">Log out</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                     }
                                    ?>
                                </ul>
                                <ul class="ht-cr-menu color-white d-flex">
                                    <li><a href="#"><?php echo e($currencies[0]); ?></a>
                                        <ul class="ht-dropdown width-20">
                                            <?php
                                             foreach($currencies as $c){
                                            ?>
                                            <li><a href="#"><?php echo e($c); ?></a></li>
                                            <?php
                                             }
                                            ?>
                                        </ul>
                                    </li>
                                    <li><a href="#"><img src="<?php echo e($languages[0]['img']); ?>" alt=""><?php echo e($languages[0]['value']); ?></a>
                                        <ul class="ht-dropdown width-50">
                                            <?php
                                             foreach($languages as $l){
                                            ?>
                                            <li><a href="#"><img src="<?php echo e($l['img']); ?>" alt=""><?php echo e($l['value']); ?></a></li>
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

                        <!--Logo white start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                                <a href="<?php echo e(url('/')); ?>">
                                    <img src="assets/images/fairyskin-logo.jpg" style="width: 118px; height: 44px;"  alt="FAIRYSKIN"/>
                                </a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu color-white">
                                <ul>
                                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                    <li><a href="#">Shop</a>
                                    <ul class="sub-menu">
                                            <li><a href="<?php echo e(url('shop')); ?>">All Products</a></li>
                                            <?php
                                             foreach($categories as $c){
                                            ?>
                                            <li><a href="<?php echo e($c['url']); ?>"><?php echo e($c['name']); ?></a></li>
                                            <?php
                                             }
                                            ?>
                                      </ul>
                                    </li>
                                    <li><a href="<?php echo e(url('blog')); ?>">Blog</a></li>
                                    <li><a href="#">About Us</a>
                                      <ul class="sub-menu">
                                        <li><a href="<?php echo e(url('about')); ?>">About Us</a></li>
                                        <li><a href="<?php echo e(url('faq')); ?>">FAQ</a></li>
                                        <li><a href="<?php echo e(url('mission')); ?>">Mission Statement</a></li>
                                      </ul>
                                    </li>
                                    <li><a href="<?php echo e(url('contact')); ?>">Contact Us</a></li>
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
                                <a href="<?php echo e(url('cart')); ?>"><i class="fa fa-shopping-cart"></i><span>3</span></a>
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
                                                <a href="<?php echo e(url('cart')); ?>"><img src="<?php echo e($img); ?>" alt=""><?php echo e($item['name']); ?></a>
                                            </div>
                                            <div class="cart-content">
                                                <h5 class="product-name"><a href="<?php echo e($pu); ?>"><?php echo e($item['name']); ?></a></h5>
                                                <span class="product-quantity"><?php echo e($c['qty']); ?> ×</span>
                                                <span class="product-price">&#8358;<?php echo e(number_format($itemAmount,2)); ?></span>
                                            </div>
                                            <div class="cart-item-remove">
                                                <a title="Remove" href="<?php echo e($ru); ?>"><i class="fa fa-trash"></i></a>
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
                                        <a href="<?php echo e(url('cart')); ?>">View Cart</a>
                                        <a href="<?php echo e(url('checkout')); ?>">checkout</a>
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

          <!--------- Session notifications-------------->
        	<?php
               $pop = ""; $val = "";
               
               if(isset($signals))
               {
                  foreach($signals['okays'] as $key => $value)
                  {
                    if(session()->has($key))
                    {
                  	$pop = $key; $val = session()->get($key);
                    }
                 }
              }
              
             ?> 

                 <?php if($pop != "" && $val != ""): ?>
                   <?php echo $__env->make('session-status',['pop' => $pop, 'val' => $val], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <?php endif; ?>
        	<!--------- Input errors -------------->
                    <?php if(isset($errors) && count($errors) > 0): ?>
                          <?php echo $__env->make('input-errors', ['errors'=>$errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php endif; ?> 

        <?php echo $__env->yieldContent('content'); ?>

         <!--Brand section start-->
         <div
            class="brand-section section pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <!--Brand Slider start-->
                    <div class="brand-slider tf-element-carousel section p-0" data-slick-options='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "autoplay": true
                        }'  data-slick-responsive='[
                        {"breakpoint":1199, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>
                        <?php
                        foreach($brands as $b){
                        ?>
                        <div class="brand col"><a href="#"><img src="<?php echo e($b['img']); ?>" alt=""></a></div>
                        <?php
                        }
                        ?>
                    </div>
                    <!--Brand Slider end-->

                </div>
            </div>
        </div>
        <!--Brand section end-->

        <!--Categorie Product section start-->
        <div
            class="categorie-product-section section">
            <div class="container-fluid pl-0 pr-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Categorie Product Start -->
                        <div class="single-categorie">
                            <div class="categorie-image">
                                <img src="./assets/images/categorie/cate-1.png" alt="">
                            </div>
                            <div class="categorie-content">
                                <h3>Now introducing</h3>
                                <a class="shop-btn" href="#">Shop now</a>
                                <h1>Spa Optima+</h1>
                            </div>
                        </div>
                        <!-- Single Categorie Product End -->
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Categorie Product Start -->
                        <div class="single-categorie">
                            <div class="categorie-image">
                                <img src="./assets/images/categorie/cate-2.png" alt="">
                            </div>
                            <div class="categorie-content">
                                <h3>Wrinkle cure</h3>
                                <a class="shop-btn" href="#">Shop now</a>
                                <h1>Time Revolution</h1>
                            </div>
                        </div>
                        <!-- Single Categorie Product End -->
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Categorie Product Start -->
                        <div class="single-categorie">
                            <div class="categorie-image">
                                <img src="./assets/images/categorie/cate-3.png" alt="">
                            </div>
                            <div class="categorie-content">
                                <h3>Pretty perks for every point you earn</h3>
                                <a class="shop-btn" href="#">Shop now</a>
                                <h1>Beauty Squad</h1>
                            </div>
                        </div>
                        <!-- Single Categorie Product End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Categorie Product section end-->

        <!--Footer section start-->
        <footer class="footer-section section bg-dark">

            <!--Footer Top start-->
            <div
                class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-0">
                <div class="container">
                    <div class="row row-25">

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">About Fairyskin</span></h4>
                            <img src="assets/images/fairyskin-logo.jpg" style="width: 118px; height: 44px;"  alt="FAIRYSKIN"/>
                            <p>We are private label cosmetics manufacurers specializing in creating new and sensational skin and skin care products.</p>
                            <div class="footer-social">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->

                        
                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Information</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Mission Statement</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Our Offers</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Top sellers</a></li>
                                <li><a href="#">All products</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-4 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Contact us</span></h4>
                            <ul class="address">
                                <li><i class="fa fa-home"></i><span>3, Bankole St, Off Ikosi Rd, Oregun, Ikeja,<br> Lagos NG</span>
                                </li>
                                <li><i class="fa fa-phone"></i><span><a href="tel:<?php echo e($contact['phone']); ?>"><?php echo e($contact['phone']); ?></a></span></li>
                                <li><i class="fa fa-envelope-o"></i><span><a href="mailto:<?php echo e($contact['email']); ?>"><?php echo e($contact['email']); ?></a></span></li>
                            </ul>
                            <div class="payment-box mt-15 mb-15">
                                <a href="#"><img src="./assets/images/payment.png" alt=""></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->
                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container ft-border pt-40 pb-40 pt-xs-20 pb-xs-20">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-8">
                            <div class="copyright text-start">
                                <p>Copyright &copy;<?php echo e(date('Y')); ?> <a href="<?php echo e(url('/')); ?>">Fairyskin</a>. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-4">
                            <div class="footer-logo text-end">
                                <a href="<?php echo e(url('/')); ?>">FAIRYSKIN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->

        </footer>
        <!--Footer section end-->
        
        <!-- Modal Area Strat -->
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-6 mb-xxs-25 mb-xs-25 mb-sm-25">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-lg-image-1 tf-element-carousel" data-slick-options='{
                                            "slidesToShow": 1,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "asNavFor": ".slider-thumbs-1",
                                            "arrows": false,
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                            }'>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-1.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-2.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-3.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-4.jpg" alt="">
                                            </div>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-5.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1 tf-element-carousel" data-slick-options='{
                                            "slidesToShow": 4,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "focusOnSelect": true,
                                            "asNavFor": ".slider-lg-image-1",
                                            "arrows": false,
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                            }' data-slick-responsive= '[
                                            {"breakpoint":991, "settings": {
                                                "slidesToShow": 3
                                            }},
                                            {"breakpoint":767, "settings": {
                                                "slidesToShow": 4
                                            }},
                                            {"breakpoint":479, "settings": {
                                                "slidesToShow": 2
                                            }}
                                        ]'>										
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6">
                                    <!-- product detail content -->
                                    
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->
                                        <div class="product-nav">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <!--Product Nav End-->
                                        <h2>White Shave Brux</h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(1 customer review)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">$66.00</span>
                                            <span class="regular-price">$77.00</span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="#">
                                                <div class="product-quantity">
                                                    <input value="1" type="number">
                                                </div>
                                                <div class="add-to-link">
                                                    <button class="product-add-btn" data-text="add to cart">add to cart</button>
                                                </div>
                                            </form>
                                    </div>
                                        <div class="wishlist-compare-btn">
                                            <a href="#" class="wishlist-btn mb-md-10 mb-sm-10">Add to Wishlist</a>
                                            <a href="#" class="add-compare">Compare</a>
                                        </div>
                                        <div class="product-meta">
                                            <span class="posted-in">
                                                    Categories: 
                                                    <a href="#">Accessories</a>,
                                                    <a href="#">Electronics</a>
                                                </span>
                                        </div>
                                        <div class="single-product-sharing">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Product Details Content End-->
                                    
                                    <!-- End of product detail content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        <!-- Modal Area End -->

        <!-- Newsletter Popup Start -->
        <div class="newsletter-popup-area" id="newsletter-popup-area">
            <div class="newsletter-popup-content-wrapper">
                <div class="newsletter-popup-content text-center">
                    <a href="javascript:void(0)" class="close-newsletter-popup" id="close-newsletter-popup">Close</a>
                    <h2>NEWSLETTER</h2>
                    <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
                    <div class="subscription-form">
                        <form  id="mc-form2" class="mc-form">
                            <input type="email" placeholder="Enter your email address here" >
                            <button class="btn" type="submit">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
    
                        <div class="mailchimp-alerts mt-5 mb-5">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
    
                        <!-- mailchimp-alerts end -->
                    </div>
                    <div class="subscribe-bottom">
                        <input type="checkbox" id="newsletter_popup_dont_show_again">
                        <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/mmm.js"></script>
    <script src="assets/js/utils.js"></script>

</body>

</html>
</div>
</body>
</html>
<?php /**PATH /Users/mac/repos/fairyskin/resources/views/layout.blade.php ENDPATH**/ ?>