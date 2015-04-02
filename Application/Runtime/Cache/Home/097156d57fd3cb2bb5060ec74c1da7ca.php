<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn">
	<head>
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset = UTF-8" />
		<title>HTML5 模拟现实物理效果，感受 Web 技术魅力</title>
		<style>
			body {
				overflow: hidden;
				background-color: #000000;
				user-select: none;
				-webkit-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				-ms-user-select: none;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="/Public/css/button.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css">
	</head> 
	<body> 
	<div style="width:100%;"><a class="button button-large button-plain button-border button-circle" href="<?php echo U('Index/index');?>" style="z-index:99999;"><i class="fa fa-reply"></i></a></div>
	<div id="canvas"></div>
	<!-- <div class="footer-banner" style="position:absolute;bottom:-300px;left:-200px;width:728px; margin:30px auto"></div> -->
	<script src="/Public/js/Game/protoclass.js"></script>
	<script src='/Public/js/Game/box2d.js'></script>
	<script src='/Public/js/Game/Main.js'></script>
	</body>
</html>