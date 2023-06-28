
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
   $showHeroContent = false;

   foreach($banners as $b){
  ?>
	<!--Hero Item start-->
	<div class="hero-item bg-image" data-bg="{{$b['img']}}">
		<div class="container">
			<div class="row">
				<div class="col-12">
                    
				   <?php
				    if($showHeroContent){
				   ?>
					<!--Hero Content start-->
					<div class="{{$b['class']}}">

						<h2>{{$b['top_text']}}</h2>
						<h1>{{$b['middle_text']}}</h1>
						<h3>{{$b['bottom_text']}}</h3>
						<a href="{{$b['url']}}">{{$b['action_text']}}</a>

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
<!--slider section end-->