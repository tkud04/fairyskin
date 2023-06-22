<?php $__env->startSection('title',"Welcome"); ?>

<?php $__env->startSection('content'); ?>


<?php echo $__env->make('banner',['banners' => $banners], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <!--Banner section start-->
 <?php
  $leftSlide = $homeSlides['left'];
  $middleSlide = $homeSlides['middle'];
  $rightSlide = $homeSlides['right'];
 ?>
 <div class="banner-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="<?php echo e($leftSlide['url']); ?>">
                               <img src="<?php echo e($leftSlide['img']); ?>" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <a href="<?php echo e($middleSlide['url']); ?>">
                               <img src="<?php echo e($middleSlide['img']); ?>" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                        <a href="<?php echo e($rightSlide['url']); ?>">
                               <img src="<?php echo e($rightSlide['img']); ?>" alt="">
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Banner section end-->
 	 
        <?php echo $__env->make('top-deals',['products' => $topDeals], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
        <?php echo $__env->make('products-tab',['products' => $tabProducts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Call To Action section start-->
        <div class="cta-section section bg-image pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-40"
            data-bg="assets/images/bg/cta-bg.jpg">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="cta-content">
                            <h3>Subscribe to our <span>Mailing</span> List</h3>
                            <p><span>Subcribe to the Fairyskin mailing list to receive update on new arrivals,</span>
                                <span>special offers and other discount information.</span></p>
                            <div class="cta-form">
                                <form id="mc-form" class="mc-form">
                                    <input id="mc-email" type="email" autocomplete="off"
                                        placeholder="Your email address here" />
                                    <button id="mc-submit" class="cta-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Call To Action section end-->

        <?php echo $__env->make('products-slide',['products' => $tabProducts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('home-blog',['posts' => $posts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/fairyskin/resources/views/index.blade.php ENDPATH**/ ?>