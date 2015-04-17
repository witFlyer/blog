$(document).ready(function(){
	$('#img_small').hover(function(){
		$('#img_big').stop().fadeIn();
	},function(){
		$('#img_big').stop().fadeOut();
	})
	
	var left = $('#weixin').offset().left+150;
	var top = $('#weixin').offset().top-190;
	var obj = $('#weixin_logo');
	obj.css({'top':top,'left':left});
	
	$('#weixin').hover(function (){
		var div = $('#weixin_logo');
		div.stop().animate({
			opacity:1,
			left:left+30
		},400);		
	},function(){
		var div = $('#weixin_logo');
		div.stop().animate({
			left:left,
			opacity:0
		},400);
	});
});