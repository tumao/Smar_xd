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
                    <?php if( $page_now < $pages){ ?>
                    <a href="/lesson?page=<?php echo $page_now+1; ?>">[下一页]</a> 
                    <?php } ?>
                    <?php } ?>
               </div>
               
            </div>

        </div>

    </div><!-- col01box end -->
    <?php echo $this->load->view('right_side'); ?>
    <div class="clear"></div>

    </div><!-- xtmain end --> <!--<script type='text/javascript' src='http://tb.53kf.com/kf.php?arg=10018445&style=1'></script>-->
<?php echo $this->load->view('footer'); ?>