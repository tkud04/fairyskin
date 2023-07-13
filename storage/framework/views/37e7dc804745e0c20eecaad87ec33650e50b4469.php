
<!--slider section start-->
<div class="hero-section section position-relative">

<div class="tf-element-carousel slider-nav" data-slick-options='{
"slidesToShow": 1,
"slidesToScroll": 1,
"infinite": true,
"arrows": true,
"dots": true
}' data-slick-responsive='[
{"breakpoint":768, "settings": {
"slidesToShow": 1
}},
{"breakpoint":575, "settings": {
"slidesToShow": 1,
"arrows": false,
"autoplay": true
}}
]'>
  <?php
   $showHeroContent = true;

   foreach($banners as $b){
  ?>
	<!--Hero Item start-->
	<div class="hero-item bg-image" data-bg="<?php echo e($b['img']); ?>">
		<div class="container">
			<div class="row">
				<div class="col-12">
                    
				   <?php
				    if($showHeroContent){
				   ?>
					<!--Hero Content start-->
					<div class="<?php echo e($b['class']); ?>">

						<h2><?php echo e($b['top_text']); ?></h2>
						<h1><?php echo e($b['middle_text']); ?></h1>
						<h3><?php echo e($b['bottom_text']); ?></h3>
						<a href="<?php echo e($b['url']); ?>"><?php echo e($b['action_text']); ?></a>

					</div>
					<!--Hero Content end-->
					<?php
                     }
					?>

				</div>
			</div>
		</div>
	</div>
	<!--Hero Item end-->
	<?php
   }
	?>

	
</div>

</div>
<!--slider section end--><?php /**PATH /Users/mac/repos/fairyskin/resources/views/banner.blade.php ENDPATH**/ ?>