(function() {
   var REQUEST_PATH = '/qq/';         //虚拟页面用户可以进行自定义
   var GET_ITEMS = function() {
        var list = document.getElementsByName('clk_qq');
    	return list ? list : []; 
};
//  以下部分属于公共代码部分
   window._hmt = window._hmt || [];
   var on = function (elem, event, handler) {
        if(elem.addEventListener) {
            elem.addEventListener(event,handler, false);
        } else if(elem.attachEvent) {
            elem.attachEvent('on'+ event, handler);
        }
};
   var track = function(item, i) {
        on(item, 'mouseup', function() {
            window._hmt.push(['_trackPageview', REQUEST_PATH]);
        });
   };
   on(window, 'load', function() {
        var items = GET_ITEMS(); 
        for(var i = items.length - 1; i >= 0; i--) {
            items[i] && track(items[i],items[i].getAttribute('qq'));
        }
   });
})();