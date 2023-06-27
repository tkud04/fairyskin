<!--Deal Of Product section start-->

<div class="deal-product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>Deals of the day</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tf-element-carousel" data-slick-options='{
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": true,
                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                        }' data-slick-responsive='[
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1,
                        "arrows": false,
                        "autoplay": true
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1,
                        "arrows": false,
                        "autoplay": true
                        }}
                        ]'>
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
                        

                            <!-- Single Deal Product Start -->
                            <div class="single-deal-product">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-img">
                                            <a href="<?php echo e($p['url']); ?>">
                                                <img src="<?php echo e($p['img']); ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="deal-product-content">
                                            <h3><a href="<?php echo e($p['url']); ?>"><?php echo e($p['name']); ?></a></h3>
                                            <div class="ratting">
                                                <?php 
                                                 for($i = 0; $i < $p['rating']; $i++){
                                                ?>
                                                <i class="fa fa-star"></i>
                                                <?php
                                                 }
                                                ?>
                                            </div>
                                            <h4 class="price"><span class="new">&#8358;<?php echo e(number_format($p['amount'],2)); ?></span></h4>
                                            <p><?php echo e($p['description']); ?></p>
                                            <div class="actoion-box">
                                                <div class="product-action d-flex justify-content-between">
                                                    <a class="product-btn" href="#">Add to Cart</a>
                                                    <ul class="d-flex">
                                                        <li><a href="#" onclick="quickViewProduct(<?php echo e($productData); ?>); return false;" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Deal Product End -->
                            <?php
                            }
                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Deal Of Product section end--><?php /**PATH /Users/mac/repos/fairyskin/resources/views/top-deals.blade.php ENDPATH**/ ?>