
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
   foreach($banners as $b){
  ?>
	<!--Hero Item start-->
	<div class="hero-item bg-image" data-bg="{{$b['img']}}">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<!--Hero Content start-->
					<div class="{{$b['class']}}">

						<h2>{{$b['top-text']}}</h2>
						<h1>{{$b['middle-text']}}</h1>
						<h3>{{$b['bottom-text']}}</h3>
						<a href="{{$b['url']}}">{{$b['action-text']}}</a>

					</div>
					<!--Hero Content end-->

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