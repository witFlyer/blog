<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/css/button.css"/>
		<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/Public/css/Admin/style.css">
		<script src="/Public/js/jquery-2.1.0.min.js"></script>
		<script src="/Public/js/common.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<a href="<?php echo U('Index/index');?>" class="navbar-brand"><i class="fa fa-desktop"></i><?php echo get_system_config("SYSTEM_NAME");?></a>
			</div>
			<div id="navbar-collapse-6" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<a href="<?php echo U('article/index');?>" class="nav-btn"><i class="fa fa-file-text"></i><span>文章</span></a>
					<a href="" class="nav-btn"><i class="fa fa-pencil-square-o"></i><span>问卷</span></a>
					<a href="" class="nav-btn"><i class="fa fa-cogs bigger-100"></i><span>设置</span></a>
					<a href="<?php echo U('Login/login_out');?>" class="nav-btn out"><i class="fa fa-sign-out bigger-100"></i><span class="out">退出</span></a>
				</ul>
			</div>
		</nav>
		<main class="mian_container">
		</main>
	</body>
</html>