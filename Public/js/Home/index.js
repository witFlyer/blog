$(document).ready(function(){
	$('#img_small').hover(function(){
		$('#img_big').stop().fadeIn();
	},function(){
		$('#img_big').stop().fadeOut();
	})
});