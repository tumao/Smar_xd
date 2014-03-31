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

/*
 * 	Character Count Plugin - jQuery plugin
 * 	Dynamic character count for text areas and input fields
 *	written by Alen Grakalic	
 *	http://cssglobe.com/post/7161/jquery-plugin-simplest-twitterlike-dynamic-character-count-for-textareas
 *
 *	Copyright (c) 2009 Alen Grakalic (http://cssglobe.com)
 *	Dual licensed under the MIT (MIT-LICENSE.txt)
 *	and GPL (GPL-LICENSE.txt) licenses.
 *
 *	Built for jQuery library
 *	http://jquery.com
 *
 */
 
(function($) {

	$.fn.charCount = function(options){
	  
		// default configuration properties
		var defaults = {
			allowed: 140,		
			warning: 25,
			css: 'counter',
			counterElement: 'span',
			cssWarning: 'warning',
			cssExceeded: 'exceeded',
			counterText: '',
			exceededText: '',
			textElementId: ''
		}; 
			
		var options = $.extend(defaults, options); 
		
		function calculate(obj){
			var count = $(obj).val().length;
			var available = options.allowed - count;
			var textElement = options.textElementId == ''? $(obj).next(): $('#'+options.textElementId+''); 
			if(available < 0)
			{
				textElement.addClass(options.cssExceeded);
				textElement.removeClass(options.cssWarning);
				textElement.html(options.exceededText.replace("%d",Math.abs(available)));
			}
			else if(available <= options.warning)
			{
				textElement.addClass(options.cssWarning);
				textElement.removeClass(options.cssExceeded);
				textElement.html(options.counterText.replace("%d",available));
			}
			else
			{
				textElement.removeClass(options.cssWarning);
				textElement.removeClass(options.cssExceeded);
				textElement.html(options.counterText.replace("%d",available));
			}
		};
				
		this.each(function() {
			if(options.textElementId == '')			
				$(this).after('<'+ options.counterElement +' class="' + options.css + '">'+ options.counterText +'</'+ options.counterElement +'>');
			calculate(this);
			$(this).keyup(function(){calculate(this)});
			$(this).change(function(){calculate(this)});
		});
	  
	};

})(jQuery);

/*
 * jQuery Color Animations
 * Copyright 2007 John Resig
 * Released under the MIT and GPL licenses.
 */

(function(jQuery){

	// We override the animation for all of these color styles
	jQuery.each(['backgroundColor', 'borderBottomColor', 'borderLeftColor', 'borderRightColor', 'borderTopColor', 'color', 'outlineColor'], function(i,attr){
		jQuery.fx.step[attr] = function(fx){
			if ( fx.state == 0 ) {
				fx.start = getColor( fx.elem, attr );
				fx.end = getRGB( fx.end );
			}

			fx.elem.style[attr] = "rgb(" + [
				Math.max(Math.min( parseInt((fx.pos * (fx.end[0] - fx.start[0])) + fx.start[0]), 255), 0),
				Math.max(Math.min( parseInt((fx.pos * (fx.end[1] - fx.start[1])) + fx.start[1]), 255), 0),
				Math.max(Math.min( parseInt((fx.pos * (fx.end[2] - fx.start[2])) + fx.start[2]), 255), 0)
			].join(",") + ")";
		}
	});

	// Color Conversion functions from highlightFade
	// By Blair Mitchelmore
	// http://jquery.offput.ca/highlightFade/

	// Parse strings looking for color tuples [255,255,255]
	function getRGB(color) {
		var result;

		// Check if we're already dealing with an array of colors
		if ( color && color.constructor == Array && color.length == 3 )
			return color;

		// Look for rgb(num,num,num)
		if (result = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color))
			return [parseInt(result[1]), parseInt(result[2]), parseInt(result[3])];

		// Look for rgb(num%,num%,num%)
		if (result = /rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(color))
			return [parseFloat(result[1])*2.55, parseFloat(result[2])*2.55, parseFloat(result[3])*2.55];

		// Look for #a0b1c2
		if (result = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(color))
			return [parseInt(result[1],16), parseInt(result[2],16), parseInt(result[3],16)];

		// Look for #fff
		if (result = /#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(color))
			return [parseInt(result[1]+result[1],16), parseInt(result[2]+result[2],16), parseInt(result[3]+result[3],16)];

		// Otherwise, we're most likely dealing with a named color
		return colors[jQuery.trim(color).toLowerCase()];
	}
	
	function getColor(elem, attr) {
		var color;

		do {
			color = jQuery.curCSS(elem, attr);

			// Keep going until we find an element that has color, or we hit the body
			if ( color != '' && color != 'transparent' || jQuery.nodeName(elem, "body") )
				break; 

			attr = "backgroundColor";
		} while ( elem = elem.parentNode );

		return getRGB(color);
	};
	
	// Some named colors to work with
	// From Interface by Stefan Petre
	// http://interface.eyecon.ro/

	var colors = {
		aqua:[0,255,255],
		azure:[240,255,255],
		beige:[245,245,220],
		black:[0,0,0],
		blue:[0,0,255],
		brown:[165,42,42],
		cyan:[0,255,255],
		darkblue:[0,0,139],
		darkcyan:[0,139,139],
		darkgrey:[169,169,169],
		darkgreen:[0,100,0],
		darkkhaki:[189,183,107],
		darkmagenta:[139,0,139],
		darkolivegreen:[85,107,47],
		darkorange:[255,140,0],
		darkorchid:[153,50,204],
		darkred:[139,0,0],
		darksalmon:[233,150,122],
		darkviolet:[148,0,211],
		fuchsia:[255,0,255],
		gold:[255,215,0],
		green:[0,128,0],
		indigo:[75,0,130],
		khaki:[240,230,140],
		lightblue:[173,216,230],
		lightcyan:[224,255,255],
		lightgreen:[144,238,144],
		lightgrey:[211,211,211],
		lightpink:[255,182,193],
		lightyellow:[255,255,224],
		lime:[0,255,0],
		magenta:[255,0,255],
		maroon:[128,0,0],
		navy:[0,0,128],
		olive:[128,128,0],
		orange:[255,165,0],
		pink:[255,192,203],
		purple:[128,0,128],
		violet:[128,0,128],
		red:[255,0,0],
		silver:[192,192,192],
		white:[255,255,255],
		yellow:[255,255,0]
	};
	
})(jQuery);



function logout()
{
	$.post("../index/logout.html", {'ajax':'true'},
		function() {
  			$('#noLogin').show();
  			$('#hasLogin').hide();
	});
}


function WinCompleteRsvInfo(rsvID){
	this.win;
	this.show = function(){
		if(this.win == null)
		{
			this.win = new magic.Dialog({
			    draggable: true,
			    titleText: "请选择您的意向证券公司",
			    width: 467,
			    height: 230,
			    contentType: "frame",
			    content: "../popupwin/completeRsvInfo@rsvID=" + rsvID,
			    dialogID: "complete_rsv_info",
			    mask: {enable:true}
			});
			this.win.render();
		}
		this.win.center();
		this.win.show();
	};
	
	this.hide = function(){
		this.win.hide();
	};
	
	this.dispose = function(){
		this.win.dispose();		
	};
}

function WinReserve(){
	//declare
	this.win;
	this.show = function(){
		this.win.center();
		this.win.show();
	};
	
	this.hide = function(){
		this.win.hide();
	};
	
	this.dispose = function(){
		this.win.dispose();		
	};
	
	//constructor
    $("#reserve-dialog").show();
    this.win = magic.setup.dialog("reserve-dialog", {mask:{enable:true}});
    
	this.setSize =  function(options){
		this.win.setSize(options);
	};
}

function WinMap(){
	//declare
	this.win;
	this.show = function(){
		this.win.center();
		this.win.show();
	};
	
	this.hide = function(){
		this.win.hide();
	};
	
	this.dispose = function(){
		this.win.dispose();
	};
	
	//constructor
    $("#map_dialog").show();
    this.win = magic.setup.dialog("map_dialog", {mask:{enable:true}});
    
	this.setSize =  function(options){
		this.win.setSize(options);
	};
}


function WinReserveBroker(uid,url){
	this.win;
	this.show = function(){
		if(this.win == null)
		{
			this.win = new magic.Dialog({
			    draggable: true,
			    titleText: "",
			    width: 550,
			    height: 350,
			    contentType: "frame",
			    content: "../popupwin/reserveBroker@url="+url+"&uid="+uid,
			    dialogID: "reserve_broker",
			    mask: {enable:true}
			});
			this.win.render();
		}
		this.win.center();
		this.win.show();
	};
	
	this.hide = function(){
		this.win.hide();
	};
	
	this.dispose = function(){
		this.win.dispose();		
	};
	
}

function WinPic(){
	this.win;
	this.show = function(src){
		if(this.win == null)
		{
			this.win = new magic.Dialog({		    
				draggable: true,
			   // contentType: "html",
			    dialogID: "picDialog",
			    titleText: "示意图",
                content: "<img id='picid' width='800' height='500'/>",
                width:800,
                height: 500,
                mask:{enable:true}
			});
			this.win.render();
		}
		$('#picid').attr('src',src);
		this.win.center();
		this.win.show();
		// this.win.onshow=function(){
			// this.win.hide();
		// }
	};
	
	this.hide = function(){
		this.win.hide();
	};
	
	this.dispose = function(){
		this.win.dispose();		
	};
	
}
/**
 * @description 百度地图初始化函数
 * @param container 容器ID
 * @param param	地图描述的object
 */
function baidu_map_init(container, param)
{                         
    var depjson = {title:param.title, content:param.content, point:param.lng+"|"+param.lat,isOpen:1,icon:{w:21,h:21,l:115,t:46,x:1,lb:10},depid:1};
    var map = new BMap.Map(container); 
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(ctrl_nav);
    var lng=depjson.point.split("|")[0];
    var lat=depjson.point.split("|")[1];
    map.centerAndZoom(new BMap.Point(lat, lng), 11);
    var point = new BMap.Point(lng,lat);
    map.centerAndZoom(point, 16); 
    // 创建地址解析器实例  
    // 将地址解析结果显示在地图上，并调整地图视野  
    var iconImg = createIcon(depjson.icon);
    var marker = new BMap.Marker(point);
    map.addOverlay(marker);
     
    // 将标注添加到地图中
    function createIcon(json){
        var icon = new BMap.Icon("../images/popo.png", new BMap.Size(json.w,json.h))
        return icon;
    }
}
function promptText(id, prompt){
	var obj = $("#"+id);
	var color = obj.css("color");
	if($.trim(obj.val()).length == 0){
		obj.val(prompt);
		obj.css("color", "#999");
	}
	obj.focus(function(){
		if(prompt == $(this).val()){
			$(this).val("");
			obj.css("color", color);
		}
	});
	obj.blur(function(){
		if($.trim($(this).val()).length == 0){
			$(this).val(prompt);
			obj.css("color", "#999");
		}
	});
}

function WinCityIp(dId){
	this.win;
	this.show = function(){
		if(this.win == null)
		{
			this.win = new magic.Dialog({
			    draggable: true,
			    contentType: "html",
			    dialogID: dId,
			    mask: {enable:true}
			});
			this.win.render();
		}
		this.win.center();
		this.win.show();
	}
	this.hide = function(){
		this.win.hide();
	}
	this.dispose = function(){
		this.win.dispose();		
	}
}
