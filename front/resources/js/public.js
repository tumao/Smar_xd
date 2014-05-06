// /*/*$(function(){
	
	
// 	var href = $('.hd_user_info a').attr('href');
// 	$('.hd_user_info a:first').attr('href', href+'?qt='+Date.parse(new Date()));
	
// 	/**
// 	 * 微信扫描区
// 	 */
// 	var timer = null;
// 	$('#weixin').hover(function(){
// 		clearInterval(timer);
//         $('#weixin .popwxour').show();
// 	},function(){
// 		clearInterval(timer);
// 		timer = setTimeout(function(){
//             $('#weixin .popwxour').hide();
//         },500);
// 	});
	
// 	/**
// 	 * 搜索栏
// 	 */
// 	$('#searchButton').click(function(){
// 		// $('#typeList').show();
// 		var parent = $(this).parent();
// 		if (parent.hasClass("active")) {
// 			parent.removeClass("active");
// 		} else {
// 			$(".cmd_wrap").removeClass("active");
// 			parent.addClass("active")
// 		}
// 		return false;
// 	});
// 	$('#typeList li').each(function(index){
// 		var url = ['/xt/list/search', '/zg/list/search', '/yxhh/list/search', '/simu/search/index', '/bankpro/list/index', '/wenda/search'];
// 		$(this).click(function(){
// 			$('#selected_txt').text($(this).text());
// 			$('#serachType').val(index);
// 			$('#searchForm').attr('action', url[index]);
// 			if($(this).hasClass('cur') && $('#j_search_keyword').val()==''){
// 			    $('#searchForm').attr('target', '_self');
// 			}
// 		});
// 	});
// 	$(document).click(function(event){
// 		$(this).find('.cmd_wrap.active').removeClass('active');
// 	});
// //	$(document).click(function(){ $(this).find('#searchButton').parent().removeClass("active"); });
	
// 	/**
// 	 * 顶部城市选择框城市适配
// 	 */
// 	$('#j_city .city_hd a.city_link').text(function(){
// 		city_id = $.cookie('cityId');
// 		city_name = '';
// 		if (null == city_id) {
// 			city_name = "全国";
// 		} else {
// 			for (var p in global.citys) {
// 				var citys = global.citys[p];
// 				var city = citys[city_id];
// 				if (city) {
// 					city_name = city;
// 					break;
// 				}
// 			}
// 		}
// 		return city_name;
// 	});
	
// 	/*收藏功能*/
// 	var $j_collect = $("#j_collect"),
// 		addFavorite = function (obj){  
// 		    if (document.all){  
// 		        try{  
// 		            window.external.addFavorite(window.location.href,document.title);  
// 		        }catch(e){  
// 		            alert( "该浏览器不支持该收藏功能\n\n请使用Ctrl+D[window]或cmd+D[Mac]进行添加" );  
// 		        }  
		 
// 		    }else if (window.sidebar){  
// 		        //window.sidebar.addPanel(document.title, window.location.href, "");最新版不支持该函数了
// 		        obj.attr("rel", "sidebar");
// 	            obj.attr("title", document.title);
// 	            obj.attr("href", window.location.href);  
// 		     }else{  
// 		        alert( "该浏览器不支持该收藏功能\n\n请使用Ctrl+D[window]或cmd+D[Mac]进行添加" );  
// 		    }  
// 		};
// 	$j_collect.bind('click',function(e){
// 		addFavorite($(this));
// 	});
	
// 	/*选中城市的交互效果*/
// 	var $j_city = $("#j_city .city_hd span,#j_city .city_bd");
	
// 	$j_city.hover(function(e){
// 		$("#j_city").addClass("active");
// 	},function(e){
// 		$("#j_city").removeClass("active");
// 	});
	
// 	/*点击城市列表的事件处理*/
// 	$j_city =  $("#j_city");
// 	var  $city_link = $j_city.find(".city_link");
// 	$j_city.delegate("li","click",function(e){
// 		$city_link.text($(this).text());
// 		$j_city.removeClass("active");
// 	});
	
// });


















*/*/