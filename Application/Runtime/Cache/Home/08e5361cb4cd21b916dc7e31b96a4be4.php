<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <title>Slicebox - 3D图片滑块效果</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/Public/css/Album/demo.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/Album/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/Album/custom.css" />
		<style>
		h1 {
			margin-top: 50px;
			font-family: 'Microsoft Yahei';
			font-size: 36px;
		}
		</style>			
		<script type="text/javascript" src="/Public/js/Album/modernizr.custom.46884.js"></script>
		<link rel="stylesheet" type="text/css" href="/Public/css/button.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css">
	</head>
	<body style="background-image: url(/Public/img/background2.jpg)">
		<div class="container">
			<div style="padding-top:20px;padding-left:20px;width:100%;"><a class="button button-large button-plain button-border button-circle" href="<?php echo U('Index/index');?>" style="z-index:99999;margin-top:0px;"><i class="fa fa-reply"></i></a></div>
			<h1>My Photo</h1>
			<div class="more"></div>
			<div class="wrapper">
				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="http://www.cnblogs.com/lhb25/" target="_blank"><img src="/Public/css/Album/img/1.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>林允儿</h3>
						</div>
					</li>
					<li>
						<a href="http://www.cnblogs.com/lhb25/" target="_blank"><img src="/Public/css/Album/img/2.jpg" alt="image2"/></a>
						<div class="sb-description">
							<h3>Honest 林允儿</h3>
						</div>
					</li>
					<li>
						<a href="http://www.cnblogs.com/lhb25/" target="_blank"><img src="/Public/css/Album/img/3.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Brave 林允儿</h3>
						</div>
					</li>
					<li>
						<a href="http://www.cnblogs.com/lhb25/" target="_blank"><img src="/Public/css/Album/img/4.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Affectionate 林允儿</h3>
						</div>
					</li>
					<li>
						<a href="http://www.cnblogs.com/lhb25/" target="_blank"><img src="/Public/css/Album/img/5.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Faithful 林允儿</h3>
						</div>
					</li>
					<li>
						<a href="http://www.cnblogs.com/lhb25/" target="_blank"><img src="/Public/css/Album/img/6.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Groundbreaking 林允儿</h3>
						</div>
					</li>
					<li>
						<a href="http://www.cnblogs.com/lhb25/" target="_blank"><img src="/Public/css/Album/img/7.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Selfless 林允儿</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

			</div><!-- /wrapper -->
			<div class="footer-banner" style="width:728px; margin:30px auto"></div>
		</div>
		<script type="text/javascript" src="http://cdn.staticfile.org/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/js/Album/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
	</body>
</html>