<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/Public/css/Login/login.css">
		<link rel="stylesheet" type="text/css" href="/Public/css/button.css">
		
		<script src="/Public/js/jquery-2.1.0.min.js"></script>
		<script src="/Public/js/common.js"></script>
		<script src="/Public/js/jquery.gritter.min.js"></script>
		<!--导入js文件-->
		<script type="text/javascript">
	function login(){
		if(check_form('form_login')){
			sendForm("form_login","<?php echo U('login/check_login');?>");
		}
	}
	$(document).ready(function(){
		var login_wall = $('#login_wall');
		var top = $(window).height()-login_wall.height()-100;
		var left = $(window).width()-login_wall.width();
		login_wall.css({'left':left/2,'top':top/2});
	});

</script>
	</head>
	<body>
		
		<div class="col-sm-4 well login_wall" id="login_wall">
			<div class="text-center"><img src="/Public/img/default.jpg" alt="陈业" style="width: 100px;height: 100px;border-radius: 50px;overflow: hidden;"/></div>
			<form method="post" class="form-horizontal" style="margin-top: 10px;" id="form_login">
			<div class="form-group">
    			<label for="account" class="col-sm-3 control-label">账号：</label>
    			<div class="col-sm-8">
   					<input type="text" class="form-control" id="account" name="account" check="required" msg="账号必须">
   				</div>
  			</div>
  			<div class="form-group">
    			<label for="password" class="col-sm-3 control-label">密码：</label>
    			<div class="col-sm-8">
    				<input type="password" class="form-control" id="password" name="password" check="required" msg="密码必须">
    			</div>	
  			</div>
  			<div class="form-group">
  				<div class="col-sm-offset-3 col-sm-9">
    			 <span class="button-wrap">
   				   <input type="button" class="button button-pill button-raised button-primary" value="登陆" onclick="login()">
   				 </span>
   				</div>
  			</div>
		</form>
		</div>
		
	</body>
</html>