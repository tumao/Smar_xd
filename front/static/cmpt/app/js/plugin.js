jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        var path = options.path ? '; path=' + options.path : '';
        var domain = options.domain ? '; domain=' + options.domain : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};

String.prototype.format = function(){
    var args = arguments;
    return this.replace(/\{(\d+)\}/g,                
        function(m,i){
            return args[i];
        });
};

String.Format = function(str){
	var args = arguments;
    return str.replace(/\{(\d+)\}/g,                
        function(m,i){
            return args[i+1];
        });
};

;(function($) {
	$.fn.extend({
		leanModal : function(options) {
			var defaults = {
				top : 100,
				overlay : 0.5,
				closeButton : null
			};
			var overlay = $("<div id='lean_overlay'></div>");
			$("body").append(overlay);
			options = $.extend(defaults, options);
			return this.each(function() {
				var o = options;
				$(this).click(function(e) {
					var modal_id = $(this).attr("href");
					$("#lean_overlay").click(function(){
						close_modal(modal_id)
					});
					$(o.closeButton).click(function(){
						close_modal(modal_id)
					});
					var modal_height = $(modal_id).outerHeight();
					var modal_width = $(modal_id).outerWidth();
					$("#lean_overlay").css({
						"display" : "block",
						opacity : 0
					});
					$("#lean_overlay").fadeTo(200, o.overlay);
					$(modal_id).css({
						"display" : "block",
						"position" : "fixed",
						"opacity" : 0,
						"z-index" : 99999999,
						"left" : 50 + "%",
						"margin-left" : -(modal_width / 2) + "px",
						"top" : o.top + "px"
					});
					$(modal_id).fadeTo(200, 1);
					e.preventDefault()
				})
			});
			function close_modal(modal_id){
				$("#lean_overlay").fadeOut(200);
				$(modal_id).css({"display" : "none"})
			}
		}
	})
})(jQuery);

/**
 * jQuery Initial input value replacer
 * 
 * Sets input value attribute to a starting value  
 * @author Marco "DWJ" Solazzi - hello@dwightjack.com
 * @license  Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 * @copyright Copyright (c) 2008 Marco Solazzi
 * @version 0.1
 * @requires jQuery 1.2.x
 */
(function (jQuery) {
	/**
	 * Setting input initialization
	 *  
	 * @param {String|Object|Bool} text Initial value of the field. Can be either a string, a jQuery reference (example: $("#element")), or boolean false (default) to search for related label
	 * @param {Object} [opts] An object containing options: 
	 * 							color (initial text color, default : "#666"), 
	 * 							e (event which triggers initial text clearing, default: "focus"), 
	 * 							force (execute this script even if input value is not empty, default: false)
	 * 							keep (if value of field is empty on blur, re-apply initial text, default: true)  
	 */
	jQuery.fn.inputLabel = function(text,opts) {
		o = jQuery.extend({ color: "#666", e:"focus", force : false, keep : true}, opts || {});
		var clearInput = function (e) {
			var target = jQuery(e.target);
			var value = jQuery.trim(target.val());
			if (e.type == e.data.obj.e && value == e.data.obj.innerText) {
				jQuery(target).css("color", "").val("");
				if (!e.data.obj.keep) {
					jQuery(target).unbind(e.data.obj.e+" blur",clearInput);
				}
			} else if (e.type == "blur" && value == "" && e.data.obj.keep) {
				jQuery(this).css("color", e.data.obj.color).val(e.data.obj.innerText);
			}
		};
		return this.each(function () {
					o.innerText = (text || false);
					if (!o.innerText) {
						var id = jQuery(this).attr("id");
						o.innerText = jQuery(this).parents("form").find("label[for=" + id + "]").hide().text();
					}
					else 
						if (typeof o.innerText != "string") {
							o.innerText = jQuery(o.innerText).text();
						}
			o.innerText = jQuery.trim(o.innerText);
			if (o.force || jQuery(this).val() == "") {
				jQuery(this).css("color", o.color).val(o.innerText);
			}
				jQuery(this).bind(o.e+" blur",{obj:o},clearInput);
 
		});
	};
})(jQuery);

function AddFavorites(sitename, siteurl)
{
	var name = sitename || '金斧子在线理财';
	var url = siteurl || '..';
	var ctrl = (navigator.userAgent.toLowerCase()).indexOf('mac') != -1
			? 'Command/Cmd'
			: 'CTRL';
	if(document.all)
	{
		window.external.addFavorite(url, name);
	}
	else if(window.sidebar)
	{
		window.sidebar.addPanel(name, url, "");
	}
	else
	{
		alert('您可以通过快捷键' + ctrl + ' + D 加入到收藏夹');
	}
}