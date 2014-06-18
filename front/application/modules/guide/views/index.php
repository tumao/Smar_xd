<?php echo $this->load->view('header');?>

                                                    <div class="sm-mod-site">
  <span class="banfirtxt">当前位置：</span>
<a href="{$this->createUrl('/xt/default/index')}">首页</a>
<span class="icon-arrl">&gt;&gt;</span>
<a href="http://www.jinfuzi.com/xintuo/company">信托导购</a>
</div>
<div class="xtmain">

    <div class="col01box fl">

        <div class="alljsbox">
            <h2>信托导购</h2>

            <div class="jzallmap">
                <ul class="" style="padding:20px;">
                     <p style="font-size:20px; width:400px; margin:0 auto;"><?php echo $result['title']; ?> </p>
                     <p style="width:200px; margin:0 auto;"> <?php echo $result['ctime']; ?></p>
                      <div style="border-top:1px solid gray;"><?php echo $result['content']; ?></div>
                </ul>
            </div>

        </div>

    </div><!-- col01box end -->
    <?php echo $this->load->view('right_side'); ?>
    <div class="clear"></div>
</div><!-- xtmain end --> <!--<script type='text/javascript' src='http://tb.53kf.com/kf.php?arg=10018445&style=1'></script>-->
<?php echo $this->load->view('footer'); ?>