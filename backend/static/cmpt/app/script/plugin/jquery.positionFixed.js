/*
 * 用于解决ie6不支持fixed定位的bug,基于腾讯cdc糖饼二次开发
 * */
;(function($) {

	jQuery.fn.PositionFixed = function(options) {
		/*
		 * 插件的默认参数
		 * @parameter left:左边距的距离
		 * @parameter top:顶部的距离
		 */
		var defaults = {
			left : 0,
			top : 0
		};
		var settings = $.extend({}, defaults, options || {});

		var position = function(){
      		var isIE6 = !-[1,] && !window.XMLHttpRequest,	/*判断浏览器是否使ie6*/
          		html = document.getElementsByTagName('html')[0],	/*获得html标签*/
          		dd = document.documentElement,		/*获取document元素*/
          		db = document.body,		/*获取document元素*/
          		dom = dd || db,
          		//获取滚动条位置
          		getScroll = function(win){
              		return {
                	 	 left: Math.max(dd.scrollLeft, db.scrollLeft),
                 		 top: Math.max(dd.scrollTop, db.scrollTop)
                		  };
          		};
      
		      
		      // 只需要 html 与 body 标签其一使用背景静止定位即可让IE6下滚动条拖动元素也不会抖动
		      // 注意：IE6如果 body 已经设置了背景图像静止定位后还给 html 标签设置会让 body 设置的背景静止(fixed)失效 
		      if (isIE6 && document.body.currentStyle.backgroundAttachment !== 'fixed') {
		          html.style.backgroundImage = 'url(about:blank)';
		          html.style.backgroundAttachment = 'fixed';
		      };
      
		      return {
		          fixed: isIE6 ? function(elem){
		              var style = elem.style,
		                  doc = getScroll(),
		                  dom = '(document.documentElement || document.body)',
		                  left = parseInt(settings.left) - doc.left,		/*获取元素相对窗口的left距离*/
		                  top = parseInt(settings.top) - doc.top;		/*同上*/
		              this.absolute(elem);
		              style.setExpression('left', 'eval(' + dom + '.scrollLeft + ' + left + ') + "px"');
		              style.setExpression('top', 'eval(' + dom + '.scrollTop + ' + top + ') + "px"');
		          } : function(elem){
		              	elem.style.position = 'fixed';
		          },
		          
		          absolute: isIE6 ? function(elem){
		              var style = elem.style;
		              style.position = 'absolute';
		              style.removeExpression('left');
		              style.removeExpression('top');
		          } : function(elem){
		          		elem.style.position = 'absolute';
		          }
		      };
  		}();
		
        
        
		return this.each(function() {
			var elem = this;
      		position.fixed(elem);
		});

	};

})(jQuery)