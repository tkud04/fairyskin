<?php $__env->startSection('title',"Shop"); ?>

<?php $__env->startSection('content'); ?>
 <!-- Shop Section Start -->
 <div class="shop-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Category</h3>
                            <ul class="sidebar-list">
								<?php
                                 foreach($sidebarData['category'] as $c){
								?>
                                <li><a href="<?php echo e($c['url']); ?>"><i class="fa fa-angle-right"></i><?php echo e($c['name']); ?> <span class="count">(<?php echo e($c['count']); ?>)</span></a></li>
                                <?php
								 }
								?>
                            </ul>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Price</h3>
                            <ul class="sidebar-list">
							<?php
                                 foreach($sidebarData['price'] as $c){
								?>
                                <li><a href="<?php echo e($c['url']); ?>"><i class="fa fa-angle-right"></i><?php echo $c['name']; ?> <span class="count">(<?php echo e($c['count']); ?>)</span></a></li>
                                <?php
								 }
								?>
                            </ul>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="assets/images//shop-sidebar.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-banner mb-35 mb-xs-20">
                                    <img src="./assets/images/banner/category-image.jpg" alt="">
                                </div>
                                <div class="shop-banner-title">
                                    <h2>Shop</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Grid & List View Start -->
                                <div class="shop-topbar-wrapper d-md-flex justify-content-md-between align-items-center">
                                    <div class="grid-list-option">
                                         <ul class="nav">
                                          <li>
                                            <a class="active show" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                          </li>
                                          <li>
                                            <a data-bs-toggle="tab" href="#list" class=""><i class="fa fa-th-list"></i></a>
                                          </li>
                                        </ul>
                                     </div>
                                     <!--Toolbar Short Area Start-->
                                     <div class="toolbar-short-area d-md-flex align-items-center">
                                         <div class="toolbar-shorter ">
                                            <label>Sort By:</label>
                                             <select class="wide">
                                                 <option data-display="Select">Nothing</option>
                                                 <option value="Relevance">Relevance</option>
                                                 <option value="Name, A to Z">Name, A to Z</option>
                                                 <option value="Name, Z to A">Name, Z to A</option>
                                                 <option value="Price, low to high">Price, low to high</option>
                                                 <option value="Price, high to low">Price, high to low</option>
                                             </select>
                                         </div>
                                         <div class="toolbar-shorter ">
                                            <label>Show</label>
                                             <select class="small">
                                                 <option data-display="Select">9</option>
                                                 <option value="15">15</option>
                                                 <option value="30">30</option>
                                             </select>
                                             <span>per page</span>
                                         </div>
                                         
                                     </div>
                                     <!--Toolbar Short Area End-->
                                </div>
                                <!-- Grid & List View End -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="single-product.html">
                                                                    <img src="./assets/images/product/product-12.jpg" alt="">
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
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="single-product.html">
                                                                    <img src="./assets/images/product/product-13.jpg" alt="">
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
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="single-product.html">
                                                                    <img src="./assets/images/product/product-14.jpg" alt="">
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
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="single-product.html">
                                                                    <img src="./assets/images/product/product-18.jpg" alt="">
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
                                                                <h4 class="price"><span class="new">€90.00</span></h4>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="list" class="tab-pane fade">
                                            <div class="product-list-view">
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-18.jpg" alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">White Shave Brux</a></h3>
                                                                    <h4 class="price"><span class="new">€90.00</span></h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-17.jpg" alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">Aftershave Lotion</a></h3>
                                                                    <h4 class="price"><span class="new">€90.00</span><span class="old">€150.00</span></h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-15.jpg" alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">White Shave Brush</a></h3>
                                                                    <h4 class="price"><span class="new">€110.00</span><span class="old">€130.00</span></h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-12.jpg" alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">White Shave Bruj</a></h3>
                                                                    <h4 class="price"><span class="new">€80.00</span></h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="single-product.html">
                                                                        <img src="./assets/images/product/product-13.jpg" alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="single-product.html">White Shave Bruk</a></h3>
                                                                    <h4 class="price"><span class="new">€60.00</span></h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="#">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product Start -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30 mb-sm-40 mb-xs-30">
                            <div class="col">
                                <ul class="page-pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/fairyskin/resources/views/shop.blade.php ENDPATH**/ ?>