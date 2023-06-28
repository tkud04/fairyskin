<!--List Product section start-->
<div class="list-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-30 pb-lg-10 pb-md-0 pb-sm-0 pb-xs-0">

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
            <div class="row">
                <div class="col-12">
                    <!--List Product Section Title Start-->
                    <div class="list-product-section-title mb-30">
                        <h2>Top rated </h2>
                    </div>
                    <!--List Product Section Title End-->
                </div>
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
                         foreach($productGroups['top-rated'] as $pg){

                        ?>
                        <div class="list-product-group">
                            <?php
                            for($i = 0; $i < count($pg); $i++){
                                $product = $pg[$i];

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
                            ?>
                            <!-- Single List Product Start -->
                            <div class="single-list-product">
                                <div class="product-image">
                                    <a href="<?php echo e($p['url']); ?>">
                                        <img src="<?php echo e($p['img']); ?>" alt="<?php echo e($p['name']); ?>"/>
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html"><?php echo e($p['name']); ?></a></h3>
                                    <h4 class="price"><span class="new">&#8358;<?php echo e(number_format($p['amount'],2)); ?></span></h4>
                                </div>
                            </div>
                            <!-- Single List Product End -->
                            <?php
                            }
                            ?>
                        </div>
                        <?php
                         }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
            <div class="row">
                <div class="col-12">
                    <!--List Product Section Title Start-->
                    <div class="list-product-section-title mb-30">
                        <h2>On sale</h2>
                    </div>
                    <!--List Product Section Title End-->
                </div>
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
                         foreach($productGroups['sale'] as $pg){

                        ?>
                        <div class="list-product-group">
                            <?php
                            for($i = 0; $i < count($pg); $i++){
                                $product = $pg[$i];

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
                            ?>
                            <!-- Single List Product Start -->
                            <div class="single-list-product">
                                <div class="product-image">
                                    <a href="<?php echo e($p['url']); ?>">
                                        <img src="<?php echo e($p['img']); ?>" alt="<?php echo e($p['name']); ?>"/>
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html"><?php echo e($p['name']); ?></a></h3>
                                    <h4 class="price"><span class="new">&#8358;<?php echo e(number_format($p['amount'],2)); ?></span></h4>
                                </div>
                            </div>
                            <!-- Single List Product End -->
                            <?php
                            }
                            ?>
                        </div>
                        <?php
                         }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-40 mb-sm-30 mb-xs-20">
            <div class="row">
                <div class="col-12">
                    <!--List Product Section Title Start-->
                    <div class="list-product-section-title mb-30">
                        <h2>Trending items</h2>
                    </div>
                    <!--List Product Section Title End-->
                </div>
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
                         foreach($productGroups['trending'] as $pg){

                        ?>
                        <div class="list-product-group">
                            <?php
                            for($i = 0; $i < count($pg); $i++){
                                $product = $pg[$i];

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
                            ?>
                            <!-- Single List Product Start -->
                            <div class="single-list-product">
                                <div class="product-image">
                                    <a href="<?php echo e($p['url']); ?>">
                                        <img src="<?php echo e($p['img']); ?>" alt="<?php echo e($p['name']); ?>"/>
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html"><?php echo e($p['name']); ?></a></h3>
                                    <h4 class="price"><span class="new">&#8358;<?php echo e(number_format($p['amount'],2)); ?></span></h4>
                                </div>
                            </div>
                            <!-- Single List Product End -->
                            <?php
                            }
                            ?>
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
<!--List Product section end--><?php /**PATH /Users/mac/repos/fairyskin/resources/views/products-slide.blade.php ENDPATH**/ ?>