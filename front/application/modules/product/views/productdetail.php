<?php echo $this->load->view('header'); ?>
<div class="sm-mod-site">
    <span class="banfirtxt">当前位置：</span>
    <a href="/">首页</a><span class="icon-arrl">&gt;&gt;</span>
    <a href="/product">信托产品列表</a><span class="icon-arrl">&gt;&gt;</span>
    <a><?php echo $product['short_name'];?></a>
</div>
<div class="layout">
    <div class="xt-pdinfos pdtopinfos shadow ">
        <div class="fl">
            <h2 class="xttbname">
                <a href="javascript:;" title="<?php echo $product['short_name']?>" class="bnameLink"><?php echo $product['short_name']?></a>
            </h2>

            <p class="txttip"><a href="javascript:;" title="<?php echo $product['tip']?>"><?php echo $product['tip']?></a></p>
        </div>
        <div class="tbyuebox side3 sidetophe fr">
            <ul>
                <li class="onsales hover">
                    <p class="tits">预期收益率</p>
                    <p class="sy-infos"><?php echo $product['income_rate'].'%'?></p>

                </li>
                <li class="onsales hover">
                    <p class="tits">销售门槛</p>
                    <p class="sy-infos"><?php echo ($product['min_sub_amount']/10000).'万'?></p>
                </li>
                <li class="onsales hover">
                    <p class="tits">投资期限</p>
                    <p class="sy-infos"><?php echo $product['duration']?>个月</p>
                </li>
            </ul>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="xt-infonavtop">
        <div class="xt-navli">
            <ul class="tb-tabbar">
                <li class="current">
                    <a href="http://www.jinfuzi.com/product/014245" class="cpxq-tab">产品详情</a>
                </li>
            </ul>
        </div>
    </div>


    <div class="xtinfotb">
        <table>
            <thead>
            <tr>
                <th>信托名称</th>
                <td colspan="3" style="font-weight: bold;"><?php echo $product['company_name'].'-'.$product['short_name']?></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th style="width:100px;">信托公司</th>
                <td style="width:200px;"><?php echo $product['company_name']?></td>
                <th style="width:100px;">预计发行规模</th>
                <td width="*"><?php echo $product['circulation']/10000?>万</td>
            </tr>
            <tr>
                <th>存续期</th>
                <td><?php echo $product['duration']?>个月</td>
                <th>预期年收益率</th>
                <td><?php echo $product['income_rate']?>%</td>
            </tr>
            <tr>
                <th>最低认购金额</th>
                <td><?php echo ($product['min_sub_amount']/10000).'万'?></td>
                <th>利息分配</th>
                <td><?php if(is_null($product['interest_distribution_id'])) echo '---'; else echo $product['iint_name'];?></td>
            </tr>
            <tr>
                <th>投资行业</th>
                <td><?php echo $product['investorientation_name'];?></td>
                <th>信托类型</th>
                <td><?php echo $product['xintuo_type_name'];?></td>
            </tr>
            <tr>
                <th valign="top" rowspan="1">收益说明</th>
                <td bgcolor="#EFFBFF">
                    <?php echo $product['income_explain'];?>
                </td>
                <td bgcolor="#EFFBFF" colspan="2">年化收益率为 9%</td>
            </tr>
            <tr>
                <th>抵押物</th>
                <td><?php if(is_null($product['pledge_object'])) echo '---'; else echo $product['pledge_object'];?></td>
                <th>抵押率</th>
                <td><?php if(is_null($product['pledge_rate'])) echo '---'; else echo $product['pledge_rate'];?></td>

            </tr>
            <tr>
                <th>产品说明</th>
                <td colspan="3"><?php echo $product['productinfo'];?></td>
            </tr>
            <tr>
                <th>资金用途</th>
                <td colspan="3"><?php echo $product['purpose_info'];?>
                </td>
            </tr>
            <tr>
                <th>风险控制</th>
                <td colspan="3">
                    <?php echo $product['risk_control_info'];?>
                </td>
            </tr>
            <tr>
                <th>担保方介绍</th>
                <td colspan="3">
                    <?php echo $product['guarantor_info'];?>
                </td>
            </tr>
            <tr>
                <th>受托人</th>
                <td colspan="3">
                    <?php echo $product['guarantor_info'];?>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
    <div class="mt10">

    </div>



</div>
<?php echo $this->load->view('footer'); ?>
