$(function(){
	InitIframeReserve();
});

function InitIframeReserve()
{
	var html = 
    "<div class=\"tc-wrap new\" id=\"iframe_reserve\" style=\"display:none;z-index:99999999\">"+
        "<div class=\"tc-content\">"+
            "<div class=\"tc-hd\">预约</div><a class=\"tc-close\" id=\"JFZDialog_Title_Close\"></a>"+
            "<div class=\"tc-ct\">"+
                "<iframe frameborder=\"0\" width=\"500\" height=\"300\" scrolling=\"no\"></iframe>"+
            "</div>"+
            "<div class=\"clear\"></div>"+
        "</div>"+
    "</div>";
    $("body").append(html);
    $(".yue_link").attr("href","#iframe_reserve").leanModal({closeButton:"#JFZDialog_Title_Close"});
    $(".yue_link").click(function(){
    	var uid = $(this).attr('uid') || -1;
    	var src = "../popupwin/reserveBroker@url={0}&uid={1}".format(encodeURIComponent(window.location.href), uid);
        $("#iframe_reserve iframe").attr('src', src);
    })
}