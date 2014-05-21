<?php echo $this->load->view('header');?>
<div class="sm-mod-site">
    <span class="banfirtxt">当前位置：</span>
    <a href="/">首页</a>
    <span class="icon-arrl">&gt;&gt;</span>
    <a href="/company">信托公司列表</a>
    <span class="icon-arrl">&gt;&gt;</span>
    <a><?php echo $company['name']?></a>
</div>
<div class="layout">

<div class="xtinfotb" id="more_intro">
    <table>
        <thead>
        <tr>
            <td colspan="4" class="xt-pdinfosbg">
                <div class="xt-pdinfos ">
                    <h2 class="xttbname">爱建信托</h2>
                    <p class="tbcheckmore"><a href="/company">查看全部信托公司&gt;&gt;</a></p>
                </div>
            </td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width="100" class="tbtits"><p>公司简称</p></td>
            <td width="250"><?php echo $company['name'];?></td>
            <td width="" class="tbtits"><p>注册资本</p></td>
            <td width="200"><?php echo $company['register_capital']?></td>
        </tr>
        <tr>
            <td class="tbtits"><p>公司全称</p></td>
            <td colspan="3"><?php echo $company['full_name']?></td>
        </tr>
        <tr>
            <td class="tbtits"><p>英文名称</p></td>
            <td><?php echo $company['en_name']?><</td>
            <td class="tbtits"><p>董事长</p></td>
            <td><?php echo $company['chairman']?></td>
        </tr>
        <tr>
            <td class="tbtits"><p>总经理</p></td>
            <td><?php echo $company['manage_director']?></td>
            <td class="tbtits"><p>是否上市</p></td>
            <td><?php echo $company['is_listed'] == 0?'否':'是';?></td>
        </tr>
        <tr>
            <td class="tbtits"><p>注册时间</p></td>
            <td><?php echo $company['register_time']?></td>
            <td class="tbtits"><p>地区</p></td>
            <td><?php echo $company['area']?></td>
        </tr>
        <tr>
            <td class="tbtits">
                <p>大股东</p></td>
            <td colspan="3"><?php echo $company['major_stockholder']?></td>
        </tr>
        <tr>
            <td class="tbtits"><p>注册地址</p></td>
            <td colspan="3"><?php echo $company['address']?></td>
        </tr>
        <tr>
            <td class="tbtits"><p>公司简介</p></td>
            <td colspan="3"><?php echo $company['introduce']?></td>
        </tr>
        </tbody>
    </table>
</div>

<div class="xtnolbox" id="anchor_page_turning" style="margin-top: 20px;">

</div>
<!--
<div class="xt-listbox">
    <div class="xtinfolist" style="width: 1000px">
        <div class="xtinfocon">
            <h3><a target="_blank" title="爱建信托-苏州金品常熟地产项目投资集合资金信托计划" href="/product/0113229">苏州金品常熟地产</a></h3>
            <p><span class="tpmag"><em class="txttit">门槛：</em>100万</span><em class="txttit">产品期限：</em>30个月</p>
            <p><span class="tpmag"><em class="txttit">类型：</em>房地产</span><em class="txttit">发售日期：</em>2014-03-26</p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="listpage">
        <a class="linksup pglinks-no" target="_self" href="javascript:;">上一页</a>
        <a class="on" target="_self" href="/xintuo/c-8-7-1#anchor_page_turning">1</a>
        <a class="" target="_self" href="/xintuo/c-8-7-2#anchor_page_turning">2</a>
        <a class="" target="_self" href="/xintuo/c-8-7-3#anchor_page_turning">3</a>
        <a class="" target="_self" href="/xintuo/c-8-7-4#anchor_page_turning">4</a>
        <a class="" target="_self" href="/xintuo/c-8-7-5#anchor_page_turning">5</a>
        <a class="" target="_self" href="/xintuo/c-8-7-6#anchor_page_turning">6</a>
        <a class="" target="_self" href="/xintuo/c-8-7-7#anchor_page_turning">7</a>
        <a class="" target="_self" href="/xintuo/c-8-7-8#anchor_page_turning">8</a>
        <a class="linksnext" target="_self" href="/xintuo/c-8-7-2#anchor_page_turning">下一页</a>
    </div>
</div>
-->
</div>
<?php echo $this->load->view('footer'); ?>
