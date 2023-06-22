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
 	 
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/fairyskin/resources/views/index.blade.php ENDPATH**/ ?>