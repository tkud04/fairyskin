

 <?php
				   $sku = $product['sku'];
				   $name = $product['name'];
			   $uu = url('product')."?sku=".$sku;
			   $cu = url('add-to-cart')."?sku=".$sku;
			   $wu = url('add-to-wishlist')."?sku=".$sku;
			   $ccu = url('add-to-compare')."?sku=".$sku;
			   $pd = $product['pd'];
			   $description = $pd['description'];
			   $category = $pd['category'];
         $categoryUrl = url('shop')."?category={$category}";
			   $in_stock = $pd['in_stock'];
			   $iss = ['in_stock' => "in stock",'out_of_stock' => "out of stock",'new' => "available for order"];
			   $amount = $pd['amount'];
			   
				  $imggs = $product['imggs'];
				
				$googleProductCategories = [
				              'bracelets' => "191",
							  'brooches' => "197",
							  'earrings' => "194",
							  'necklaces' => "196",
							  'rings' => "200",
							  'anklets' => "189",
							  'scarfs' => "177",
							  'Hair Accessories' => "171"
							  ];
				?>



<?php $__env->startSection('title',$product['name']); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  $(document).ready(() => {
    hideElem(['#add-review-loading'])
  })
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Single Product Section Start -->
  <div class="single-product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
		            <div class="col-md-5">
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
                                <?php
                                 foreach($imggs as $img){
                                ?>
                                <div class="lg-image">
                                    <img src="<?php echo e($img); ?>" alt="">
                                    <a href="<?php echo e($img); ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                <?php
                                }
                                ?>
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
                               <?php
                                foreach($imggs as $img){
                               ?>							
                                <div class="sm-image"><img src="<?php echo e($img); ?>" alt="product image thumb"></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!--Product Details Left -->
		            </div>
		            <div class="col-md-7">
                        <!--Product Details Content Start-->
		                <div class="product-details-content">
                            <!--Product Nav Start-->
                            <div class="product-nav">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <!--Product Nav End-->
		                    <h2><?php echo e($product['name']); ?></h2>
		                    <div class="single-product-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <a class="review-link" href="#">(1 customer review)</a>
                            </div>
                            <div class="single-product-price">
                                <span class="price new-price">&#8358;<?php echo e(number_format($product['pd']['amount'],2)); ?></span>
                                <!--<span class="regular-price">$77.00</span>-->
                            </div>
                            <div class="product-description">
                                <p><?php echo e($product['pd']['description']); ?></p>
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
                                <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                <a href="#" class="add-compare">Compare</a>
                            </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                        Category: 
		                                <a href="<?php echo e($categoryUrl); ?>"><?php echo e($category); ?></a>
		                            </span>
                            </div>
                            <div class="single-product-sharing">
                                <h3>Share this product</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
		                </div>
		                <!--Product Details Content End-->
		            </div>
		        </div>
            </div>
        </div>
        <!-- Single Product Section End -->

        <!--Product Description Review Section Start-->
		<div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab">
                            <!--Review And Description Tab Menu Start-->
                            <ul class="nav dec-and-review-menu">
                                <li>
                                <a class="active" data-bs-toggle="tab" href="#description">Description</a>
                                </li>
                                <li>
                                <a data-bs-toggle="tab" href="#reviews">Reviews (<?php echo e(count($reviews)); ?>)</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description">
                                    <p><?php echo e($product['pd']['description']); ?></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews">
                                    <div class="review-page-comment">
                                    <h2><?php echo e(count($reviews)); ?> review(s) for <?php echo e($product['name']); ?></h2>
                                    <?php
                                     if(count($reviews) > 0){
                                    ?>
                                    <ul>
                                      <?php
                                       foreach($reviews as $review){
                                      ?>
                                        <li>
                                            <div class="product-comment">
                                                <img src="./assets/images/icons/author.png" alt="">
                                                <div class="product-comment-content">
                                                    <div class="product-reviews">
                                                      <?php
                                                       for($i = 0; $i < $review['rating']; $i++){
                                                      ?>
                                                        <i class="fa fa-star"></i>
                                                      <?php
                                                       }
                                                      for($i = 0; $i < 5 - $review['rating']; $i++){
                                                      ?>
                                                        <i class="fa fa-star-o"></i>
                                                      <?php
                                                       }
                                                      ?>
                                                      
                                                    </div>
                                                    <p class="meta">
                                                        <strong><?php echo e($review['name']); ?></strong> - <span><?php echo e($review['date']); ?></span>
                                                    <div class="description">
                                                        <p><?php echo e($review['review']); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                       }
                                        ?>
                                    </ul>
                                    <?php
                                    }
                                    ?>
                                    <div class="review-form-wrapper">
                                        <div class="review-form">
                                            <span class="comment-reply-title">Add a review </span>
                                            <?php
                                            if(isset($user)){
                                            ?>
                                            <form action="#">
                                               <input type="hidden" id="add-review-product" value="<?php echo e($product['sku']); ?>"/>
                                               <input type="hidden" id="skf" value="<?php echo e(csrf_token()); ?>"/>
                                                <p class="comment-notes">
                                                    <span id="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked
                                                        <span class="required">*</span>
                                                </p>
                                                <div class="comment-form-rating">
                                                    <label>Your rating</label>
                                                    <div class="rating">
                                                        <select id="add-review-rating">
                                                          <?php
                                                           for($i = 1; $i < 6; $i++){
                                                          ?>
                                                          <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                                          <?php
                                                           }
                                                          ?>
                                                        </select>
                                                    </div>
                                                 </div>
                                                <div class="input-element" style="margin-top: 40px;">
                                                    <div class="comment-form-comment">
                                                        <label>Comment</label>
                                                        <textarea name="message" id="add-review-review" placeholder="Your comment.." cols="40" rows="8"></textarea>
                                                    </div>
                                                    <div class="review-comment-form-author">
                                                        <label>Name </label>
                                                        <input required="required" id="add-review-name" type="text" value="<?php echo e(isset($user) ? $user->fname.' '.$user->lname : ''); ?>"/>
                                                    </div>
                                                   
                                                    <div class="comment-submit">
                                                    <p id="add-review-loading"> <img src="assets/images/loading.gif" alt="Loading" style="width: 70px; height: 70px;"/> Processing your request</p>
                                                        <button id="add-review-btn" class="form-button">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php
                                            }
                                            else{
                                            ?>
                                             <h4>You must be signed in to add a review.</h4>
                                             <a href="#">Sign in</a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Product Description Review Section Start-->

        <!--Product section start-->
        <div
            class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="product-slider tf-element-carousel" data-slick-options='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                }' data-slick-responsive='[
                {"breakpoint":1199, "settings": {
                "slidesToShow": 3
                }},
                {"breakpoint":992, "settings": {
                "slidesToShow": 2
                }},
                {"breakpoint":768, "settings": {
                "slidesToShow": 2,
                "arrows": false,
                "autoplay": true
                }},
                {"breakpoint":576, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
                ]'>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-5.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-6.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brug</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€70.00</span><span
                                        class="old">€100.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-7.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€70.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-8.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€90.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-1.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€110.00</span><span
                                        class="old">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-2.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brux</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-3.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruz</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-4.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruk</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€115.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Product section end-->

        <!--Product section start-->
        <div
            class="product-section section pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>Up Sell Products</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="product-slider tf-element-carousel" data-slick-options='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                }' data-slick-responsive='[
                {"breakpoint":1199, "settings": {
                "slidesToShow": 3
                }},
                {"breakpoint":992, "settings": {
                "slidesToShow": 2
                }},
                {"breakpoint":768, "settings": {
                "slidesToShow": 2,
                "arrows": false,
                "autoplay": true
                }},
                {"breakpoint":576, "settings": {
                "slidesToShow": 1,
                "arrows": false,
                "autoplay": true
                }}
                ]'>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-1.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€110.00</span><span
                                        class="old">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-2.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brux</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-3.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruz</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-4.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruk</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€115.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-5.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€130.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-6.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brug</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€70.00</span><span
                                        class="old">€100.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-7.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Bruc</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€70.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Single Product Start -->
                        <div class="single-product mb-30">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img src="./assets/images/product/product-8.jpg" alt="">
                                </a>
                                <span class="descount-sticker">-10%</span>
                                <span class="sticker">New</span>
                                <div class="product-action d-flex justify-content-between">
                                    <a class="product-btn" href="#">Add to Cart</a>
                                    <ul class="d-flex">
                                        <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="single-product.html">White Shave Brusb</a></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4 class="price"><span class="new">€90.00</span></h4>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Product section end-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/fairyskin/resources/views/product.blade.php ENDPATH**/ ?>