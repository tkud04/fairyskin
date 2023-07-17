@extends('layout')

@section('title',$samba)

@section('content')
<?php
$img = "";
if(count($products) > 0){
	$img = $products[0]['imggs'][0];
}
?>
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
                                <li><a href="{{$c['url']}}"><i class="fa fa-angle-right"></i>{{$c['name']}} <span class="count">({{$c['count']}})</span></a></li>
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
                                <li><a href="{{$c['url']}}"><i class="fa fa-angle-right"></i>{!!$c['name']!!} <span class="count">({{$c['count']}})</span></a></li>
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
					  <?php
					  if(count($products) > 0){
					  ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-banner mb-35 mb-xs-20">
                                    <img src="{{$img}}" style="width: 871px; height: 459px;" alt="">
                                </div>
                                <div class="shop-banner-title">
                                    <h2>{{$samba}}</h2>
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
										<!-- Products Grid Start -->
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">
                                                <div class="row">
													<?php
													foreach($products as $product){

														$p = [
														 'url' => url('product')."?sku={$product['sku']}",
														 'name' => $product['name'],
														 'sku' => $product['sku'],
														 'img' => $product['imggs'][0],
														 'rating' => 4,
														 'amount' => $product['pd']['amount'],
														 'description' => $product['pd']['description'],
														 'cart-url' => url('add-to-cart')."?sku={$product['sku']}"
														];
								
														$imgs = json_encode($product['imggs']);
														$pd = json_encode($product['pd']);
														
								
														
								$productData = <<<EOD
								 {
								url: "{$p['url']}",
								name: "{$p['name']}",
								imgs: {$imgs},
								rating: 4,
								pd: {$pd},
								cartUrl: "{$p['cart-url']}",
								sku: "{$p['sku']}"
								}
								EOD;
													?>
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="{{$p['url']}}">
                                                                    <img src="{{$p['img']}}" alt="">
                                                                </a>
                                                                <span class="descount-sticker">-10%</span>
                                                                <span class="sticker">New</span>
                                                                <div class="product-action d-flex justify-content-between">
                                                                    <a class="product-btn" id="add-to-cart-btn" href="#" data-cu="{{$p['cart-url']}}">Add to Cart</a>
                                                                    <ul class="d-flex">
																	    <li><a href="#" onclick="quickViewProduct({{$productData}}); return false;" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                               <h3><a href="{{$p['url']}}">{{$p['name']}}</a></h3>
                                                               <div class="ratting">
                                                                 <i class="fa fa-star"></i>
                                                                 <i class="fa fa-star"></i>
                                                                 <i class="fa fa-star"></i>
                                                                 <i class="fa fa-star"></i>
                                                                 <i class="fa fa-star"></i>
                                                               </div>
                                                               <h4 class="price"><span class="new">&#8358;{{number_format($product['pd']['amount'],2)}}</span></h4>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
													<?php
													}
													?>
                                                   
                                                </div>
                                            </div>
                                        </div>
										<!-- Products Grid End -->

										<!-- Products List Start -->
                                        <div id="list" class="tab-pane fade">
                                            <div class="product-list-view">
											<?php
													foreach($products as $product){

														$p = [
														 'url' => url('product')."?sku={$product['sku']}",
														 'name' => $product['name'],
														 'sku' => $product['sku'],
														 'img' => $product['imggs'][0],
														 'rating' => 4,
														 'amount' => $product['pd']['amount'],
														 'description' => $product['pd']['description'],
														 'cart-url' => url('add-to-cart')."?sku={$product['sku']}"
														];
								
														$imgs = json_encode($product['imggs']);
														$pd = json_encode($product['pd']);
														
								
														
								$productData = <<<EOD
								 {
								url: "{$p['url']}",
								name: "{$p['name']}",
								imgs: {$imgs},
								rating: 4,
								pd: {$pd},
								cartUrl: "{$p['cart-url']}",
								sku: "{$p['sku']}"
								}
								EOD;
													?>
                                                <!-- Single List Product Start -->
                                                <div class="product-list-item mb-40">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4 col-sm-6">
                                                            <div class="single-product">
                                                                <div class="product-img mb-0 mb-xs-25">
                                                                    <a href="{{$p['url']}}">
                                                                        <img src="{{$p['img']}}" alt="">
                                                                    </a>
                                                                    <span class="descount-sticker">-10%</span>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-6">
                                                            <div class="product-content-shop-list">
                                                                <div class="product-content">
                                                                    <h3><a href="{{$p['url']}}">{{$p['name']}}</a></h3>
                                                                    <h4 class="price"><span class="new">&#8358;{{number_format($product['pd']['amount'],2)}}</span></h4>
                                                                    <div class="ratting">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <p>{{$product['pd']['description']}}</p>
                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="{{$p['cart-url']}}">Add to Cart</a>
                                                                        <ul class="d-flex">
																		<li><a href="#" onclick="quickViewProduct({{$productData}}); return false;" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single List Product End -->
												<?php
												}
												?>
                                                
                                            </div>
                                        </div>
										<!-- Products List End -->
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
						<?php
						}
						else{
						?>
                         <div class="row">
						   <div class="col-12">
						     <div class="shop-banner mb-35 mb-xs-20">
                                    <img src="assets/images/no-products.jpg" style="width: 871px; height: 459px;" alt="">
                                </div>
                                <div class="shop-banner-title">
                                    <h2>{{$samba}}</h2>
                                </div>
                             <h5>No products were found that match your search</h5>
							 <a href="{{url('shop')}}" class="btn" style="margin-top: 20px;">View all products</a>
						   </div>
						 </div>
						<?php
						}
						?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Section End -->
@stop