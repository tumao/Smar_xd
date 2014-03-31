$(function() {
	//专家排行
	$("#expert_sort").each(function() {
		var expert_sort = $(this);
		expert_sort.find('.ph-gwpre ul li').each(function(i) {
			$(this).mouseover(function() {
				expert_sort.find('.tui-gw').hide().eq(i).show();
				$(this).addClass("on").siblings("li").removeClass("on");
			});
		});
	});

	//热门分类
	//热门
	$("#hot_category").each(function() {
		var root = $(this);
		var length = root.find('ul li').length;
		root.find('ul li').each(function(i) {
			if(length==(i+1)){
					return ;
				}
			$(this).mouseover(function() {
				root.find('.lcda-tb').hide().eq(i).show();
				$(this).addClass("on").siblings("li").removeClass("on");
			});
		});
	});

	//最新提问
	$("#new_questions").each(function() {
		var root = $(this);
		var length = root.find('ul li').length;
		root.find('ul li').each(function(i) {
			if(length==(i+1)){
					return ;
				}
			$(this).mouseover(function() {
				root.find('.lcda-tb').hide().eq(i).show();
				$(this).addClass("on").siblings("li").removeClass("on");
			});
		});
	});

	//快速回答 搜索页
	$('.daname').mouseover(function() {
		$(this).find('.link-quickda').show();
		$(this).mouseout(function() {
			if ($(this).siblings('.da-form').css('display') == 'none') {
				$(this).find('.link-quickda').hide();
			}
		});

	});


	/*
	$(".da-biaoti").mouseover(function(){
		$(this).find(".link-quickda").show();
		$(this).mouseout(function(){
			if($("#answer_"+$(this).attr("aid")).css('display') == 'none'){
			   $(this).find(".link-quickda").hide();	
			}
		});
	});*/
	
	$("tr.havebg").hover(function(){
		$(this).find("a.link-quickda").show().siblings().hide();	
	},function(){
		$(this).find("a.link-quickda").hide().siblings().show();
	});
	
	
	$("a.link-quickda").click(function() {
		if ($(this).hasClass('link-quickda-hid')) {
			$(this).parent('.daname').siblings('.da-form').hide();
			
			$("#answer_"+$(this).attr('aid')).hide();
			$(this).removeClass('link-quickda-hid').text('快速回答');
		} else {
			$('.da-form').hide();
			$('.index-quick-answer').hide();
			$('.link-quickda').hide().removeClass('link-quickda-hid').text('快速回答');
			$(this).show().addClass('link-quickda-hid').text('取消回答');
           $("#answer_"+$(this).attr('aid')).show();
			$(this).parent('.daname').siblings('.da-form').show();
		}
	});

	//待解决问题
	$("#resolved_questions").each(function() {
		var root = $(this);
		var length = root.find('ul li').length;
		root.find('ul li').each(function(i) {
			$(this).mouseover(function() {
				if(length==(i+1)){
					return ;
				}
				root.find('.lcda-tb').hide().eq(i).show();
				$(this).addClass("on").siblings("li").removeClass("on");
			});
		});
	});

	//本期达人
	// $("#new_daren").each(function() {
		// var root = $(this);
		// root.find('em').each(function(i) {
			// $(this).mouseover(function() {
				// root.find('.dareninfo').hide().eq(i).show();
				// $(this).addClass("on").siblings("em").removeClass("on");
			// });
		// });
	// });

	setInterval(function() {
		var root = $("#new_daren");
		var index = root.find(".dotlist em").index(root.find(".dotlist em.on"));
		index = (index + 1) % (root.find('em').length);
		root.find('.dareninfo').hide().eq(index).show();
		root.find('em').eq(index).addClass("on").siblings("em").removeClass("on");
	}, 3000);

	//分类专家排行详细显示
	$("#expert_sort").each(function() {
		var root = $(this);
		root.find('.gwtui-list').each(function(i) {
			//$(this).addClass('only-name');
			$(this).mouseover(function() {
				$(this).removeClass('only-name');
				root.find('.bd').hide().eq(i).show();
				$(this).siblings('.gwtui-list').addClass('only-name');
			})
			//$(this).siblings('.gwtui-list').addClass('only-name');
		});
	});

	//问答tab
	$('#question_list').each(function() {
		var root = $(this);
		root.find('ul li').each(function(i) {
			$(this).click(function() {
				root.find('.about-da').hide().eq(i).show();
				$(this).addClass('on').siblings('li').removeClass('on');
			});
		});
	});
	/*头像移动效果
	$(".lc-head-photo").mouseover(function() {
		var root = $(this).siblings(".lc-head-photo-info").first();
		root.show().mouseover(function(){
			$(this).show();
		});
		root.mouseout(function() {
			$(this).hide();
		})
	});*/
	$("a.lc-head-photo").mouseover(function() {
		var root = $(this).siblings(".lc-head-photo-info").first();
		
		root.show().mouseover(function(){
			$(this).show();
		});
		root.mouseout(function() {
			$(this).hide();
		});
	}).mouseout(function(){
		var root = $(this).siblings(".lc-head-photo-info").first();
		root.hide();
	});

	//投票
	$(".lc-agree").click(function() {
		var root = $(this);
		$.post('../wenda/vote', {
			'answerId' : $(this).attr('answerId'),
			'voteVal' : $(this).attr('voteVal'),
			'bigCateId' : $(this).attr('bigCateId')
		}, function(data) {
			if (data.result) {
				root.text("赞同("+data.agreeCount+")");
				alert("投票成功");
			} else {
				alert(data.message);
			}
		}, "json");
	});
	

	$(".lc-against").click(function() {
		var root = $(this);
		$.post('../wenda/vote', {
			'answerId' : $(this).attr('answerId'),
			'voteVal' : $(this).attr('voteVal'),
			'bigCateId' : $(this).attr('bigCateId')
		}, function(data) {
			if (data.result) {
			    root.text("反对("+data.againstCount+")");
				alert("投票成功");
			} else {
				alert(data.message);
			}
		}, "json");
	}); 

  //提问选专家
  $(".lc-what-experts").each(function(){
  	  var root = $(this);
		root.find('a').each(function(i) {
			$(this).click(function() {
				$("#WdQuestion_pcate_id").val($(this).attr('aid'));
				$(this).attr('class', 'on').siblings('a').attr('class', 'off');
			});
		});
  });


  
  
  //提问
  
	$("#weda_ask").click(function() {
		if ($("#ueditor_content").css('display') == 'none') {
			$("#ueditor_content").show();
		} else {
			$("#ueditor_content").hide();
		}

	}); 
	
	

	$(".lc-agree").hover( 
		function () {
		    $(this).removeClass("lc-agree").addClass("lc-agree-on");
		  },
		  function () {
		    $(this).removeClass("lc-agree-on").addClass("lc-agree");
		  }
	);
	
	$(".lc-against").hover( 
		function () {
		    $(this).removeClass("lc-against").addClass("lc-against-on");
		  },
		  function () {
		    $(this).removeClass("lc-against-on").addClass("lc-against");
		  }
	);

})
//用户ajax登录
function login(form, data, hasError) {
	if (!hasError) {
		$.post("../public/login", $("#site-login-form").serialize(), function(data) {
			if (data.result == "1") {
				var messages = data.message;
				for (var message in messages) {
					$("#LoginForm_" + message + "_em_").text(messages[message][0]).show();
				}

			} else {
				$("#before_login").hide();
				$("#name").text(data.name);
				$("#picture").attr('src', data.photoLink);
				$("#role_name").html(data.role_name+"<em class='c-red' id='sec_levl'> LV"+data.sec_Level+"</em>");
				$("#login_success").show();
				$("#welcome_top").html(data.name);
				$("#login_filter_ask").hide();
				$("#login_filter").hide();
				if(data.isSecMng)
				{
					$("#sec_mng").show();
					$("#not_sec").hide();
				}else{
					$("#sec_mng").hide();
					$("#not_sec").show();
				}
				$("#wenda_login").hide();
				$("#wenda_logout").show();
				isLogin = 1;
				$(".ads_question").hide();
			}

		}, "json");
	}
}

//快速回答
function answer(form, data, hasError) {
		if (!hasError) {
		$.post('../wenda/createAnswer', form.serialize(), function(data) {
			if (data.result==0) {
				var messages = data.message;
				for (var message in messages) {
					$("#WdAnswer_" + message + "_em_").text(messages[message][0]).show();
				}

			}else if(data.result==-1){
				alert(data.message);
			} else {
				$(".da-form").val('');
				$(".da-form").hide();
				$(".index-quick-answer").hide();
				$("#link_" + data.question_id).removeClass('link-quickda-hid').text('快速回答');
				$("textarea[aid=WdAnswer_content_" + data.question_id + "]").val('');
				alert('您已成功提交回答，谢谢您的支持和分享！');
			}
		}, 'json');
	}	

}

function countChar(textareaName,spanName){
  var root = $("#"+textareaName);
 if(root.val().length>70){
 	
 	var str =root.val();
 	root.val(str.substring(0, 70))
    return false;
 }else{
 	 $("#"+spanName).text(70-root.val().length);
 }
}

function showResolvedCount(){
	$('#resolvedCount').show();
	$('#countTip').hide();
}

function showCountTip(){
	$('#countTip').show();
	$('#resolvedCount').hide();
}