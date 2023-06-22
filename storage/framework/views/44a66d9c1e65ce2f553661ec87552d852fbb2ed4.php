<?php
$user = null;
$c = [];
$cart = [];
$plugins = [];
?>


<?php $__env->startSection('title',"Not Found"); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('banner-2',['title' => 'Not Found'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- 404 Error Section Start -->
    <div class="404-error-section section pt-55 pt-lg-35 pt-md-40 pt-sm-35 pt-xs-30  pb-100 pb-lg-80 pb-md-70 pb-sm-40 pb-xs-35">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="error-wrapper text-center">
                            <div class="error-text">
                                <h1>404</h1>
                                <h2>Oops! PAGE NOT BE FOUND</h2>
                                <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
                            </div>
                            <div class="search-error">
                                <form action="#">
                                    <input placeholder="Search" type="text">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="error-button">
                                <a href="<?php echo e(url('/')); ?>">Back to home page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 Error Section End --> 
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/fairyskin/resources/views/errors/404.blade.php ENDPATH**/ ?>