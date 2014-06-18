<?php echo $this->load->view('header');?>
    <div class="sm-mod-site">
  <span class="banfirtxt">当前位置：</span>
<a href="{$this->createUrl('/xt/default/index')}">首页</a>
<span class="icon-arrl">&gt;&gt;</span>
<a href="/company">信托公司列表</a>
</div>
<div class="xtmain">

    <div class="col01box fl">

        <div class="alljsbox">
            <h2>全国信托公司列表</h2>

            <div class="suoyinbox">
                <p class="suoyinnum">拼音索引：
                    <?php
                    $company_letter = array_keys($formatted_companylist);
                    for($i = 0; $i < count($company_letter); $i++) {
                    ?>
                    <em <?php if($i == 0) echo 'class="on"';?>><?php echo $company_letter[$i]; ?></em>
                    <?php } ?>
                </p>
                <?php
                for($i = 0; $i < count($formatted_companylist); $i++) {
                ?>
                <div class="suoyincon" style="<?php if($i != 0) echo 'display:none'?>">
                    <?php
                        foreach($formatted_companylist[$company_letter[$i]] as $key=>$value) {
                    ?>
                    <a href="/company/detail?cid=<?php echo $value['id']?>"><?php echo $value['name']; ?></a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="jzallmap">
                <ul class="">
                    <li>
                        <p class="sypingyin">A B C D E F G</p>
                        <p class="sylists">
                        <?php
                        $array1 = array('A','B','C', 'D', 'E', 'F', 'G');
                        foreach($array1 as $v){
                            if(array_key_exists($v, $formatted_companylist)) {
                                foreach($formatted_companylist[$v] as $k1 => $v1) {
                            ?>
                            <a href="/company/detail?cid=<?php echo $v1['id']?>"><?php echo $v1['name']?></a>
                        <?php
                                }
                            }
                        }
                        ?>
                        </p>
                    </li>
                    <li>
                        <p class="sypingyin">H I J K L M N</p>
                        <p class="sylists">
                        <?php
                        $array1 = array('H','I','J', 'K', 'L', 'M', 'N');
                        foreach($array1 as $v){
                            if(array_key_exists($v, $formatted_companylist)) {
                                foreach($formatted_companylist[$v] as $k1 => $v1) {
                            ?>
                                <a href="/company/detail?cid=<?php echo $v1['id']?>"><?php echo $v1['name']?></a>
                            <?php
                                }
                            }
                        }
                        ?>
                        </p>
                    </li>
                    <li>
                        <p class="sypingyin">O P Q R S T</p>
                        <p class="sylists">
                        <?php
                        $array1 = array('O','P','Q', 'R', 'S', 'T');
                        foreach($array1 as $v){
                            if(array_key_exists($v, $formatted_companylist)) {
                                foreach($formatted_companylist[$v] as $k1 => $v1) {
                            ?>
                                <a href="/company/detail?cid=<?php echo $v1['id']?>"><?php echo $v1['name']?></a>
                            <?php
                                }
                            }
                        }
                        ?>
                        </p>
                    </li>
                    <li>
                        <p class="sypingyin">U V W X Y Z</p>
                        <p class="sylists">
                        <?php
                        $array1 = array('U','V','W', 'X', 'Y', 'Z');
                        foreach($array1 as $v){
                            if(array_key_exists($v, $formatted_companylist)) {
                                foreach($formatted_companylist[$v] as $k1 => $v1) {
                            ?>
                                <a href="/company/detail?cid=<?php echo $v1['id']?>"><?php echo $v1['name']?></a>
                            <?php
                                }
                            }
                        }
                        ?>
                        </p>
                    </li>
                </ul>
            </div>

        </div>

    </div><!-- col01box end -->
    <?php echo $this->load->view('right_side'); ?>
    <div class="clear"></div>
</div><!-- xtmain end --> <!--<script type='text/javascript' src='http://tb.53kf.com/kf.php?arg=10018445&style=1'></script>-->
<?php echo $this->load->view('footer'); ?>
<script type="text/javascript">
    /*<![CDATA[*/
    jQuery(function($) {

        $(".suoyinbox").each(function() {
            var root = $(this);
            root.find(".suoyinnum em").each(function(i){
                $(this).mouseover(function(){
                    root.find(".suoyincon").hide().eq(i).show();
                    $(this).addClass("on").siblings("em").removeClass("on");
                })
            });
        });

        jQuery('body').on('click','#kf_btn_yy',function(){jQuery.yii.submitForm(this,'',{});return false;});
        document.getElementById("bdshell_js").src="http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion="+Math.ceil(new Date()/3600000);
    });
    /*]]>*/
</script>