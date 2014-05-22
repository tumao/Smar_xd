<div class="xt_right">
    <!-- ad -->
    <div class="xt_right_ad">
        <a>
            <img src="../static/img/xintuo/da_1.jpg" alt="">
        </a>
    </div>
    <?php $hot_company =  $this->sidebar->output(); 
        // var_dump( $list);
    ?>
    <!-- article -->
    <div class="xt_right_item">
        <h5 class="xt_r_hd heiti">信托－热门公司</h5>

        <div class="xt_r_bd">
            <div class="advantage_list bg_dashed clearfix">
                <dl class="advantage_item">
                    <dt class="tit">投资灵活</dt>
                    <dd class="con"><?php echo $hot_company[0]['name']; ?></dd>
                </dl>
                <dl class="advantage_item">
                    <dt class="tit">收益较高</dt>
                    <dd class="con"><?php echo $hot_company[1]['name']; ?></dd>
                </dl>
                <dl class="advantage_item">
                    <dt class="tit">风险可控</dt>
                    <dd class="con"><?php echo $hot_company[2]['name']; ?></dd>
                </dl>
                <dl class="advantage_item">
                    <dt class="tit">期限明确</dt>
                    <dd class="con"><?php echo $hot_company[3]['name']; ?></dd>
                </dl>
                <dl class="advantage_item">
                    <dt class="tit">资金安全</dt>
                    <dd class="con"><?php echo $hot_company[4]['name']; ?></dd>
                </dl>
                <dl class="advantage_item">
                    <dt class="tit">发售期短</dt>
                    <dd class="con"><?php echo $hot_company[5]['name']; ?></dd>
                </dl>
                <dl class="advantage_item">
                    <dt class="tit">发售期短</dt>
                    <dd class="con"><?php echo $hot_company[6]['name']; ?></dd>
                </dl>
            </div>
            <!-- article list-->
        </div>
    </div>
    <div class="xt_right_item">
        <h5 class="xt_r_hd heiti">快速搜索</h5>

        <div class="xt_r_bd">
            <div class="search_list clearfix">
                <dl class="item ">
                    <dt class="tit">期限：</dt>
                    <dd class="con">
                        <a href="/product-0-1-0-0-0-0-0-0-0-0-1" target="_blank" title="">1年内</a><a
                            href="/product-0-2-0-0-0-0-0-0-0-0-1" target="_blank" title="">1-2年</a><a
                            href="/product-0-3-0-0-0-0-0-0-0-0-1" target="_blank" title="">2-3年</a><a
                            href="/product-0-4-0-0-0-0-0-0-0-0-1" target="_blank" title="">3年以上</a>
                    </dd>
                </dl>
                <dl class="item ">
                    <dt class="tit">收益：</dt>
                    <dd class="con">
                        <a href="/product-0-0-1-0-0-0-0-0-0-0-1" target="_blank" title="">小于6%</a><a
                            href="/product-0-0-2-0-0-0-0-0-0-0-1" target="_blank" title="">6-8%</a><a
                            href="/product-0-0-3-0-0-0-0-0-0-0-1" target="_blank" title="">8-10%</a><a
                            href="/product-0-0-4-0-0-0-0-0-0-0-1" target="_blank" title="">大于10%</a>
                    </dd>
                </dl>
                <dl class="item last">
                    <dt class="tit">门槛：</dt>
                    <dd class="con">
                        <a href="/product-1-0-0-0-0-0-0-0-0-0-1" target="_blank" title="">小于50万</a><a
                            href="/product-2-0-0-0-0-0-0-0-0-0-1" target="_blank" title="">50-100万</a><a
                            href="/product-3-0-0-0-0-0-0-0-0-0-1" target="_blank" title="">100-300万</a><a
                            href="/product-4-0-0-0-0-0-0-0-0-0-1" target="_blank" title="">大于300万</a>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <!-- right end -->
</div>