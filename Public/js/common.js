//检查表单
function check_form(form_id){
	var check_flag = true;
	$('#'+form_id+":input").each(function (i){
		if($(this).attr('check')){
			if(!validate($(this).val(),$(this).attr('check'))){
				ui_error($(this).attr('msg'));
				$(this).focus();
				check_flag = false;
				return check_flag;
			}
		}
	})
	return check_flag;
}
function validate(data,dataType){
	if(dataType.indexOf('|')){
		tmp = dataType.split('|');
		dataType = tmp[0];
		data2 = tmp[1];
		switch(dataType){
			case "required":
				if(data==''){
					return false;
				}else{
					return true;
				}
				break;
			case "email":
				var reg = /^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g;
				return reg.test(data);
				break;
			case "number":
				var reg = /^[0-9]+\.{0,1}[0-9]{0,3}$/;
				return reg.test(data);
				break;
			case "egt":
				data2 = $('#'+data2).val();
				return data>=data2;
				break;
		}
	}
}
//弹出错误提示
function ui_error(msg){
	$.gritter.add({
		text 	: "<h5>"+msg+"</h5>",
		sticky	: false,
		time	: 2000,
		class_name:'gritter-light gritter-error gritter-center'
	});
}
function ui_alert(msg, callback) {
	bootbox.dialog({
		message : "<h5>" + msg + "<h5>",
		buttons : {
			danger : {
				label : "确定",
				className : "btn-primary",
				callback : function() {
					callback();
				}
			}
		}
	});
}

//提交表单
function sendForm(formId,post_url,return_url){
	if($('#ajax').val()==1){
		var vars = $('#'+formId).serialize();
		$.ajax({
			type	: "POST",
			url		: post_url,
			data	: vars,
			dataType: "json",
			success	: function (data){
				if(data.status){
					ui_alert(data.info,function (){
						if(return_url){
							location.href = return_url;
						}
					})
				}else{
					return data.info;
				}
			}
		});
	}else{
		$('#'+formId).attr('action',post_url);
		if(return_url){
			setCookie('return_url',return_url);
		}
		$('#'+formId).submit();
	}
}
//隐藏搜索栏
function close_adv_search(){
	$('#adv_search').addClass('displayNone');
	$('#adv_search').slideUp();
	$('#toggle_adv_search_icon').removeClass('fa-chevron-up');
	$('#toggle_adv_search_icon').addClass('fa-chevron-down');
}
//触发搜索栏
function toggle_adv_search(){
	if($('#adv_search').attr('class').indexOf('displayNone')<0){
		$('#adv_search').addClass('displayNone');
		$('#adv_search').slideUp();
		$('#toggle_adv_search_icon').removeClass('fa-chevron-up');
		$('#toggle_adv_search_icon').addClass('fa-chevron-down');
	}else{
		$('#adv_search').removeClass('displayNone');
		$('#adv_search').slideDown();
		$('#toggle_adv_search_icon').removeClass('fa-chevron-down');
		$('#toggle_adv_search_icon').addClass('fa-chevron-up');
	}
}
//高级搜索
function submit_adv_search(){
	$('#search_key').val(1);
	$('#form_adv_search').submit();
}
$(document).ready(function(){
	//左侧菜单了动画效果
	$('#left_menu li a').each(function (){
		$(this).hover(function (){
			$(this).css('color','#1590CD');
			$(this).stop().animate({
				paddingLeft:'20px',
			},450);
		},function(){
			$(this).css('color','#575757');
			$(this).stop().animate({
				paddingLeft:'7px',
			},400);
		});
	});
	$('#left_menu .submenu li a').each(function (){
		$(this).hover(function (){
			$(this).stop();
		},function(){
			$(this).stop();
		});
	});
	$('.navbar-right a').each(function() {
		$(this).hover(function(){
			$(this).css({
			backgroundColor:"#1590CD",
			boxShadow:"0 0 2px #ddd"
		});
		$(this).find('i').css("color","#fff");
		$(this).find('span').css("color","#fff");
		if($(this).hasClass('out')){
			$(this).css("backgroundColor","#B52D26");
		}
		},function(){
			$(this).css({
			backgroundColor:"#fff",
			boxShadow:"none"
		});
		$(this).find('i').css("color","#1590CD");
		$(this).find('span').css("color","#1590CD");
		$(this).find('span.out').css("color","#B52D26");
		$(this).find('i.fa-sign-out').css("color","#B52D26");
		})	
	});
	if($('#search_key').val()==1){
		$('#adv_search').css('display','block');
	}
});


















