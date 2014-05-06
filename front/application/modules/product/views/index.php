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
<<<<<<< HEAD
			            				                	<span class=bx>
			                		<a href='<?php $tempparams = $params; $tempparams[1] = 0; echo '/'. implode('-', $tempparams);?>'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[1] = 1; echo '/'. implode('-', $tempparams); ?>'>50万以下</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[1] = 2; echo '/'. implode('-', $tempparams); ?>'>50-100万</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[1] = 3; echo '/'. implode('-', $tempparams); ?>'>100-300万</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[1] = 4; echo '/'. implode('-', $tempparams); ?>'>300万以上</a>
			                	</span>
=======
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
>>>>>>> 54bf44605f50048cbd7514e365e22d9a131d5349

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>产品期限：</dt>
            <dd>
			                	<span class=bx>
			                		<a href='<?php $tempparams = $params; $tempparams[2] = 0; echo '/'. implode('-', $tempparams); ?>'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[2] = 1; echo '/'. implode('-', $tempparams); ?>'>12个月以下</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[2] = 2; echo '/'. implode('-', $tempparams); ?>'>12-24个月</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[2] = 3; echo '/'. implode('-', $tempparams); ?>'>24-36个月</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[2] = 4; echo '/'. implode('-', $tempparams); ?>'>36个月以上</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>预期收益：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='<?php $tempparams = $params; $tempparams[3] = 0; echo '/'. implode('-', $tempparams); ?>'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[3] = 1; echo '/'. implode('-', $tempparams); ?>'>6%以下</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[3] = 2; echo '/'. implode('-', $tempparams); ?>'>6%-8%</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[3] = 3; echo '/'. implode('-', $tempparams); ?>'>8%-10%</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[3] = 4; echo '/'. implode('-', $tempparams); ?>'>10%以上</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>收益分配：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='<?php $tempparams = $params; $tempparams[4] = 0; echo '/'. implode('-', $tempparams); ?>'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[4] = 1; echo '/'. implode('-', $tempparams); ?>'>按月付息</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[4] = 2; echo '/'. implode('-', $tempparams); ?>'>按季付息</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[4] = 3; echo '/'. implode('-', $tempparams); ?>'>半年付息</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[4] = 4; echo '/'. implode('-', $tempparams); ?>'>按年付息</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[4] = 5; echo '/'. implode('-', $tempparams); ?>'>到期付息</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>抵(质)押率：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='<?php $tempparams = $params; $tempparams[5] = 0; echo '/'. implode('-', $tempparams); ?>'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[5] = 1; echo '/'. implode('-', $tempparams); ?>'>30%以下</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[5] = 2; echo '/'. implode('-', $tempparams); ?>'>30%-40%</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[5] = 3; echo '/'. implode('-', $tempparams); ?>'>40%-50%</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[5] = 4; echo '/'. implode('-', $tempparams); ?>'>50%以上</a>
			                	</span>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="clearfix">
            <dt>投资方向：</dt>
            <dd>
			            				                	<span class=bx>
			                		<a href='<?php $tempparams = $params; $tempparams[6] = 0; echo '/'. implode('-', $tempparams); ?>'>不限</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[6] = 1; echo '/'. implode('-', $tempparams); ?>'>房地产</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[6] = 2; echo '/'. implode('-', $tempparams); ?>'>金融</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[6] = 3; echo '/'. implode('-', $tempparams); ?>'>基础设施</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[6] = 4; echo '/'. implode('-', $tempparams); ?>'>工商企业</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[6] = 5; echo '/'. implode('-', $tempparams); ?>'>工矿企业</a>
			                	</span>
			                			                	<span class=>
			                		<a href='<?php $tempparams[6] = 6; echo '/'. implode('-', $tempparams); ?>'>其他</a>
			                	</span>

            </dd>
        </dl>
    </li>
    </ul>
    </div>
    <div class="ft have-select">
        <span class="productsNB">共
    <a href="" id='listSearchItemCount'><?php echo $count;?></a>
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

            <span class="fl" id='pageMark'> <?php echo $params[11]; ?>/<?php echo $pagenum?> </span>
      <span class="index-top-pages fl" id='top_pages_link'>
      	<a class="index-top-lastpage" <?php $tempparams = $params; if($tempparams[11] > 1) {
            $tempparams[11] -= 1;
            echo 'href="/'. implode('-', $tempparams).'"';
        } else {
            echo 'style="cursor:auto;"';
        }?>></a>
	    <a class="index-top-nextpage" <?php
            $tempparams = $params;
            if($tempparams[11] < $pagenum) {
                $tempparams[11] +=1;
                echo 'href="/'. implode('-', $tempparams).'"';
            }
        ?>></a>
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
                <a title="<?php echo $products[$i]['full_name']?>" target="_blank" href="http://www.jinfuzi.com/product/014245"><?php echo $products[$i]['short_name']?></a>
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
    <?php
    }
    ?>
    </tbody>
    </table>

    <div class="index-ft-pageNB">
        <div class="index-pager">
            <ul class="paging-a">
                <li class="pagination">

                    <?php $tempparams = $params; if($tempparams[11] > 1) {
                        $tempparams[11] -= 1;
                    ?>
                    <a class="linksup" target="_self" href="/<?php echo implode('-', $tempparams);?>">上一页</a>
                    <?php } else { ?>
                    <a class="pre-disabled" target="_self" href="javascript:void(0)"></a>
                    <?php }?>

                    <?php
                    for($i = (($params[11] - 5) > 0 ? ($params[11] - 5) : 1); $i < $params[11] ; $i++) {
                    ?>
                    <a class="<?php if($i == $params[11]) echo 'nowPages'; ?>" target="_self" href="<?php
                    $tempparams = $params; $tempparams[11] = $i; echo '/' . implode('-', $tempparams);
                    ?>"><?php echo $i ?></a>

                    <?php
                    }?>

                    <a class="nowPages" target="_self" href="/<?php echo implode('-', $params);?>"><?php echo $params[11];?></a>

                    <?php
                    for($i = $params[11] + 1; $i <= ($pagenum > ($params[11] + 4) ? ($params[11] + 4) : $pagenum); $i++) { ?>
                        <a class="<?php if($i == $params[11]) echo 'nowPages'; ?>" target="_self" href="<?php
                    $tempparams = $params; $tempparams[11] = $i; echo '/' . implode('-', $tempparams);
                    ?>"><?php echo $i ?></a>
                    <?php
                    }
                    ?>

                    <a class="next" target="_self"
                       href="javascript:void(0)">下一页</a>
                </li>
                <li class="jump-page-wrap"> 共 <em id='prdTotalCount'><?php echo $pagenum;?></em> 页 到
                    <input type="text" maxlength="4" autocomplete="off" class="pnum" id="pageNum" data-href="<?php
                    echo implode('-', $params);
                    ?>">
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
                href = data_href + "<?php $tempparams = $params; $tempparams[0] = ""; $tempparams[11] = ""; echo implode('-', $tempparams); ?>" + page.attr('value');
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