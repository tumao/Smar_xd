<?php echo $this->load->view('header');?>

                                                    <div class="sm-mod-site">
  <span class="banfirtxt">当前位置：</span>
<a href="/">首页</a>
<span class="icon-arrl">&gt;&gt;</span>
<a href="/lesson">信托课堂</a>
</div>
<div class="xtmain">

    <div class="col01box fl">

        <div class="alljsbox">
            <h2>信托课堂</h2>

            <div class="jzallmap">
                <ul class="">
                    <?php foreach($result as $val){ ?>
                    <li style="font-size:14px;">
                        <a href="/lesson/lessoninfo?id=<?php echo $val['id']; ?>">
                            <?php echo $val['title']; ?>
                             <span style="float:right;"> <?php echo $val['ctime']; ?> </span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
               <!--  <a href="">-1-</a> -->
               <div style="padding:10px; width:200px; margin:0 auto;">
                    <?php if( $pages > 1){ ?>
                    <?php if( $page_now > 1){ ?>
                   <a href="/lesson?page=<?php echo $page_now-1; ?>">[上一页]</a>
                   <?php } ?>
                   <?php for( $i=1; $i<=$pages; $i++){ ?>
                    <a href="/lesson?page=<?php echo $i; ?>">[<?php echo $i; ?>]</a>
                    <?php } ?>
                    <?php if( $page_now +1< $pages){ ?>
                    <a href="/lesson?page=<?php echo $page_now+1; ?>">[下一页]</a> 
                    <?php } ?>
                    <?php } ?>
               </div>
               
            </div>

        </div>

    </div><!-- col01box end -->
    <div class="colsidbox fr ">
    <div class="banfw">
    <img src="/static/cmpt/root/images/xt/fuwuimg.png" alt=""/>
</div>  

    <div class="xtnolbox">
    <div class="xttitbox">
        <h2 class="sidtits kuaitit">快速搜索</h2>
        <div class="titsublink">
            <a href="/product" target="_blank">&gt;&gt;更多</a>
        </div>
    </div>
    <!-- xttitbox end -->
    <div class="kuaisoucon">

        <dl class="kuaisoulist">
                        <dt>
                期限
            </dt>
            <dd>
                <a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-0-1-0-0-1">1年内</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-0-2-0-0-1">1-2年</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-0-3-0-0-1">2-3年</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-0-4-0-0-1">3年以上</a>         </dd>
                        <dt>
                收益
            </dt>
            <dd>
                <a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-1-0-0-0-1">小于6%</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-2-0-0-0-1">6-8%</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-3-0-0-0-1">8-10%</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-0-4-0-0-0-1">大于10%</a>          </dd>
                        <dt>
                门槛
            </dt>
            <dd>
                <a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-1-0-0-0-0-1">小于50万</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-2-0-0-0-0-1">50-100万</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-3-0-0-0-0-1">100-300万</a><a title="" target="_blank" href="http://www.jinfuzi.com/xintuo/list-0-0-0-0-0-4-0-0-0-0-1">大于300万</a>          </dd>
                    </dl>
    </div>
</div>
    <div class="xtnolbox">
    <div class="xttitbox xtnewtit">
        <h2 class="sidtits">一周发行收益排名</h2>
        <div class="titsublink"><a href="#" class="" title=""></a></div>
    </div>
    <div class="xtpaimintb">
        <table class="">
            <thead>
                <tr>
                    <td width="34">&nbsp;</td>
                    <td width="155">产品名称</td>
                    <td width="61"> 预期收益</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="cen"><span class="tbiconnum numred">1</span></td>
                    <td><p><a target="_blank" title="普仁7号财富管理基金（I级） " href="http://www.jinfuzi.com/product/0113204">普仁银行</a></p></td>
                    <td class="cen"><span class="c_sy">11.00%</span></td>
                </tr>
            </tbody>

        </table>

    </div>
</div>    <div class="clear"></div>
    </div><!-- colsidbox end -->
    <div class="clear"></div>

    <div class="hotxtbox">
    <div class="hotxttit"><h2>热门信托机构</h2></div>
    <div class="hotxtlist">
        <ul class="">
            <?php foreach( $hot_company as $company){ ?>
            <li>
                <a href="http://www.jinfuzi.com/xintuo/c-6">
                <img width="50" height="50" src="/assets/a92e9011/comlogo/6.jpg" alt="中融国际信托有限公司" /><?php echo $company['name']; ?></a>
            </li>
            <?php } ?>
        </ul>
        <div class="clear"></div>
    </div>
</div></div><!-- xtmain end --> <!--<script type='text/javascript' src='http://tb.53kf.com/kf.php?arg=10018445&style=1'></script>-->
<?php echo $this->load->view('footer'); ?>