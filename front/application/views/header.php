<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="renderer" content="webkit">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="信托产品 2013年信托产品 在售信托产品 最新信托产品 信托产品大全 信托公司 信托指南 固定收益信托" />
        <link rel="Shortcut Icon" href="/static/cmpt/root/image/shortico.png" />
        <link rel="stylesheet" type="text/css" href="/static/css/common/reset.css" />
        <link rel="stylesheet" type="text/css" href="/static/css/common/global.css" />
        <link rel="stylesheet" type="text/css" href="/static/css/common/common.css" />
        <link rel="stylesheet" type="text/css" href="/static/plugin/JFZ_Dialog/css/jfz-dialog2.css" />
        <link rel="stylesheet" type="text/css" href="/static/css/common/topbanner.css" />
        <link rel="stylesheet" type="text/css" href="/static/css/xintuo/xt.css" />
        <link rel="stylesheet" type="text/css" href="/static/cmpt/root/style/xt.css" />
        <link rel="stylesheet" type="text/css" href="/static/cmpt/root/style/placehold.css" />
        <link rel="stylesheet" type="text/css" href="/static/cmpt/root/script/plugin/JFZ_Dialog/css/JFZ_dialog.css" />
        <link rel="stylesheet" type="text/css" href="/static/cmpt/root/js/plugin/jfz_slider/css/JFZ_Slider.css" />
        <script type="text/javascript" src="/assets/8b5bc196/jquery.min.js"></script>
        <script type="text/javascript" src="/static//plugin/jquery.cookie.js"></script>
        <script type="text/javascript" src="/static//plugin/JFZ_Dialog/js/JFZ_dialog2.js"></script>
        <script type="text/javascript" src="/static//plugin/jquery.jfz.rsvform.js"></script>
        <script type="text/javascript" src="/static/js/common/citys.js"></script>
        <script type="text/javascript" src="/static/js/common/public.js"></script>
        <title>跃盈财富</title>
    </head>
    <body>
        <!-- toolbar -->
        <div class="md_hd_bar bg_twill">
            <div class="layout clearfix">
                <!-- login wrap -->
                <ul class="login_wrap">
                    <li class="hd_login_info login_off">
                        <span>欢迎您光临跃盈财富！</span>
                </ul>
                <!-- toolbar menu -->
                <ul class="tb_list">
                    <li class="tb_tel">
                        <span class="f_f60"><i class="ico_tel"></i>021-51351659</span>
                    </li>
                </ul>
            </div>
        </div>
        <!--首页banner模块-->
        <div class="md_hd_logowrap layout clearfix">
            <!-- logo -->
            <div class="md_hd_logo">
                <h1 class="logo">
                    <a class="logo_link" title="跃盈财富" href="/">跃盈财富，聪明您的投资</a>        </h1>
                <div class="logo_info">
                </div>
            </div>
            <!-- search -->
            <div class="md_hd_search" style="display: none;">
                <div class="search_wrap">
                    <form id="searchForm" class="search_form clearfix"  action="/xt/list/search" method="get" target="_blank">
                        <!-- 选中状态增加active -->
                        <div class="search_select cmd_wrap f_fl">
                            <div id="searchButton" class="search_select_hd cmd_btn">
                                <span id="selected_txt">信托产品</span>
                                <span class="select_ico"><em class="arrow"></em></span>
                            </div>
                            <div id="typeList" class="search_select_bd cmd_con">
                                <ul class="list">
                                    <li><a href="javascript:;">信托产品</a></li>
                                     <li><a href="javascript:;">资管产品</a></li>
                                    <li><a href="javascript:;">有限合伙</a></li>
                                    <li><a href="javascript:;">阳光私募</a></li>
                                    <li><a href="javascript:;">银行理财</a></li>
                                    <li class=><a href="javascript:;">理财问答</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" id="serachType" value="0">
                        <input type="text" class="f_fl search_keyword" id="j_search_keyword" name="keyword" autocomplete="off"/>
                        <input type="submit" class="f_fr search_submit" id="" name="" value=""/>
                    </form>
                </div>
                <!--
                <div class="search_hot">
                    <a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/c-7">中铁信托</a><a title="" target="_blank" href="http://www.jinfuzi.com/index/zq.html">股票开户</a><a title="" target="_blank" href="http://www.jinfuzi.com/advert/xintuo/xtxe.html">小额理财</a><a title="" target="_blank" href="http://www.jinfuzi.com/tg/jj-1.html">基金定投</a>        </div>
                    -->
            </div>
        </div>
        <!-- start in topbar -->
        </div>
        <!--首页导航菜单栏模块-->
        <div class="md_hd_nav">
            <div class="hd_nav_con layout clearfix">
                <ul class="hd_main_menu" id="yw0">
        <li class="mi-short <?php if( $this->uri->segment(1) == 'main'|| $this->uri->segment(1) == '') echo 'active';?>"><a href="/">信托首页</a></li>
        <li class="mi-long <?php if( $this->uri->segment(1) == 'product') echo 'active';?>"><a href="/product">信托产品</a></li>
        <li class="mi-long <?php if( $this->uri->segment(1) == 'company') echo 'active';?>"><a href="/company">信托公司</a></li>
        <li class="mi-short <?php if( $this->uri->segment(1) == 'lesson') echo 'active';?>"><a href="/lesson">信托课堂</a></li>
        <li class="mi-short <?php if( $this->uri->segment(1) == 'guide') echo 'active';?>"><a href="/guide">信托导购</a></li>
        <li class="mi-long <?php if( $this->uri->segment(1) == 'consult') echo 'active';?>"><a href="/consult">信托资讯</a></li>
        <li class="mi-short <?php if( $this->uri->segment(1) == 'connect') echo 'active';?>"><a href="/connect">联系我们</a></li>
        </ul>

            </div>
        </div>