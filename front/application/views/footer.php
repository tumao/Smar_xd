<!-- 只有route为首页或友情链接不为空时显示 -->
<div class="md_ft_flink bg_twill">
    <div class="ft_flink_wrap layout">
    	                <div class="list_wrap">
            <h3 class="title">友情链接</h3>
            <ul class="list_1 clearfix">
            	                <li>
                    <a title="中金在线" target="_blank" href="http://www.cnfol.com/">中金在线</a></li>
                                <li>
                    <a title="第一财经" target="_blank" href="http://www.yicai.com/">第一财经</a></li>
                                <li>
                    <a title="中财网" target="_blank" href="http://www.cfi.net.cn/">中财网</a></li>
                                <li>
                    <a title="东方财富网" target="_blank" href="http://www.eastmoney.com/">东方财富网</a></li>
                                <li>
                            </ul>
        </div>
            </div>
</div>
<script type="text/javascript">
(function($){
	$('.list_wrap.product ul').find('li:gt(11)').hide();
	$('.list_wrap.product .title .more').click(function(){
		if ('[展开]' == $(this).html()) {
			$(this).html('[收起]')
			$(this).parent().next().find('li').show();
		} else {
			$(this).html('[展开]');
			$(this).parent().next().find('li:gt(11)').hide();
		}
	});
})(jQuery);
</script>
<!--跃盈财富备案信息模块-->
<div class="md_ft_copyright bg_twill">
	<div class="layout">
		<p class="copyright">
			<span>
                <a>&copy;</a>
                <a>2014 跃盈财富 版权所有</a>
                </span>
			<span>
                沪ICP备1400872</span>
		</p>
	</div>
</div>
</body>
</html>