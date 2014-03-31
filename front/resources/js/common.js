/**折叠菜单**/
$(function(){
	if(!$(".p-selbox:visible").length)
	{
		var timer;
		$(".sx-sel").hover(
		function(){
			if(timer){
				clearTimeout(timer);		
			}
			$(".p-selbox").show();
		},function(){
			timer = setTimeout(function(){
				$(".p-selbox").hide()
			}, 500);
		});
	}
	
	$(".qh_mod_crumb a").attr('target','_self');
	$("a[href='javascript:;']").attr('target','_self');
	$("a[href='#']").attr('target','_self');
	
});

jQuery(document).ready(function() {
    $('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top - 100;
                $('html,body').animate({
                    scrollTop: targetOffset
                },
                1000);
                return false;
            }
        }
    });
});

$(function(){
	InitIframeReserve();
})
function InitIframeReserve()
{
	var html = "<div id=\"iframe_reserve\" style=\"display:none\">" +
					"<iframe frameborder=\"0\" width=\"500\" height=\"315\" scrolling=\"no\"></iframe>"+
					"<a title=\"关闭\" class=\"p-xtclose\">关闭</a>"+
			"</div>";
    $("body").append(html);
    $(".linksyue").attr("href","#iframe_reserve").leanModal({closeButton:".p-xtclose"});
    $(".linksyue").click(function(){
    	var name = $(this).attr('pname');
    	var id = $(this).attr('id');
    	if(typeof(name)=='undefined')
    	{
    		name = '';
    	}
    	if(typeof(id)=='undefined')
    	{
    		id = '';
    	}
    	var src = "/xt/popupwin/reserve?url={0}&name={1}&id={2}".format(encodeURIComponent(window.location.href), encodeURIComponent(name),id);
        $("#iframe_reserve iframe").attr('src', src);
    })
}
