<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-Cn">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css">

	<script src="/Public/js/jquery-2.1.0.min.js"></script>
	<script src="/Public/js/Home/index.js"></script>
</head>
<body class="home-template custom-bg" style="background-image: url(/Public/img/background2.jpg)">
	<nav class="navbar navbar-ghost" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">
					<img src="/Public/img/logo.jpg" width="50" alt="logo" id="img_small">
					<img src="/Public/img/logo.jpg" width="250" alt="logo" id="img_big">
				</a>
			</div>
			<div id="global-navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active" role="presentation"><a href="<?php echo U('Index/index');?>">首页</a></li>
					<li role="presentation"><a href="">兴趣</a></li>
					<li role="presentation"><a href="<?php echo U('Album/index');?>">相册</a></li>
					<li role="presentation"><a href="">个人简历</a></li>
					<li role="presentation"><a href="<?php echo U('Index/game');?>"  target="_blank">小游戏</a></li>
				</ul>
				<p class="navbar-text qq">TEL：17092104420</p>
			</div>
		</div>
	</nav>
	<main id="post-page" class="container" role="main">
		<div class="row">
			<div class="col-md-10 col-md-push-1">
				<article class="panel post tag-about-ghost tag-ghost-in-depth tag-zhu-shou-han-shu">
					<header class="panel-heading post-header">
						<h1 class="post-title"><span id="title-hover">禁止 `ghost_foot` 助手输出 jQuery 链接</span></h1>
					</header>
					<section class="panel-body post-content">
						Ghost 提供了一个 ghost_foot 助手函数，用来在页面底部输出一些自定义的 JavaScript 代码。“插入自定义代码” 功能也需要这个助手函数才能起作用。但是，ghost_foot 助手默认每次都会默认输出一个指向自身目录下的 jQuery 文件的链接，如果我们使用了公共 CDN 加速服务（例如：BootCDN）或者商业的 CDN 加速的话，每次都要加载一个本地文件势必影响页面加载速度。

						为了解决这个问题，我们提供的 Ghost 中文版 对 ghost_foot 助手进行了改进，提供了是否输出 jQuery 链接的开关。下面看一下怎么使用吧。
						jquery 参数

						在 Ghost 中文版 中，通过为 ghost_foot 添加 jquery=false 就可以禁止输出 jQeury，代码如下：
					</section>
				</article>
				<nav class="row nav-posts">
					<div class="col-md-6">前一篇：<a href="">为博客增加“标签云”</a></div>
					<div class="col-md-6 text-right pull-right">后一篇：<a href="">为博客增加“标签云”</a>
					</div>
				</nav>
			</div>
		</div>
	</main>
	<footer class="container">
		<div class="row">
			<div id="footer-content">
				<section class="clearfix">
					<div class="col-md-6">
						<h3>合作站点：</h3>
						<dl>
							<dd><a href="">Bootstrap中文网</a></dd>
							<dd><a href="">Bootstrap中文网</a></dd>
							<dd><a href="">Bootstrap中文网</a></dd>
						</dl>
					</div>
					<div class="col-md-6">
						<h3>联系方式：</h3>
						<p class="footer-phone"><i class="fa fa-qq"></i>1263057565</p>
						<p class="footer-email"><i class="fa fa-envelope"></i>1263057565@qq.com</p>
					</div>
				</section>
				<section class="clearfix">
					<div class="col-md-6">
						<h3>合作伙伴：</h3>
						<dl>
							<dd><a href="">Bootstrap中文网</a></dd>
							<dd><a href="">Bootstrap中文网</a></dd>
							<dd><a href="">Bootstrap中文网</a></dd>
						</dl>
					</div>
					<div class="col-md-6">
						<h3>参与公司：</h3>
						<dl>
							<dd><a href="">Bootstrap中文网</a></dd>
							<dd><a href="">Bootstrap中文网</a></dd>
							<dd><a href="">Bootstrap中文网</a></dd>
						</dl>
					</div>
				</section>
			</div>
			<div id="social-icons" class="col-xs-12">
				<a href="" class="icon-gplus" target="_blank"><i class="fa fa-weibo fa-2x"></i>新浪微博</a>
			</div>
			<div id="copyrights" class="col-xs-12">
				<section class="copyright">All content copyright <a href="">Ghost 中文网</a> © 2015 • All rights reserved.</section>
				<section class="poweredby">All content copyright <a href="">陈业</a> © 2015 • All rights reserved.</section>
				<section class="beian"><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a> | 京公网安备11010802014853</section>
			</div>
		</div>
	</footer>
</body>
</html>
</body>
</html>