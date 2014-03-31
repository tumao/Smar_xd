$(function(){
	//part0
	/**
	 * 综合TAB切换
	 */
	$('#md_idx_polymeric .prod_list li').each(function(index){
		$(this).click(function(){
			$(this).siblings().find('a').removeClass("active");
			$(this).find('a').addClass("active");
			$('.po_2 .po_wrap').hide().eq(index).show();
		});
	});
	
	$('#md_idx_polymeric .slider_bottom .sb_list li').each(function(index){
		if(index>=3) return;
		$(this).click(function(){
			$(this).addClass("on").siblings().removeClass("on");
			$('.licai_wrap .share_content').hide().eq(index).show();
		});
	});
	
	/**
	 * 登陆面板 
	 */
	$.get('/public/home/part0LoginPanel', {qt:Date.parse(new Date())}, function(html){
		if(html!='')
		{
			$('.f_fl.po_3').replaceWith(html);
		}
	});
	
	/**
	 * 综合搜索
	 */
	$(document).on('click', '.cmd_wrap', function(e){
		var target = $(this);
		
		if(target.hasClass('active')){
			target.removeClass('active');
		}else{
			$(".cmd_wrap,.search_select").removeClass("active");
			target.addClass('active');
		}  
		e.stopPropagation();
	});
	
	$(document).click(function(event){
		$(this).find('.cmd_wrap.active').removeClass('active');
	});

	$(document).on('click', '.cmd_con li', function(e){
		var target = $(this);
		var value = target.attr('data-show') || target.text();
		target.parent().parent().parent().find('input').val(value);
	});
	
	//part1
	/**
	 * 热门产品TAB切换
	 */
	$('#md_idx_poar_prod .nav_list li').each(function(index){
		var url = ['', '/public/home/part14', '/public/home/part11', '/public/home/part12', '/public/home/part13'];
		$(this).click(function(){
			var node = $('.hotlist').eq(index);
			if(node.html()=='')
			{
				$.get(url[index], {}, function(html){
					node.html(html);
				});
			}
			node.show().siblings('.hotlist').hide();
			
			$(this).addClass('on').siblings('li').removeClass('on');
		});
	});
	
	//自动补全框显示框重写
     $.ui.autocomplete.prototype._renderItem=function (ul, item) {
    	 var _val=item.value.split(',');
	     return $("<li></li>").data("item.autocomplete", item).append("<a href='/simu/manager/detail/id/"+_val[0]+"' target='_blank'><span style='width:40%;display: inline-block;'>" + _val[1] + "</span><span style='width:60%;display: inline-block;'>"+_val[2]+"</span></a>").appendTo(ul);
	 };
	 
	 $(".search-box .search-button").click(function(){
	 	if($("#keyword").val()=='输入罗伟广或LWG'){
	 		return false;
	 	}
	 });
	 
	$('#comSerBtn').click(function(){
		if($('#autoSimuCom').val() == '私募公司/拼音'){
			window.location.href = 'http://www.jinfuzi.com/simu/company/';
		}else{
			$('#comSerForm').submit();
		}
	});
	
	
	//part2
	/**
	 * 业务TAB切换
	 */
	$('#md_idx_sers_bat .nav_list li').each(function(index){
		var url = ['', '/public/home/part21', '/public/home/part22', '/public/home/part23'];
		$(this).click(function(){
			var node = $('.bizlist').eq(index);
			if(node.html()=='')
			{
				$.get(url[index], {}, function(html){
					node.html(html);
				});
			}
			node.show().siblings('.bizlist').hide();
			
			$(this).addClass('on').siblings('li').removeClass('on');
		});
		
	});	
	
	/**
	 * 证券期货搜索框
	 */
	$('.sear_form').each(function(){
		var form =  $(this);
		/*form.find('.i_arrow').click(function(e){
			form.find('.city_wrap').show();
			return false;
		});
		form.find('.city_sel').click(function(){
			$(this).siblings('.city_wrap').show();
			return false;
		});*/
		
		form.find('.city_sel').click(function(){
			$(this).parent().addClass('active');
			return false;
		});
		
		form.find('.city_wrap .city_link').click(function(){
//			form.find('.cmd_wrap ').removeClass('active');
			form.find('.city_sel').val($(this).text());
			form.find('.sear_sub').attr('href', $(this).attr('link'));
		});
		
		var city_id = $.cookie('cityId');
		if(city_id!=null){
			var obj = form.find(".city_link[city="+city_id+"]");
			form.find('.city_sel').val(obj.text());
			form.find('.sear_sub').attr('href', obj.attr('link'));
		}
	});
	
	//part4
	/**
	 * V5广告位，读取成功后替换默认结果
	 */
	$.get('/public/home/part4AdPos', {}, function(html){
		if(html!='')
		{
			$('#adPos').html(html);
    		$('#v5Form').rsvform(
    			{name:'Reserve_name', phone:'Reserve_phone'}, 
				{biz_type:1, type:2, uid:$('#rsv_uid').val()}
			);
		}
		else
		{
			$('#v5Form').rsvform(
				{name:'Reserve_name', phone:'Reserve_phone'}, 
				{biz_type:1, type:1}
			);
		}
	});
	
	/*理财顾问动态列表的滚动*/
	var	$active_list = $("#j_newsList"),
		lineHeight   = $active_list.find("li:first").height(),
		scrollTimer  = null;
		
	var	listScroll = function(list){
		$active_list.animate({
			"marginTop" : (-lineHeight)+"px"
		},500,function(){
			$active_list.css({
				"marginTop" : 0
			}).find("li:first").appendTo($active_list);
		});	
	};
	
	$active_list.hover(function(e){
		clearInterval(scrollTimer);	
	},function(e){
		scrollTimer = setInterval(function(){
			listScroll();	
		},2000);
	}).trigger("mouseleave");
	
	/*稀缺小额预约的显示和隐藏*/
	var $id_polymeric = $("#md_idx_polymeric"),
	    $beijing = $id_polymeric.find(".xq_list").find("li");
	
	$beijing.hover(function(e){
		$(this).addClass("hover").find(".order").removeClass("order_hide");
	},function(e){
		$(this).removeClass("hover").find(".order").addClass("order_hide");
	});
	
	/*热门产品预约的显示和隐藏*/
	var $poar_prod = $("#md_idx_poar_prod");
		
	$poar_prod.delegate("li",'mouseenter',function(e){
		$(this).addClass("hover").find(".order").removeClass("order_hide");
	});
	$poar_prod.delegate("li",'mouseleave',function(e){
		$(this).removeClass("hover").find(".order").addClass("order_hide");
	});
	
	/*理财顾问在线咨询的显示和隐藏*/
	var $id_mony_adv = $("#md_idx_mony_adv"),
	    $rank_list   = $id_mony_adv.find(".rank_list");
	
	$rank_list.delegate("li","mouseenter",function(e){
		$(this).addClass("hover").find(".qq_link").removeClass("order_hide");
	});
	$rank_list.delegate("li","mouseleave",function(e){
		$(this).removeClass("hover").find(".qq_link").addClass("order_hide");
	});
	/*单击document后，隐藏城市框*/
	var $id_sers_bat = $("#md_idx_sers_bat"),
		$city_wrap   = $id_sers_bat.find(".city_wrap");
	
	/*$(document).bind("click",function(e){
		$city_wrap.hide();
	});*/
	
	/*
	 * 模拟placehold
	 * @param idName:元素的ID
	 * @param tip:提示的信息
	 * */
	var placeholder = function (idName, tip){
		var idName = '#'+idName;
		var obj = $(idName);
		if($.trim(obj.val()).length == 0) {
			obj.val(tip);
			obj.css("color", "#999");
		}
		obj.focus(function() {
			if(tip == $(this).val()) {
				$(this).val("");
				obj.css("color", "#000");
			}
		});
		obj.blur(function() {
			if($.trim($(this).val()).length == 0) {
				$(this).val(tip);
				obj.css("color", "#999");
			}
		});
	};
	placeholder('j_search_keyword','请输入关键字');
	placeholder('amount','不限');
	placeholder('run_time','不限');
	placeholder('j_jingli','输入罗伟广或LWG');
	placeholder('j_gongsi','输入千合资本或QHZB');
	
	/*优惠专区的交互效果*/
	var $yh_list = $("#j_youhuiList"),
		$yh_lis  = $yh_list.find("li");
		
	$yh_lis.hover(function(e){
		$(this).find(".yh_link").show();
	},function(e){
		$(this).find(".yh_link").hide();
	});
	
	/*理财问答的交互效果*/
	var $j_rtList = $("#j_rtList"),
		$rt_lis   = $j_rtList.find("li");
		
	$rt_lis.hover(function(e){
		$(this).find(".ask").show();
	},function(e){
		$(this).find(".ask").hide();
	});
	
	
});
/*window load事件处理轮播*/
$(window).bind("load",function(){
	/*热门推荐的轮播图交互效果*/
	$('#featured').jfz_animation_slider({
		animation: 'horizontal-push',
		bullets: true,
		pauseOnHover: true,
		startClockOnMouseOut: true,
		startClockOnMouseOutAfter: 500
	});
});
