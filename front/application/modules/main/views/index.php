<?php echo $this->load->view('header'); ?>
// <script type="text/javascript">
// 	jQuery(function(){
// 		$("div.JFZ_Slider").jfz_slider();
// 	});
// </script>
<div class="xt_top">
	<!-- banner -->
	<div class="xt_banner_wrap">
		<ul class="banner_list">
							<li class="banner_item" style="display: ;">				
					<a class="bg" href="/product" target="_blank">
						<span class="banner_da" style="background:url(http://static.jinfuzi.com/edit/image/006_1392985080.jpg) no-repeat center center;">
							
						</span>
					</a>
				</li>
		    		</ul>
		<ul class="banner_control clearfix">
							<li class="active"></li>
					</ul>
		<!-- fast search -->
		<div class="xt_fastsearch_wrap">
			<div class="layout">
				<!-- fast search -->
				<div class="xt_fastsearch">
						<h3 class="xt_fs_hd clearfix"><span class="txt">筛选信托产品</span><a href="/product/index" target="_blank">高级筛选</a></h3>
						<div class="xt_fs_bd">											
							<div class="input_wrap i_1 clearfix">
								<label class="input_label" for="">投资门槛:</label>
								<div class="input_control">
									<div class="cmd_wrap ">
										<div class="cmd_btn">
											<span class="txt" data-value="0" id="init_capital">不限</span>
											<i class="arrow"></i>
										</div>
										<div class="cmd_con">
											<!-- li鼠标移上去增加hover类 -->
											<ul class="sum_list list">
												<li data_value="0" data_text="不限">不限</li>
												<li data_value="1" data_text="50万以下">50万以下</li>
												<li data_value="2" data_text="50-100万">50-100万</li>
												<li data_value="3" data_text="100-300万">100-300万</li>
												<li data_value="4" data_text="300万以上">300万以上</li>
													
											</ul>
										</div>
									</div>
								</div>								
							</div>
							<div class="input_wrap i_2 clearfix">
								<label class="input_label" for="">预期收益:</label>
								<div class="input_control">
									<!-- cmd_wrap 选中增加active--> 
									<div class="cmd_wrap">
										<div class="cmd_btn">
											<span class="txt" data-value="0" id="prd_exp_profit">不限</span>
											<i class="arrow"></i>
										</div>
										<div class="cmd_con">
											<!-- li鼠标移上去增加hover类 -->
											<ul class="annual_list list">
												<li data_value="0" data_text="不限">不限</li>
												<li data_value="1" data_text="6%以下">6%以下</li>
												<li data_value="2" data_text="6%-8%">6%-8%</li>
												<li data_value="3" data_text="8%-10%">8%-10%</li>
												<li data_value="4" data_text="10%以上">10%以上</li>
																								
											</ul>
										</div>
									</div>
								</div>								
							</div>
							<div class="submit_wrap clearfix">								
								<div class="input_control">
									<a href="/product" id="search_submit" target="_blank">
										<input type="submit" value="提交"  class="input_btn heiti" style="background-color:blue;">
									</a>
								</div>														
							</div>
						</div>
				</div>
				<!-- fast search end -->
			</div>
		</div>
		<!-- step -->
		<div class="xt_banner_stepwrap">
			<div class="layout">
				<ul class="xt_banner_steps clearfix">
					<li class="item i_1">
						<span class="tit">在线预约</span>
						<span class="info">或拨打4000-181-131</span>
					</li>
					<li class="item i_2">
						<span class="tit">确定意向</span>
						<span class="info">额度和打款时间</span>
					</li>
					<li class="item i_3">
						<span class="tit">完成打款</span>
						<span class="info">指定信托公司帐号</span>
					</li>
					<li class="item i_4">
						<span class="tit">成功购买</span>
						<span class="info">按签署合同收取礼品</span>
					</li>
				</ul>
			</div>
		</div>
	</div>	
</div>
<div class="xt_container bg_twill">
	<div class="layout clearfix">
		<!-- left -->
		<div class="xt_left">
			<!-- left item 1 -->
			<div class="xt_left_item md_uc_box">
				<div class="md_uc_hd hd_1 clearfix">
					<div class="hd_title">
						<em class="hd_shadow_1"></em>
						<em class="hd_shadow_2"></em>
					</div>
					<a href="/product/index" target="_blank" class="more"><em class="more_ico"></em>更多</a>
				</div>
				<div class="md_uc_bd">
					<ul class="xt_prolist_1 clearfix">
						<?php foreach ($prod['prod_elite'] as $elite) { ?>
							<li class="item">
								<div class="pro_wrap clearfix">
									<div class="pro_wrap_left">
										<span class="pro_income_tit">预期收益</span>
										<p class="pro_income"><span class="num">9.00%</span></p>
										<a href="http://www.jinfuzi.com/product/0112698" class="pro_btn" target="_blank">预 约</a>
									</div>
									<div class="pro_wrap_right">
										<p class="pro_info_wrap bg_dashed">
											<a href="/productdetail?pid=<?php echo $elite['id']; ?>" class="pro_name" target="_blank">
												<?php echo $elite['short_name']; ?>
												<span class="pro_gift">返现2500元（100万以上）</span>
																							</a>
											<span class="pro_sum">投资金额：<em class="f_f60"><?php echo $elite['min_sub_amount']; ?>万</em></span>      
											<span class="pro_deadline">投资期限：<em class="f_f60"> <?php echo $elite['duration']; ?>个月</em></span>
										</p>
										<p class="pro_comment">
											<span class="f_999">点评：</span>
											<?php echo $elite['purpose_info']; ?>
										</p>
									</div>
								</div>
								<!-- 预售s_2 在售s_1 -->
								<span class="state s_1"></span>
							</li>
						<?php } ?>	
						</ul>							
				</div>
			</div>
			<!-- left item 2 -->
			<div class="xt_left_item md_uc_box xt_tab_1 tab">
				<div class="md_uc_hd tab_hd clearfix">
					<!-- title -->
					<div class="hd_title">
						<span class="hd_txt heiti">信托产品收益排行</span>
						<em class="hd_shadow_1"></em>
						<em class="hd_shadow_2"></em>
					</div>
					<!-- tab control -->
					<ul class="tab_control">				
						<li class="tab_control_item active" flag="true" sort="high"><em class="arrow"></em><span>高收益</span></li>	
						<li class="tab_control_item" flag="false" sort="year"><em class="arrow"></em><span>一年期</span></li>
						<li class="tab_control_item" flag="false" sort="zx"><em class="arrow"></em><span>政信类</span></li>
						<!-- <li class="tab_control_item" flag="false" sort="bzjx"><em class="arrow"></em><span>本周计息</span></li> -->
						<li class="tab_control_item last" flag="false" sort="fifty"><em class="arrow"></em><span>50万起</span></li>
					</ul>
					<a href="/product/index" target="_blank" class="more"><em class="more_ico"></em>更多</a>
				</div>
				<div class="md_uc_bd tab_bd">
					<!-- tc_1 -->
					<div class="tab_con active">
						<table width="683" border="0" cellspacing="0" cellpadding="0" class="xt_table_1">
							<thead>
								<tr class="">
									<th></th>
									<th width="281">产品名称</th>
									<th width="75">信托公司</th>
									<th width="76" class="pro_sum">投资金额</th>
									<th width="82" class="pro_deadline">投资期限</th>
									<th width="84" class="pro_income">预期收益</th>
								</tr>										
							</thead>
							<tbody>
								<?php foreach ($prod['prod_sort'] as $key => $val) {?>
								<tr class="tab_conttrol_item">
									<td class="tc"><span class="num top"><?php echo $key+1; ?></span></td>
										<td>
											<div class="pro_name">
												<a href="/productdetail?pid=<?php echo $val['id']; ?>" target="_blank"><?php echo $val['short_name']; ?></a>
											</div>
										</td>
									<td>
										<a href="http://www.jinfuzi.com/xintuo/c-10" target="_blank">渤海信托</a>
									</td>
									<td class="pro_sum"><span class="f_f60">100万</span></td>
									<td class="pro_deadline">24个月</td>
									<td class="pro_income"><span class="f_f60">10.00%</span></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- tc_2 -->
					<div class="tab_con">
						<table width="683" border="0" cellspacing="0" cellpadding="0" class="xt_table_1">
								<thead>
									<tr class="">
										<th></th>
										<th width="275">产品名称</th>
										<th width="81">信托公司</th>
										<th width="76" class="pro_sum">投资金额</th>
										<th width="82" class="pro_deadline">投资期限</th>
										<th width="84" class="pro_income">预期收益</th>
									</tr>										
								</thead>
								<tbody>
								</tbody>
						</table>
					</div>
					<!-- tc_3 -->
					<div class="tab_con">
						<table width="683" border="0" cellspacing="0" cellpadding="0" class="xt_table_1">
							<thead>
								<tr class="">
									<th></th>
									<th width="281">产品名称</th>
									<th width="75">信托公司</th>
									<th width="76" class="pro_sum">投资金额</th>
									<th width="82" class="pro_deadline">投资期限</th>
									<th width="84" class="pro_income">预期收益</th>
								</tr>										
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<!-- tc_4 -->
					<div class="tab_con">
						<table width="683" border="0" cellspacing="0" cellpadding="0" class="xt_table_1">
							<thead>
								<tr class="">
									<th></th>
									<th width="281">产品名称</th>
									<th width="75">信托公司</th>
									<th width="76" class="pro_sum">投资金额</th>
									<th width="82" class="pro_deadline">投资期限</th>
									<th width="84" class="pro_income">预期收益</th>
								</tr>										
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					<!-- tc_5 -->
					<div class="tab_con">
						<table width="683" border="0" cellspacing="0" cellpadding="0" class="xt_table_1">
							<thead>
								<tr class="">
									<th></th>
									<th width="281">产品名称</th>
									<th width="75">信托公司</th>
									<th width="76" class="pro_sum">投资金额</th>
									<th width="82" class="pro_deadline">投资期限</th>
									<th width="84" class="pro_income">预期收益</th>
								</tr>										
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>					
			<!-- left item 3 -->
			<div class="xt_left_item md_uc_box xt_tab_2 tab">
				<div class="md_uc_hd tab_hd">
					<!-- title -->
					<div class="hd_title">
						<span class="hd_txt heiti">热门信托机构</span>
						<em class="hd_shadow_1"></em>
						<em class="hd_shadow_2"></em>
					</div>
					<ul class="tab_control clearfix">	
						<!-- 				
						<li flag="true" sort="1" class="tab_control_item active"><em class="arrow"></em><span>中央企业控股</span></li>
										
						<li flag="false" sort="2" class="tab_control_item "><em class="arrow"></em><span>地方企业控股</span></li>
										
						<li flag="false" sort="3" class="tab_control_item "><em class="arrow"></em><span>金融机构控股</span></li>
										
						<li flag="false" sort="4" class="tab_control_item "><em class="arrow"></em><span>省级政府控股</span></li>
										
						<li flag="false" sort="5" class="tab_control_item last"><em class="arrow"></em><span>市级政府控股</span></li> -->
					</ul>
				</div>
				<div class="md_uc_bd tab_bd">
					<div class="tab_con active">
						<div class="xt_company_tab subtab clearfix">
							<div class="subtab_hd">	
								<ul class="subtab_control">	
									<?php foreach ($prod['hot_company'] as $value) { ?>	
										<li class="subtab_control_item active" flag="true" sort="<?php echo $value['id'] ?>">
											<em class="shadow"></em>
											<a href="javascript:;"><?php echo $value['name']; ?></a>
										</li>
									<?php } ?>
								</ul>
							</div>
							<div class="subtab_bd">
								<!-- sub_tc_1 -->
								<div class="subtab_con active">
									<div class="xt_companty_detail clearfix">
										<div class="com_img">
											<a target="_blank" href="http://www.jinfuzi.com/xintuo/c-6"><img width="50" height="50" src="/static/cmpt/root/image/xt/comlogo/6.jpg" alt="中融国际信托有限公司" /></a>
										</div>
										<div class="com_info">
											<p class="p_1 clearfix">
												<span class="s_1 f_fl"><span class="f_999">注册资本(万)：</span><?php echo $prod['hot_company'][0]['register_capital'] ?></span>
												<!-- <span class="s_2 f_fl"><span class="f_999">股东背景：</span>中央企业控股</span> -->
												<span class="s_3 f_fl"><span class="f_999">公司所在地：</span>  <?php echo $prod['hot_company'][0]['area']; ?></span>
											</p>
											<p class="p_2 clearfix">
												<?php //var_dump( $prod['hot_company'][0]['products']); ?>
												<span class="s_4 f_fl">产品数量<span class="num"><?php echo $prod['hot_company'][0]['count'] ?></span>款</span>
												<span class="s_4 f_fl">平均收益率<span class="num">9.03%</span></span>
											</p>
										</div>
									</div>
									<div class="xt_comprolist_wrap">
										<div class="xt_comprolist_tit clearfix">旗下信托产品</div>
										<table width="550" border="0" cellspacing="0" cellpadding="0" class="xt_table_2">
											<thead>
												<tr>															
													<th width="*">产品名称</th>														
													<th width="76" class="pro_sum">投资金额</th>
													<th width="82" class="pro_deadline">投资期限</th>
													<th width="84" class="pro_income">预期收益</th>
												</tr>										
											</thead>
											<tbody>
												<?php foreach ($prod['hot_company'][0]['products'] as $key => $prd) { ?>
												<tr>															
													<td class="pro_name">
														<a href="http://www.jinfuzi.com/product/0113205" target="_blank"><?php echo $prd['short_name']; ?></a>
													</td>															
													<td class="pro_sum"><span class="f_f60"><?php echo $prd['min_sub_amount']; ?>万</span></td>
													<td class="pro_deadline"><?php echo $prd['duration']; ?>个月</td>
													<td class="pro_income"><span class="f_f60"><?php echo $prd['income_rate'] ?></span></td>
												</tr>
												<?php } ?>												
																									
											</tbody>
										</table>
									</div>
								</div>
								<div class="subtab_con"></div>
								<div class="subtab_con"></div>
								<div class="subtab_con"></div>
								<div class="subtab_con"></div>
								<div class="subtab_con"></div>
								<div class="subtab_con"></div>
								<div class="subtab_con"></div>
								<div class="subtab_con"></div>
								<div class="subtab_con"></div>
							</div>	
						</div>
					</div>
					<div class="tab_con"></div>
					<div class="tab_con"></div>
					<div class="tab_con"></div>
					<div class="tab_con"></div>
				</div>
			</div>				
			<!-- left item 4 -->
			<!-- left end -->
		</div>
		<?php $this->load->view('right_side');?>
	</div>			
</div>
<style>
	.JFZDialog .JFZDialog_Body {
		padding: 0px !important;
	}
</style>

<script>
(function($){
	
	//轮播广告位
	function ads(){
		var count = 0;
		var _length = $("div.xt_banner_wrap ul.banner_control").find("li").length;
				var cban = function(i){
					$(".banner_item").eq(i).fadeIn("slow").siblings().fadeOut('slow');
					$(".banner_control li").eq(i).addClass('active').siblings().removeClass('active');
				}

				var fun = function(){
					cban(count);
					count >=_length-1 ? count =0: count++;
				}
				
				var t = setInterval(fun,5000);

				$(".banner_control li").click(function() {
					clearInterval(t);
					count = $(this).index();
					cban(count);
					t = setInterval(fun,2000);
				});

				$(".xt_prolist_1 .item,.xt_table_1 tr,.cmd_con .list li").hover(function() {
					$(this).addClass('hover');
				}, function() {
					$(this).removeClass('hover');
				});
	}
		
	init();
	function init() {
		placeholder("WdQuestion[title]", "提交问题后，将有专家五分钟内给出最专业答疑");
		handleSelect();
		//ads();
		search();
		//信托产品收益排行
	    proExpProfitSort();
	    //信托热门信托机构
	    hotOrganization();
	    hotcompany();
	}
	
	function placeholder(name, message) {
		$("textarea[name='"+name+"']")
			.val(message).addClass("no_cur")
			.focus(function(){
				$(this).removeClass("no_cur") 
				if (message == $(this).val()) { 
					$(this).val(""); 
				} 
			})
			.blur(function(){ 
				if ("" == $(this).val()) { 
					$(this).val(message).addClass("no_cur");
				} 
			});
	}
	// select模拟
	function handleSelect() {
		$(document).on("click", ".cmd_wrap", function(event){
			var target = $(this);
			
			if(target.hasClass("active")){
				target.removeClass("active")
			}else{
				$(".cmd_wrap, .search_select").removeClass("active");
				target.addClass("active")
			}  
			event.stopPropagation();
		});
		
		$(document).click(function(event){
			$(this).find(".cmd_wrap.active").removeClass("active");
		});
		// 门槛与收益
		$(document).on("click", ".cmd_con .sum_list li, .cmd_con .annual_list li", function(event){
			var target = $(this);
			var input = target.parents(".cmd_con").prevAll(".cmd_btn").find("span.txt");
			input.attr("data_value", target.attr("data_value")).text(target.attr("data_text"));
			search();
		});
	}

	function search() {
		var url = "/product-{init_capital}-0-{prd_exp_profit}-0-0-0-0-0-0-0-1";
		var default_url = "/product";
		var capital_pattern = /\{init_capital\}/,
			profit_pattern = /\{prd_exp_profit\}/;
		
			var capital = $("#init_capital").attr("data_value") || 0;
			var profit = $("#prd_exp_profit").attr("data_value") || 0;
			var href = '';
			if ((!capital || '0' == capital) && (!profit || '0' == profit)) 
				href = default_url;
			else
				href = url.replace(capital_pattern, capital).replace(profit_pattern, profit);
			$("#search_submit").attr("href", href);
	}
	
	
	//信托产品收益排行
	function proExpProfitSort(){
		
		$("div.xt_tab_1 ul.tab_control li.tab_control_item").each(function(i){
			$(this).click(function(event){
				var _this = $(this);
				var _content = $("div.xt_tab_1");
				if(1){
                        $.ajax({
                        	'url':'/main/index/data?sort='+$(this).attr('sort'),
                        	'dataType':'json',
                        	'type': 'post',
                        	'success':function(data){
                        		_content.find('div.tab_con').find("tbody").empty();
                        		var con;
                        		for( var i=0; i<data.length;i++){
                        			con = "<tr><td class='tc'><span class='num top'>"+ i+"</span></td>"+
										"<td>"+
											"<div class='pro_name'>"+
												"<a href='/productdetail?pid="+data[i].id+"' target='_blank'>"+data[i].short_name+"</a>"+
											"</div>"+
										"</td>"+
									"<td>"+
										"<a href='' target='_blank'>"+data[i].company_name+"</a>"+
									"</td>"+
									"<td class='pro_sum'><span class='f_f60'>100万</span></td>"+
									"<td class='pro_deadline'>"+data[i].duration+"个月</td>"+
									"<td class='pro_income'><span class='f_f60'>"+data[i].income_rate+"%</span></td></tr>";
									_content.find('div.tab_con').find("tbody").append(con);
                        		}
                        		
                        	}
                        });
						_this.attr('flag', 'true');
				}
			
				_this.addClass('active').siblings('li').removeClass('active');
				_content.find('div.tab_con').removeClass('active').eq(i).addClass('active');
			});
		})
	}
	
	//信托热门机构
	function hotOrganization(){
		$("div.xt_tab_2 ul.tab_control li.tab_control_item").each(function(i){
			$(this).click(function(event){
				var _this = $(this);
				var _content = $("div.xt_tab_2");
				if(_this.attr('flag')=='false'){
						$.get('/xt/default/xtOrganizationAjax?sort='+$(this).attr('sort'), function(data){
							_content.find('div.tab_con').eq(i).append(data);
							
						})
						_this.attr('flag', 'true');
				}
			
				_this.addClass('active').siblings('li').removeClass('active');
				_content.find('div.tab_con').removeClass('active').eq(i).addClass('active');
			});
		})		
	}
	
	//信托热门机构侧边公司tab分页
	function hotcompany(){
			$("div.xt_tab_2").delegate('ul.subtab_control li', 'click', function(event){
				var _this = $(this);
				var _index = _this.parent().parent().parent().find('.subtab_control_item').index(this);
				var _content = _this.parent().parent().parent().find('div.subtab_con');
				if(1){
					$.ajax({
						'url' : '/main/index/hot_company?sort='+$(this).attr('sort'),
						'type'	: 'post',
						'dataType': 'json',
						'success' : function(data){
							var con;
							_content.eq(_index).empty();
								con = /*'<div class="subtab_con active">'+*/
										'<div class="xt_companty_detail clearfix">'+
											'<div class="com_img">'+
												'<a target="_blank" href="http://www.jinfuzi.com/xintuo/c-6"><img width="50" height="50" src="/static/cmpt/root/image/xt/comlogo/6.jpg" alt="中融国际信托有限公司" /></a></div>'+
											'<div class="com_info">'+
												'<p class="p_1 clearfix">'+
													'<span class="s_1 f_fl"><span class="f_999">注册资本(万)：</span>'+data.register_capital+'</span>'+
													'<span class="s_3 f_fl"><span class="f_999">公司所在地：</span>  '+data.area+'</span>'+
												'</p>'+
												'<p class="p_2 clearfix">'+
													'<span class="s_4 f_fl">产品数量<span class="num">'+data.p_count+'</span>款</span>'+
													/*'<span class="s_4 f_fl">平均收益率<span class="num">'+11+'</span></span>'+*/
												'</p>'+
											'</div>'+
										'</div>'+
										'<div class="xt_comprolist_wrap">'+
											'<div class="xt_comprolist_tit clearfix">旗下信托产品</div>'+
											'<table width="550" border="0" cellspacing="0" cellpadding="0" class="xt_table_2">'+
												'<thead>'+
													'<tr>'+
														'<th width="*">产品名称</th>'+
														'<th width="76" class="pro_sum">投资金额</th>'+
														'<th width="82" class="pro_deadline">投资期限</th>'+
														'<th width="84" class="pro_income">预期收益</th>'+
													'</tr>'+
												'</thead>'+
												'<tbody>';
												var con1='';
												for(var i=0; i<data.products.length; i++){
												con1+='<tr>'+
														'<td class="pro_name">'+
															'<a href="" target="_blank">'+data.products[i].short_name+'</a>'+
														'</td>'+
														'<td class="pro_sum"><span class="f_f60">'+data.products[i].min_sub_amount+'万</span></td>'+
														'<td class="pro_deadline">'+data.products[i].duration+'个月</td>'+
														'<td class="pro_income"><span class="f_f60">'+data.products[i].income_rate+'</span></td>'+
													'</tr>';
													}												
											var con2='</tbody>'+
											'</table>'+
										'</div>'/*+
									'</div>'*/;
							_content.eq(_index).append(con+con1+con2);
						}
					});

						_this.attr('flag', 'true');
				}
			
				_this.addClass('active').siblings('li').removeClass('active');
				_content.removeClass('active').eq(_index).addClass('active');
			});
	}
	
	//订阅手机号
	function subscriptionPhone(){
		$("#dialog_phone").click(function(){
    	    var _category = $(this).attr('category');
   		 	var src = "/subscription/subscriptionPhone?category="+_category;
   		 	 var $jfz_dg = new $.JFZ_Dialog({
			 		source: {
			 			"iframe": 
			 			 {
			 				 "src": src ,
			 				 'height' : 330
			 			 }
				    },
				    overlay_close : false,
			        buttons : false,
			        width   :600,
			        title   :'手机订阅',
			        type    : false
			 });
			  window.$jfz_dg = $jfz_dg;
        });
	
	}
	
	//订阅邮箱
	function subscriptionEmail(){
		$("#dialog_email").click(function(){
    	    var _category = $(this).attr('category');
   		 	var src = "/subscription/subscriptionEmail?category="+_category;
   		 	 var $jfz_dg = new $.JFZ_Dialog({
			 		source: {
			 			"iframe": 
			 			 {
			 				 "src": src ,
			 				 'height' : 330
			 			 }
				    },
				    overlay_close : false,
			        buttons : false,
			        width   :600,
			        title   :'邮箱订阅',
			        type    : false
			 });
			  window.$jfz_dg = $jfz_dg;
        });
	
	}
	
})(jQuery);


</script>
<?php echo $this->load->view('footer'); ?>
