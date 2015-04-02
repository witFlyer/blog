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
		<main class="main_container">
			<div class="container_box">
				<div class="main_left" id="main_left">
					<div id="user_info">
						<span>当前用户：<?php echo (session('user_name')); ?></span>
					</div>
					<div id="left_head" onclick="toggle_left_menu()">
						<span>文章</span>
						<b class="fa fa-angle-down pull-right" id="left_menu_icon"></b>
					</div>
					<ul id="left_menu" class="nav nav-list">
						<li>
							<a href="<?php echo U('Article/index');?>">
								<i class="fa fa-angle-right"></i>
								<span class="menu_text">文章列表</span>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-angle-right"></i>
								<span class="menu_text">写文章</span>
							</a>
						</li>
						<li>
							<a href="<?php echo U('article_tag');?>">
								<i class="fa fa-angle-right"></i>
								<span class="menu_text">添加分类</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="main_content">
					<div id="breadcrumbs" class="breadcrumbs">
						<ul class="breadcrumb">
							<li><i class="fa fa-home home-icon"></i><a href="/">Home</a></li>
							<li>文章</li>
							<li>文章列表</li>
						</ul>
					</div>
					<div class="page_content">
						<div class="row">
							<div class="col-xs-12">
								<?php echo W('PageHeader/Render',array('文章管理','N'));?>
								<div class="operate panel panel-default">
									<div class="panel-body">
										<div class="pull-left">
											<a onclick="go_return_url()" class="btn btn-info">返回</a>
										</div>
										<div class="pull-right">
											<a onclick="add()" class="btn btn-primary">新增</a>
											|
											<a onclick="save()" class="btn btn-success">保存</a>
											|
											<a onclick="del()"  class="btn btn-danger">删除</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4 sub_left_menu">
										<div class="well">
											<ul class="tree_menu">
												<li><a node=""><i class="fa fa-angle-right level1"></i><span>情感</span></a></li>
												<li><a node=""><i class="fa fa-angle-right level1"></i><span>情感</span></a></li>
												<li><a node=""><i class="fa fa-angle-right level1"></i><span>情感</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>