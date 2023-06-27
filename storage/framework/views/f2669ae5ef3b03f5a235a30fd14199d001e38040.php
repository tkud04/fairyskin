 <?php
 $newProducts = $products['new'];
 $saleProducts = $products['sale'];
 $featuredProducts = $products['featured'];
 ?>
 <!--Product section start-->
 <div class="product-section section pt-100 pt-lg-70 pt-md-65 pt-sm-60 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">

                <div class="row">
                    <div class="col">
                        <div class="product-tab-menu mb-40 mb-xs-20">
                            <ul class="nav">
                                <li><a class="active" data-bs-toggle="tab" href="#products"> New Products</a></li>
                                <li><a data-bs-toggle="tab" href="#onsale"> On Sale</a></li>
                                <li><a data-bs-toggle="tab" href="#featureproducts"> Feature Products</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="products">
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
                                <?php
                         foreach($newProducts as $product){

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
                                    <div class="col-lg-3">
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-30">
                                            <div class="product-img">
                                                <a href="<?php echo e($p['url']); ?>">
                                                    <img src="<?php echo e($p['img']); ?>" alt="">
                                                </a>
                                                <span class="descount-sticker">-10%</span>
                                                <span class="sticker">New</span>
                                                <div class="product-action d-flex justify-content-between">
                                                    <a class="product-btn" href="<?php echo e($p['cart-url']); ?>">Add to Cart</a>
                                                    <ul class="d-flex">
                                                        <li><a href="#" onclick="quickViewProduct(<?php echo e($productData); ?>); return false;" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="<?php echo e($p['url']); ?>"><?php echo e($p['name']); ?></a></h3>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="price"><span class="new">&#8358;<?php echo e(number_format($product['pd']['amount'],2)); ?></span></h4>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <?php
                         }
                                    ?>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="onsale">
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
                                <?php
                         foreach($saleProducts as $product){

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
                                    <div class="col-lg-3">
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-30">
                                            <div class="product-img">
                                                <a href="<?php echo e($p['url']); ?>">
                                                    <img src="<?php echo e($p['img']); ?>" alt="">
                                                </a>
                                                <span class="descount-sticker">-10%</span>
                                                <span class="sticker">New</span>
                                                <div class="product-action d-flex justify-content-between">
                                                    <a class="product-btn" href="<?php echo e($p['cart-url']); ?>">Add to Cart</a>
                                                    <ul class="d-flex">
                                                        <li><a href="#" onclick="quickViewProduct(<?php echo e($productData); ?>); return false;" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="<?php echo e($p['url']); ?>"><?php echo e($p['name']); ?></a></h3>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="price"><span class="new">&#8358;<?php echo e(number_format($product['pd']['amount'],2)); ?></span></h4>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <?php
                         }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="featureproducts">
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
                                <?php
                         foreach($featuredProducts as $product){

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
                                    <div class="col-lg-3">
                                        <!-- Single Product Start -->
                                        <div class="single-product mb-30">
                                            <div class="product-img">
                                                <a href="<?php echo e($p['url']); ?>">
                                                    <img src="<?php echo e($p['img']); ?>" alt="">
                                                </a>
                                                <span class="descount-sticker">-10%</span>
                                                <span class="sticker">New</span>
                                                <div class="product-action d-flex justify-content-between">
                                                    <a class="product-btn" href="<?php echo e($p['cart-url']); ?>">Add to Cart</a>
                                                    <ul class="d-flex">
                                                        <li><a href="#" onclick="quickViewProduct(<?php echo e($productData); ?>); return false;" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="<?php echo e($p['url']); ?>"><?php echo e($p['name']); ?></a></h3>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="price"><span class="new">&#8358;<?php echo e(number_format($product['pd']['amount'],2)); ?></span></h4>
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
                    </div>
                </div>

            </div>
        </div>
        <!--Product section end--><?php /**PATH /Users/mac/repos/fairyskin/resources/views/products-tab.blade.php ENDPATH**/ ?>