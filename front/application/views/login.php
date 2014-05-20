<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="renderer" content="webkit">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="qc:admins" content="2037021714621665216375" /><!--QQConnect-->
    <link rel="Shortcut Icon" href="/static/cmpt/root/image/shortico.png" />
	<link rel="stylesheet" type="text/css" href="/static/css/common/reset.css" />
	<link rel="stylesheet" type="text/css" href="/static/css/common/global.css" />
	<link rel="stylesheet" type="text/css" href="/static/css/common/common.css" />
	<link rel="stylesheet" type="text/css" href="/static/plugin/JFZ_Dialog/css/jfz-dialog2.css" />
	<link rel="stylesheet" type="text/css" href="/static/css/public/jfz_denglu.css" />
	<script type="text/javascript" src="/assets/8b5bc196/jquery.min.js"></script>
	<script type="text/javascript" src="/static//plugin/jquery.cookie.js"></script>
	<script type="text/javascript" src="/static//plugin/JFZ_Dialog/js/JFZ_dialog2.js"></script>
	<script type="text/javascript" src="/static//plugin/jquery.jfz.rsvform.js"></script>
	<script type="text/javascript" src="/static/js/common/citys.js"></script>
	<script type="text/javascript" src="/static/js/common/public.js"></script>
	<title>跃盈财富 - 登录</title>
</head>
<body>
	<!--logo模块-->
<div id="md_login_banner">
	<div class="layout wrap clearfix">
		<div class="f_fl logo">
			<a href="/"><i class="f_ib i_logo"></i></a>		</div>
		<div class="f_fr link">
			<i class="f_ib i_back"></i>
			<a class="back" href="/">返回金斧子首页</a>	
		</div>
	</div>					
</div>
<!--主体模块-->
<div id="md_login_main">
	<div class="login_wrap">
			<div class="layout wrap">
			<div class="err_info">
				<div class="info_type">
					<i class="f_ib i_com i_err"></i><span class="info_txt" id="err_msg">该帐户名不存在</span>
				</div>
				<div class="info_tip">
				</div>	
			</div>
			<div class="f_fr main">
				<div class="tab_wrap clearfix">
					<ul class="tab_list">
						<li class="active">会员登录</li>
						<li class="last"><a href="/public/register.html">免费注册</a></li>
					</ul>	
				</div>
				<div class="form_wrap">
					<form id="login-form" action="/public/login.html" method="post">					<div class="user_wrap">
						<input class="user_name" id="id_user_name" autocomplete="off" name="LoginForm[username]" type="text" />						<i class="f_ib icon"></i>
						<label for="id_user_name" class="placeholder">邮箱/用户名/手机号</label>
					</div>
					<div class="pwd_wrap">
					   	<input class="pwd" id="id_pwd" autocomplete="off" name="LoginForm[password]" type="password" /> 
						<!-- <input class="pwd" id="id_pwd" autocomplete="off" onfocus="this.type=&#039;password&#039;" name="LoginForm[password]" type="text" /> -->
						<i class="f_ib icon"></i>
						<label for="id_pwd" class="placeholder">密码</label>
					</div>
					<div class="fnc_wrap">
						<input class="rmb_name" name="LoginForm[rememberMe]" id="LoginForm_rememberMe" type="hidden" />						<i class="f_ib icon_com "></i>
						<label for="rmb_name">记住用户名</label>
						<input class="rmb_login" name="LoginForm[autoLogin]" id="LoginForm_autoLogin" type="hidden" />						<i class="f_ib i_login icon_com"></i>
						<label for="rmb_login">下次自动登录</label>
					</div>
					<div class="btn_wrap">
						<input type="submit" name="" id="" class="btn_sub" value=""/>
						<a class="fgt_pwd" href="/public/password/index.html">忘记密码</a>					</div>
					</form>				</div>
				<div class="weibo_wrap">
					<span class="dl_info">合作帐号登录：</span>
					<a class="f_ib wb_com wb_qq" href="/login/qq.html"></a>					<a class="f_ib wb_com wb_sina" href="/login/sina.html"></a>	
				</div>		
			</div>
			<!-- <ul class="list">
				<li class="active"></li>
				<li></li>
				<li></li>
			</ul> -->
		</div>
	</div>
</div>

<script type="text/javascript">
(function($){
	$(document).ready(function(){
	
		var user_err_tips = '<span class="tip_lb">提示：</span><br /><span class="tip_txt">请检查账号拼写，确认键盘大小写状态正确开启。 </span>';
		var pwd_err_tips = '<span class="tip_lb">提示：</span><br /><span class="tip_txt">请检查拼写，若你忘记了密码，您可以点击 </span><br /><a class="tip_link" href="/public/password.html">找回密码</a>';
		var user_err_css_top = '110px';
		var pwd_err_css_top = '170px';
		var uname = $('input[name="LoginForm[username]"]');
		var pwd = $('input[name="LoginForm[password]"]');
		
				
		uname.blur(function(){
			var that = $(this);
			if (that.val()) {
				$.ajax({
					type: 'POST',
					url: '/public/login.html',
					data: $('#login-form').serialize()+'&ajax=login-form',
					dataType: 'json',
					cache: false,
					success: function(data) {
						if (data && data['LoginForm_username']) {
							show_err(that, data['LoginForm_username'], user_err_tips, user_err_css_top);
							that.parent(".user_wrap").addClass("user_input_err");
						} else {
							that.next().removeClass('i_err').addClass('i_right');
							$('.err_info').css('display', 'none');
							that.parent(".user_wrap").removeClass("user_input_err");
						}
					}
				});
			} else {
				show_err(that, '请填写邮箱/用户名/手机号', user_err_tips, user_err_css_top);
				that.parent(".user_wrap").addClass("user_input_err");
			}
		});
		uname = null;
		
		pwd.blur(function(){
			var that = $(this);
			if (that.next().hasClass('i_err')) {
				hide_err(that);
				that.parent(".pwd_wrap").removeClass("pwd_input_err");
			}
		});
		pwd = null;
		
		function show_err(target, err_msg, tips_content, css_top) {
			$('#err_msg').html(err_msg);
			$('.info_tip').html(tips_content);
			$('.err_info').css({'top': css_top, 'display': 'block'});
			target.next().removeClass('i_right').addClass('i_err');
		}
	
		function hide_err(target) {
			target.next().removeClass('i_err i_right');
			$('.err_info').css('display', 'none');
		}
		/*用户名和密码输入框*/
		var 
			$login_form = $("#login-form"),
			$user_wrap  = $login_form.find(".user_wrap"),
			$pwd_wrap   = $login_form.find(".pwd_wrap"),
			$user_name  = $user_wrap.find(".user_name"),
			$pwd        = $pwd_wrap.find(".pwd"),
			$user_placehold = $user_wrap.find(".placeholder"),
			$pwd_placehold  = $pwd_wrap.find(".placeholder");
			
		/*用户名和密码初始化时，根据是否存在value来决定占位符行为*/	
		if('' !== $user_name.val()){
			$user_placehold.hide();
		}
		if('' !== $pwd.val()){
			$pwd_placehold.hide();
		}	
		/*用户名和密码框得到焦点和失去焦点的事件*/
		$user_name
			.focus(function(e){
				$user_wrap.addClass("user_focus");
				$user_placehold.hide();
			})
			.blur(function(e){
				$user_wrap.removeClass("user_focus");
				if('' == this.value){
					$user_placehold.show();
				}
			});
			
		$pwd
			.focus(function(e){
				$pwd_wrap.addClass("pwd_focus");
				$pwd_placehold.hide();
			})
			.blur(function(e){
				$pwd_wrap.removeClass("pwd_focus");
				if('' == this.value){
					$pwd_placehold.show();
				}
			}); 
		/*通過js計算頁面，使得頁面内的元素居中*/	
		function vertical_center(){
			/*767是页面元素总共的高度*/
	    	var doc_h   = $(window).height(),
			    pad_top = (doc_h - 767)/2;
			    
			$("body").css("padding-top",pad_top);
		};	
		
		vertical_center();	
		$(window).bind('resize',function(e){
			vertical_center();		
		});

		// 记住用户名、自动登录 模拟checkbox事件
		$(document).on('click', '.fnc_wrap i', function(){
			var checked = $(this).hasClass('icon_checked');
			// to unchecked
			if (checked) {
				$(this).removeClass('icon_checked').prev().val(0);
			} else { // to checked
				$(this).addClass('icon_checked').prev().val(1);
			}
		});	
	});
})(jQuery)
</script><!--金斧子备案信息模块-->
<div class="md_ft_copyright bg_twill">
	<div class="layout">
		<p class="copyright">
			<span ><a href="http://www.jinfuzi.com/topic/dict.html">&copy;</a><a target="_blank" href="http://www.jinfuzi.com/qihuo/list-dict-region.html">2</a><a target="_blank" href="http://www.jinfuzi.com/qihuo/list-dict-landmark.html">0</a><a href="http://www.jinfuzi.com/sitemap/ct-A.html">1</a><a target="_blank" href="http://www.jinfuzi.com/index/topic.html">0</a><a href="http://www.jinfuzi.com/sitemap/cf-A.html">-</a><a href="http://www.jinfuzi.com/adict/xq-A.html">2</a><a href="http://www.jinfuzi.com/trader/rank.html">0</a><a target="_blank" href="http://www.jinfuzi.com/qihuo/company.html">1</a><a href="http://www.jinfuzi.com/question/allQuestions.html">3</a>  www.jinfuzi.com <a target="_blank" href="http://www.jinfuzi.com/index/dict.html">金</a><a target="_blank" href="http://www.jinfuzi.com/index/allxt.html">斧</a><a target="_blank" href="http://www.jinfuzi.com/sitemap/xintuo/compare-A-1">子</a><a href='http://www.jinfuzi.com/index/ugc.html'>版</a>权所有</span>
			<span>粤ICP<a target="_blank" href="/index/spArticles.html">备</a> 12050282号-2</span>
		</p>
		<p class="imglist">
			<a href="javascript:;" title="" target="" class="f_ib"> <img src="/static/img/common/kx.png" alt=""  class="" title=""/> </a>
		</p>
	</div>
</div>	<div style="display: none">
	    <a href="http://www.anquan.org/s/www.jinfuzi.com" name="T8W3HDvuKXC1XCBRQNvRn1DaEsNj7xekuMkGl3cYlthVEGbLiG" >安全联盟</a>
	</div>
    </body>
</html>