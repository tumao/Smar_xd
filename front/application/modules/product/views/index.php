<?php echo $this->load->view('header'); ?>
    <!--[if IE 6]>
    <script type="text/javascript" src="js/DD_PNG_min.js"></script>
    <![endif]-->

    <div class="sm-mod-site">
        <span class="banfirtxt">当前位置：</span>
        <a href="/">首页</a><span class="icon-arrl">&gt;&gt;</span><a
            href="/product">信托产品列表</a>
    </div>

    <div class="layout select mt10 shadow">
    <div class="hd">
        <h3>信托产品筛选<span>免费快速为您找到最合适的信托产品(可同时选择多个条件)</span></h3>
    </div>
    <div class="bd">
    <ul class='polymeric_list'>
    <li>
        <dl class="clearfix">
            <dt>起始资金：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='javascript:void(0)'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>50万以下</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>50-100万</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>100-300万</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>300万以上</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>产品期限：</dt>
            <dd>
			                	<span class=bx>
			                		<a href='javascript:void(0)'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>12个月以下</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>12-24个月</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>24-36个月</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>36个月以上</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>预期收益：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='javascript:void(0)'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>6%以下</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>6%-8%</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>8%-10%</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>10%以上</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>收益分配：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='javascript:void(0)'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>按月付息</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>按季付息</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>半年付息</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>按年付息</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>到期付息</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>抵(质)押率：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='javascript:void(0)'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>30%以下</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>30%-40%</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>40%-50%</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>50%以上</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>投资方向：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='javascript:void(0)'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>房地产</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>金融</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>基础设施</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>工商企业</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>工矿企业</a>
			                	</span>
			                			                	<span class=>
			                		<a href='javascript:void(0)'>其他</a>
			                	</span>

            </dd>
        </dl>
    </li>
    </ul>
    </div>
    <div class="ft have-select">
        <span class="productsNB">共
    <a href="" id='listSearchItemCount'>10158</a>
    款产品满足条件</span>
    </div>
    <div class="clear">
    </div>
    </div>
    <!-- 公司弹出框-->
    <div id="city_Ip_Chooser" style="display: none">
    <form action="{$this->createUrl($url, $urlParams)}" method='post' id='selectForm'>
    <div class="p-daikuancon">
    <div class="abc-list">
    <dd>
   
    </dd>
    <div class="clear"></div>
    </div>
    </div>
    <div class="p-btnxt text-r">
        <a title="清空" class="p-btnno" href="#" id="clear">清空</a>
        <input type="submit" class="p-btnsure m16" value="确定"/>
    </div>
    </form>
    </div>

    <script>
        $(function () {
            /*声明变量*/
            var $bank_more = $(".bank_more");
            var $bank_more_link = $bank_more.find(".bank_more_link");
            var $bank_list_cnt = $bank_more.find(".bank_list_cnt");
            var $index_list2 = $bank_more.find(".index_list");
            var $index_list = $index_list2.find("li");
            var $bank_name_list = $bank_more.find(".bank_name_list");
            /*添加事件和交互*/
            $bank_more_link.toggle(function (e) {
                var $this = $(this);
                $this.removeClass("bank_link_down").addClass("bank_link_up");
                $bank_list_cnt.show();
                return false;
            }, function (e) {
                var $this = $(this);
                $this.removeClass("bank_link_up").addClass("bank_link_down");
                $bank_list_cnt.hide();
                return false;
            });

            $index_list.hover(function (e) {
                $(this).addClass("hover");
            }, function (e) {
                $(this).removeClass("hover")
            });
            $index_list.bind("click", function (e) {
                var $this = $(this);
                var index = $this.index();

                $this.addClass("on").siblings("li").removeClass("on");
                $bank_name_list.eq(index).show().siblings().hide();
            });

            $("input[type='checkbox']").click(function () {
                var $name = $(this).attr('name');
                if ($(this).val() == '0' && this.checked) {
                    var $ob = $('input[name="' + $name + '"][value!="0"]');
                    $ob.attr('checked', false);
                    $ob.parents('li a').removeClass('selectedCheckbox')
                } else if ($(this).val() != '0' && this.checked) {
                    var $obj = $('input[name="' + $name + '"][value="0"]');
                    $obj.attr('checked', false);
                    $obj.parents('li a').removeClass('selectedCheckbox');
                }

                if (this.checked) {
                    $(this).parents('li a').addClass('selectedCheckbox');
                } else {
                    $(this).parents('li a').removeClass('selectedCheckbox');
                }

            });


            $('#clear').click(function () {
                $('input[type=checkbox]').attr('checked', false).parent('a').removeClass('selectedCheckbox');
            });
        });
    </script>

    <div class="sub-wrap layout mt10">
    <div class="tb-tabbar-wrap  shadow " id="J_TabBarWrap">
        <ul class="tb-tabbar fl" id="J_TabBar">
            <li class="tb-first selected">
                <a class="ptlb-tab" href="javascript:void(0)"> 产品列表 </a>
            </li>

        </ul>
        <div class="tb-support-dropdown fr">

            <span class="fl" id='pageMark'> 1/678 </span>
      <span class="index-top-pages fl" id='top_pages_link'>
      	<a class="index-top-lastpage" href=""></a>
	    <a class="index-top-nextpage" href="javascript:void(0)"></a>
      </span>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>

    <div id='J_prds_list' curUrl="http://www.jinfuzi.com/xintuo/xtlist">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="index-products-table  tbtheadline shadow">
    <thead>
    <tr>
        <td width="40">序号</td>
        <td>信托产品名称</td>
        <td> 起始资金(万)<a target="_self" class="ic-arrowdown"
                       href="http://www.jinfuzi.com/xintuo/xtlist-0-0-0-0-0-0-0-0-0-1-1#anchor_page_turning"></a></td>
        <td> 产品期限(月)<a target="_self" class="ic-arrowdown"
                       href="http://www.jinfuzi.com/xintuo/xtlist-0-0-0-0-0-0-0-0-0-3-1#anchor_page_turning"></a></td>
        <td> 预期收益(年化)<a target="_self" class="ic-arrowdown"
                        href="http://www.jinfuzi.com/xintuo/xtlist-0-0-0-0-0-0-0-0-0-5-1#anchor_page_turning"></a></td>
        <td> 发售日期<a target="_self" class="ic-arrowup"
                    href="http://www.jinfuzi.com/xintuo/xtlist-0-0-0-0-0-0-0-0-0-8-1#anchor_page_turning"></a></td>
        <td>投资方向</td>
        <td>信托分类</td>
        <td>信托公司</td>
        <td>预约咨询</td>
    </tr>
    </thead>
    <tbody>
    <?php
    for($i = 0; $i < count($products); $i++) {

    ?>
    <tr <?php if(($i+1)%2==0) echo 'class="bgf7f7f7"';?>>
        <td><span class="<?php $c = $i<3?"index-NB-yellow":"index-NB"; echo $c;?>"><?php echo $i+1;?></span></td>
        <td id="index-producs-name">

            <div class="pdnamepop">
<<<<<<< HEAD
                <a title="<?php echo $products[$i]['full_name']?>" target="_blank" href="http://www.jinfuzi.com/product/014245"><?php echo $products[$i]['short_name']?></a>
=======
                <a title="中融信托-中国城建六局集合资金信托计划2" target="_blank" href="">中城建六局亳州市政BT项目</a>
>>>>>>> 4fe2ab6d8ea98f43f270650139324b37a1c1d1b4

                <div style="left:150px; z-index:9999; display: none" class="namepopcon shadow">
                    <span class="popiconarr"></span>

                    <p class="poptits"><?php echo $products[$i]['full_name']?></p>

                    <div class="xtinfotb inter-xttb">
                        <table>
                            <tbody>
                            <tr>
                                <th width="150">信托公司：</th>
                                <td width="180"><?php echo $products[$i]['company_name']?></td>
                                <th width="120">投资行业：</th>
                                <td width="120">基础设施</td>
                            </tr>
                            <tr>
                                <th width="120">发售日期：</th>
                                <td>2014-04-10</td>
                                <th width="120">预期收益：</th>
                                <td>9.00%</td>
                            </tr>
                            <tr>
                                <th width="120">预计发行规模(万)：</th>
                                <td>20000万</td>
                                <th width="120">最低认购资金(万)：</th>
                                <td>100万</td>
                            </tr>

                            <tr>
                                <th valign="top" rowspan="1">收益说明</th>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    100万及以上
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 9%</td>
                            </tr>

                            <tr>
                                <th valign="top">风险控制</th>
                                <td colspan="3"><p>(1)保证担保：中国城建六局集团及安徽公司为融资人偿还信托本息承担无限连带责任保证担保。</p>

                                    <p>(2)资金监管：我司拟对第二还款来源中涉及的回款账户进行监管，保证市政项目的政府回购资金全部进入该监管账户。</p>

                                    <p>(3)质押担保：亳州市财政局出具了《关于亳州市市政道路及公园水系治理工程BT项目回购承诺函》，承诺财政收入优先安排支付项目回购款作为第二还款来源。</p>
                                </td>
                            </tr>
                            <tr>
                                <th valign="top">产品说明</th>
                                <td colspan="3"><br/></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </td>
        <td><?php if($products[$i]['min_sub_amount']>=10000) echo $products[$i]['min_sub_amount']/10000 . "万"; else echo $products[$i]['min_sub_amount'];?></td>
        <td><?php echo $products[$i]['duration'];?>个月</td>
        <td><?php echo $products[$i]['income_rate'];?>.00%</td>
        <td><?php echo date('Y-m-d',strtotime($products[$i]['sell_date']));?></td>
        <td>基础设施</td>
        <td>贷款类</td>

        <td><a href="http://www.jinfuzi.com/xintuo/c-6" target="_blank">中融信托</a></td>
        <td><a class="index-details" href="http://www.jinfuzi.com/product/014245" target="_blank">查看详情</a></td>
    </tr>
<<<<<<< HEAD
    <?php
    }
    ?>
=======
    <tr class="bgf7f7f7">
        <td><span class="index-NB-yellow">2</span></td>
        <td id="index-producs-name">

            <div class="pdnamepop">
                <a title="金谷信托-宏远物流信托贷款集合资金信托计划" target="_blank"
                   href="http://www.jinfuzi.com/product/0110260">宏远物流贷款</a>

                <div style="left:150px; z-index:9999; display: none" class="namepopcon shadow">
                    <span class="popiconarr"></span>

                    <p class="poptits">金谷信托-宏远物流信托贷款集合资金信托计划</p>

                    <div class="xtinfotb inter-xttb">
                        <table>
                            <tbody>
                            <tr>
                                <th width="150">信托公司：</th>
                                <td width="180">金谷信托</td>
                                <th width="120">投资行业：</th>
                                <td width="120">工商企业</td>
                            </tr>
                            <tr>
                                <th width="120">发售日期：</th>
                                <td>2014-04-04</td>
                                <th width="120">预期收益：</th>
                                <td>9.00%</td>
                            </tr>
                            <tr>
                                <th width="120">预计发行规模(万)：</th>
                                <td>38000万</td>
                                <th width="120">最低认购资金(万)：</th>
                                <td>100万</td>
                            </tr>

                            <tr>
                                <th valign="top" rowspan="3">收益说明</th>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    100-300万(不含)
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 9%</td>
                            </tr>
                            <tr>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    300(含)-600万(不含)
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 9.5%</td>
                            </tr>
                            <tr>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    600万及以上
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 10%</td>
                            </tr>

                            <tr>
                                <th valign="top">风险控制</th>
                                <td colspan="3">1、抵押担保。<br/>宏远物流以其拥有的位于北京市丰台区方庄路5号房产（产权面积
                                    产权面积55,848.22平米）及及北京市顺义区南法信镇顺平路北侧土地（土地使用权面积23,425.9平米）为借款本息偿还提供抵押担保。<br/><br/>2、保证担保。
                                    <br/>（1）宏远航城为借款本息偿还提供连带责任保证担保；<br/>（2）宏远物流法定代表人陈远先生提供无限连带责任保证担保；<br/><br/>3、质押担保。<br/>（1）陈远先生与孙贵满女士以其持有的宏远物流陈远先生与孙贵满女士以其持有的宏远物流100%股权提供质押担保。<br/>（2）海航（北京）物流有限公司100%股权为借款本息偿还提供股权提供质押担保。
                                </td>
                            </tr>
                            <tr>
                                <th valign="top">产品说明</th>
                                <td colspan="3"><br/></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <a class="zaishou" href="javascript:;">出售中</a>
            <a class="ping" href="javascript:;">评
                <span class="shadow di_hidd" style="display: none">北京丰台区房产抵押，北京顺义区土地抵押，充足股权质押！</span><i class='di_hidd'
                                                                                                        style="display: none"></i>
            </a>
        </td>
        <td>100万</td>
        <td>18个月</td>
        <td>9.00%
        </td>
        <td>2014-04-04</td>
        <td>工商企业</td>
        <td>贷款类</td>

        <td><a href="http://www.jinfuzi.com/xintuo/c-14" target="_blank">金谷信托</a></td>
        <td><a class="index-details" href="http://www.jinfuzi.com/product/0110260" target="_blank">查看详情</a></td>
    </tr>
    <tr>
        <td><span class="index-NB-yellow">3</span></td>
        <td id="index-producs-name">

            <div class="pdnamepop">
                <a title="长安信托-云南御景新城项目合伙企业投资集合资金信托计划" target="_blank" href="http://www.jinfuzi.com/product/0112825">云南御景新城项目</a>

                <div style="left:150px; z-index:9999; display: none" class="namepopcon shadow">
                    <span class="popiconarr"></span>

                    <p class="poptits">长安信托-云南御景新城项目合伙企业投资集合资金信托计划</p>

                    <div class="xtinfotb inter-xttb">
                        <table>
                            <tbody>
                            <tr>
                                <th width="150">信托公司：</th>
                                <td width="180">长安信托</td>
                                <th width="120">投资行业：</th>
                                <td width="120">房地产</td>
                            </tr>
                            <tr>
                                <th width="120">发售日期：</th>
                                <td>2014-04-04</td>
                                <th width="120">预期收益：</th>
                                <td>10.00%</td>
                            </tr>
                            <tr>
                                <th width="120">预计发行规模(万)：</th>
                                <td>14800万</td>
                                <th width="120">最低认购资金(万)：</th>
                                <td>100万</td>
                            </tr>

                            <tr>
                                <th valign="top" rowspan="2">收益说明</th>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    100-300万(不含)
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 10%</td>
                            </tr>
                            <tr>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    300万及以上
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 10.8%</td>
                            </tr>

                            <tr>
                                <th valign="top">风险控制</th>
                                <td colspan="3">
                                    1、受托人与北京中安信邦资产管理有限公司签署《有限合伙份额附条件转让合同》，合同约定如委托贷款借款人云南御行中天房地产开发有限公司未能按期支付委贷本息，北京中安信邦资产管理有限公司对受托人持有的合伙企业有限合伙份额进行溢价回购。<br/><br/>2、委托贷款借款人云南御行中天房地产开发有限公司提供抵押物，并办理抵押登记手续；抵押物面积合计为
                                    160455.71平方米，抵押物价值合计30342万元，本金抵押率为49.44%。<br/><br/>3、北京市恒盛投资有限公司为借款人按期偿还委托贷款本息提供连带责任保证担保。<br/><br/>4、实际控制人(王云凯夫妇)为借款人按期偿还委托贷款本息提供连带责任保证担保。
                                </td>
                            </tr>
                            <tr>
                                <th valign="top">产品说明</th>
                                <td colspan="3"><br/></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <a class="zaishou" href="javascript:;">出售中</a>
            <a class="ping" href="javascript:;">评
                <span class="shadow di_hidd" style="display: none">中信集团旗下资管公司兜底回购，3亿元优质抵押物，多方实力担保！</span><i
                    class='di_hidd' style="display: none"></i>
            </a>
            <a class="di" href="javascript:;">抵<span class="shadow di_hidd" style="display: none">抵押率49.44%</span><i
                    class='di_hidd' style="display: none"></i></a>
        </td>
        <td>100万</td>
        <td>24个月</td>
        <td>10.00%
        </td>
        <td>2014-04-04</td>
        <td>房地产</td>
        <td>贷款类</td>

        <td><a href="http://www.jinfuzi.com/xintuo/c-33" target="_blank">长安信托</a></td>
        <td><a class="index-details" href="http://www.jinfuzi.com/product/0112825" target="_blank">查看详情</a></td>
    </tr>
    <tr class="bgf7f7f7">
        <td><span class="index-NB">4</span></td>
        <td id="index-producs-name">

            <div class="pdnamepop">
                <a title="华融信托-四川金土地股权投资暨回购集合资金信托计划（第五期）" target="_blank" href="http://www.jinfuzi.com/product/0110371">四川金土地股权投资5期</a>

                <div style="left:150px; z-index:9999; display: none" class="namepopcon shadow">
                    <span class="popiconarr"></span>

                    <p class="poptits">华融信托-四川金土地股权投资暨回购集合资金信托计划（第五期）</p>

                    <div class="xtinfotb inter-xttb">
                        <table>
                            <tbody>
                            <tr>
                                <th width="150">信托公司：</th>
                                <td width="180">华融国际信托</td>
                                <th width="120">投资行业：</th>
                                <td width="120">工商企业</td>
                            </tr>
                            <tr>
                                <th width="120">发售日期：</th>
                                <td>2014-04-04</td>
                                <th width="120">预期收益：</th>
                                <td>9.50%</td>
                            </tr>
                            <tr>
                                <th width="120">预计发行规模(万)：</th>
                                <td>40000万</td>
                                <th width="120">最低认购资金(万)：</th>
                                <td>100万</td>
                            </tr>

                            <tr>
                                <th valign="top" rowspan="3">收益说明</th>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    100-300万(不含)
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 9.5%</td>
                            </tr>
                            <tr>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    300(含)-800万(不含)
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 10%</td>
                            </tr>
                            <tr>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    800万及以上
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 10.5%</td>
                            </tr>

                            <tr>
                                <th valign="top">风险控制</th>
                                <td colspan="3">
                                    （1）科创控股集团有限公司以其持有的四川科创医药集团有限公司71.80%股权质押，医药集团总资产113.43亿元，净资产62.31亿元，营业收入111.97亿元，净利润9.1亿元。<br/>（2）科创控股集团有限公司及实际控制人何俊明夫妇为股权回购提供连带责任保证。<br/>（3）设立资金监管。开设监管账户，对信托资金的使用事先审核，确保其用于向眉山科创进行增资补充流动资金等。<br/>（4）设立资金提前归集条款。信托计划到期前30天开始进行信托本金的归集。
                                </td>
                            </tr>
                            <tr>
                                <th valign="top">产品说明</th>
                                <td colspan="3"><br/></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <a class="zaishou" href="javascript:;">出售中</a>
            <a class="ping" href="javascript:;">评
                <span class="shadow di_hidd" style="display: none">中国企业500强集团担保，充足股权质押，集团控制人连带责任担保！</span><i
                    class='di_hidd' style="display: none"></i>
            </a>
        </td>
        <td>100万</td>
        <td>24个月</td>
        <td>9.50%
        </td>
        <td>2014-04-04</td>
        <td>工商企业</td>
        <td>股权类</td>

        <td><a href="http://www.jinfuzi.com/xintuo/c-65" target="_blank">华融国际信托</a></td>
        <td><a class="index-details" href="http://www.jinfuzi.com/product/0110371" target="_blank">查看详情</a></td>
    </tr>
    <tr>
        <td><span class="index-NB">5</span></td>
        <td id="index-producs-name">

            <div class="pdnamepop">
                <a title="陆家嘴信托-甬鑫1号集合资金信托计划" target="_blank" href="http://www.jinfuzi.com/product/0113257">甬鑫1号</a>

                <div style="left:150px; z-index:9999; display: none" class="namepopcon shadow">
                    <span class="popiconarr"></span>

                    <p class="poptits">陆家嘴信托-甬鑫1号集合资金信托计划</p>

                    <div class="xtinfotb inter-xttb">
                        <table>
                            <tbody>
                            <tr>
                                <th width="150">信托公司：</th>
                                <td width="180">陆家嘴信托</td>
                                <th width="120">投资行业：</th>
                                <td width="120">其他</td>
                            </tr>
                            <tr>
                                <th width="120">发售日期：</th>
                                <td>2014-04-04</td>
                                <th width="120">预期收益：</th>
                                <td>6.00%</td>
                            </tr>
                            <tr>
                                <th width="120">预计发行规模(万)：</th>
                                <td>5000万</td>
                                <th width="120">最低认购资金(万)：</th>
                                <td>100万</td>
                            </tr>

                            <tr>
                                <th valign="top" rowspan="1">收益说明</th>
                                <td bgcolor="#EFFBFF" style="border-style:dashed">
                                    100万及以上
                                </td>
                                <td bgcolor="#EFFBFF" style="border-style:dashed" colspan="2">年化收益率为 6%</td>
                            </tr>

                            <tr>
                                <th valign="top">风险控制</th>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <th valign="top">产品说明</th>
                                <td colspan="3"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <a class="zaishou" href="javascript:;">出售中</a>
            <a class="ping" href="javascript:;">评
                <span class="shadow di_hidd" style="display: none">上海陆家嘴金融发展有限公司旗下信托公司发行，组合投资，收益稳定！</span><i
                    class='di_hidd' style="display: none"></i>
            </a>
        </td>
        <td>100万</td>
        <td>12个月</td>
        <td>6.00%
        </td>
        <td>2014-04-04</td>
        <td>其他</td>
        <td>组合类</td>

        <td><a href="javascript:void(0)" target="_blank">陆家嘴信托</a></td>
        <td><a class="index-details" href="javascript:void(0)" target="_blank">查看详情</a></td>
    </tr>
>>>>>>> 4fe2ab6d8ea98f43f270650139324b37a1c1d1b4
    </tbody>
    </table>

    <div class="index-ft-pageNB">
        <div class="index-pager">
            <ul class="paging-a">
                <li class="pagination">
                    <a class="pre-disabled" target="_self" href="javascript:void(0)"></a>
                    <a class="nowPages" target="_self" href="javascript:void(0)">1</a>
                    <a class="" target="_self" href="javascript:void(0)">2</a>
                    <a class="next" target="_self"
                       href="javascript:void(0)">下一页</a>
                </li>
                <li class="jump-page-wrap"> 共 <em id='prdTotalCount'>678</em> 页 到
                    <input type="text" maxlength="4" autocomplete="off" class="pnum" id="pageNum" data-href="">
                    页
                </li>
                <li class="btn-wrap">
                    <a class="btn-a2" href="javascript:;" target="_self">
	          <span class="btn-l">
	          <button type="button" onclick="javascript:gotoPage($('#pageNum'));" target="_self">
                  <em>确定</em>
              </button>
	          </span>
                        <span class="btn-r"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    <script>

        $("input[type='checkbox'][name!='coms[]']").click(function (e) {

            window.location.href = $(this).parent('a').attr('href');
        });


        $(".di").hover(function () {
            $(this).children().show();

        }, function () {
            $(this).children().hide();
        });

        $('.pdnamepop').hover(function () {
            $(this).children('div').show();
        }, function () {
            $(this).children('div').hide();
        });

        $('.ping').hover(function () {
            $(this).children().show();

        }, function () {
            $(this).children().hide();
        });


        function gotoPage(page) {
            var data_href = page.attr('data-href');
            var href = data_href.replace(/(\-\d+)$/, '-' + page.attr('value'))
            if (!(/(\-\d+)$/.test(data_href))) {
                href = data_href + "-0-0-0-0-0-0-0-0-0-0-" + page.attr('value');
            }
            window.location.href = href;

        }

        jQuery(function () {
            $("#clear").click(function () {
                $id_city_Ip_Chooser.find('checkbox').attr('checked', false);
            });

            var $id_city_Ip_Chooser = $("#city_Ip_Chooser").appendTo("body");
            $(".select-more").click(function () {

                $id_city_Ip_Chooser.find('a').show();
                var $jfz_dg = new $.JFZ_Dialog({
                    source: {
                        "inline": $id_city_Ip_Chooser.show()
                    },
                    title: '更多信托投资公司',
                    overlay_close: false,
                    buttons: false,
                    width: 600,
                    type: false
                });
            });

        });

        //发送是否节假日促销的ajax
        var isHolidayPost = function ($url, $isHoliday) {
            var list = $('#J_prds_list');
            $.post($url, 'isHoliday=' + $isHoliday, function (html) {
                list.empty();
                list.append(html);
                var count = $('#prdTotalCount').attr('itemCount'),
                    pageCount = $('#prdTotalCount').attr('pageCount'),
                    curPage = $('#prdTotalCount').attr('curPage'),
                    preLink = $('#preLink').val(),
                    nextLink = $('#nextLink').val(),
                    pageMark = curPage + '/' + pageCount,
                    pageLink = preLink + '&nbsp;' + nextLink;
                $('#listSearchItemCount').text(count);
                $('#pageMark').text(pageMark);
                $('#top_pages_link').html(pageLink);
            }, 'html');
        }

        $(function () {
            var $holidayLink = $("#holidayLink"),
                $holidayChck = $("#holidayChck"),
                $checked,
                $isHoliday,
                qCurUrl = $('#J_prds_list').attr('qCurUrl');
            $holidayLink.on("click", function () {
                if (typeof(arguments[1]) == 'undefined') {
                    $checked = $holidayChck.attr("checked");
                } else {
                    $checked = arguments[1];
                }
                if ($checked == 'checked') {
                    $holidayChck.attr("checked", false);
                    $holidayLink.removeClass('check').addClass('nocheck');
                    $isHoliday = 0;
                } else {
                    $holidayChck.attr("checked", true);
                    $holidayLink.removeClass('nocheck').addClass('check');
                    $isHoliday = 1;
                }
                isHolidayPost(qCurUrl, $isHoliday);
            });

            $holidayChck.on("click", function (e) {
                if ($holidayChck.attr('checked') == 'checked') {
                    $checked = false;
                } else {
                    $checked = 'checked';
                }
                $holidayLink.trigger("click", $checked);
                e.stopPropagation();
            })

        });
    </script>
<?php echo $this->load->view('footer'); ?>