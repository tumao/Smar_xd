/**
 * @author Administrator
 * 个人理财页面的脚本
 */
jQuery(function(){
	/*业务鼠标滑动效果*/
	var $home_mod_list = $("ul.home_mod_list"),
	    $home_mod_li   = $home_mod_list.find("li");
	
	$home_mod_li.hover(function(){
		$(this).addClass("on").siblings().removeClass("on");
	},function(){
		
	});
	
	/*客户资料的滚动条展示*/
	$(".gwcons").niceScroll({
		cursorcolor : "#fff",
		cursorwidth : "3px",
		autohidemode:false,
		background  : "#006197"
	});
});
