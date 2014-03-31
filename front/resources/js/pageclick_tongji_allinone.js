/**
* 通过广告主信息统计 class
* @date 2013.11.26
* @author sam wang
*/
var class_pageclick_adowner = function(){
	this.adownerid = "";
	this.posid = "";
};

/**
* 页面统计封装类
* author:sam wang
* date:2013.11.26
*/
var class_pageclick_assembler = function(){
	this.adownerid="";
	this.posid="";
	this.objectid="";
	this.openUrl="";
	this.succFun=function(ret){
		//TODO:
	};
	this.errorFun=function(ret){
		//TODO:
	};
};

/**
* 通过广告位信息统计 class
* @date 2013.11.26
* @author sam wang
*/
var class_pageclick_position = function(){
	this.posid = "";
	this.adownerid = "";
};

/**
 * service common method abstractions
 * author: sam wang
 * date:2013.11.26
 */
var jinfuzi=jinfuzi||{};
jinfuzi.Service = function(){};
jinfuzi.Service.prototype.url = "";
jinfuzi.Service.prototype.type = "POST";
jinfuzi.Service.prototype.dataType = "json";
jinfuzi.Service.prototype.data = null;
jinfuzi.Service.prototype.async = true;
jinfuzi.Service.prototype.timeout = 25000;
jinfuzi.Service.prototype.cache = false;
jinfuzi.Service.prototype.success = function(){alert("override service's success function");};
jinfuzi.Service.prototype.error = function(){alert("override service's error function");};
jinfuzi.Service.prototype.isParaNull = function(p){return p == undefined || p == null || p == "";};
jinfuzi.Service.prototype.classicAJAX = function(_url,_type,_datatype,_data,_async,_timeout,_successFunction,_errorFunction){
    var success = this.success;
    var error = this.error;
    $.ajax({
		url:(this.isParaNull(_url)?this.url:_url),
		type:(this.isParaNull(_type)?this.type:_type),
		dataType:(this.isParaNull(_datatype)?this.dataType:_datatype),
		data:(this.isParaNull(_data)?this.data:_data),
		async:(this.isParaNull(_async)?this.async:_async),
		timeout: (this.isParaNull(_timeout)?this.timeout:_timeout),
		success: function(result, textStatus, xhr){
			if (typeof _successFunction == "function") {
				_successFunction(result);
			} else {
			    success(result);	
			}
		},
		error:function(XMLHttpRequest, textStatus, errorThrown){
			if (typeof _errorFunction == "function") {
				_errorFunction();
			} else {
			    error();	
			}
		}
	});
};
jinfuzi.Service.prototype.fasionAJAX = function(data){
	data = data || {};
    this.classicAJAX(data.url,data.type,data.dataType,data.data,data.async,data.timeout,data.success,data.error);
};
jinfuzi.Service.generateRequestData = function(data,succFun,errorFun,afterSuccFun,afterErrorFun){
	return {
        data:data,
        success:function(result){
           succFun(result);
           if (typeof afterSuccFun != "undefined") {
           	afterSuccFun(result);
           }
        },
        error:function(result){
           errorFun(result);
           if (typeof afterErrorFun != "undefined") {
           	afterErrorFun(result);
           }
        }
    };
};
/**
* 页面统计service 
* @date 2013.11.26
* @author sam wang
*/
/**
 * 基础相关
 */
//by adowner
jinfuzi.PageClickTongjiServcie_ByAdowner = function(){};
jinfuzi.PageClickTongjiServcie_ByAdowner.prototype = new jinfuzi.Service();
jinfuzi.PageClickTongjiServcie_ByAdowner.prototype.constructor = jinfuzi.PageClickTongjiServcie_ByAdowner;
jinfuzi.PageClickTongjiServcie_ByAdowner.prototype.url = '/tongji/pageClick/byAdowner/'; 
//by position
jinfuzi.PageClickTongjiServcie_ByPosition = function(){};
jinfuzi.PageClickTongjiServcie_ByPosition.prototype = new jinfuzi.Service();
jinfuzi.PageClickTongjiServcie_ByPosition.prototype.constructor = jinfuzi.PageClickTongjiServcie_ByPosition;
jinfuzi.PageClickTongjiServcie_ByPosition.prototype.url = '/tongji/pageClick/byPosition/'; 

/**
 * 接口相关
 */
var SERVICE_PAGECLICK_TONGJI = {};
SERVICE_PAGECLICK_TONGJI.success = function(result){alert("override paycenter service's succss function");};
SERVICE_PAGECLICK_TONGJI.error = function(){alert("override paycenter service's error function");}; 
/**
 * by adowner
 * http://www.jinfuzi.com/tongji/pageClick/byAdowner/?adownerid=adowner_huatai&posid=wenda_zq_detail_answertop
 */
SERVICE_PAGECLICK_TONGJI.recordPageClickByAdowner = function(qSchema,succFun,errorFun,afterSuccFun,afterErrorFun){
    var data = {
    		    adownerid:qSchema.adownerid,
    		    posid:qSchema.posid
               };
    succFun = (typeof succFun != "undefined")?succFun:SERVICE_PAGECLICK_TONGJI.success;
    errorFun = (typeof errorFun != "undefined")?errorFun:SERVICE_PAGECLICK_TONGJI.error;
    var s = new jinfuzi.PageClickTongjiServcie_ByAdowner();
    s.async = true;
    s.fasionAJAX(jinfuzi.Service.generateRequestData(data,succFun,errorFun,afterSuccFun,afterErrorFun));
};
/**
 * by posid
 * http://www.jinfuzi.com/tongji/pageClick/byPosition/?adownerid=adowner_huatai&posid=wenda_zq_detail_answertop
 */
SERVICE_PAGECLICK_TONGJI.recordPageClickByPosition = function(qSchema,succFun,errorFun,afterSuccFun,afterErrorFun){
    var data = {
    		    adownerid:qSchema.adownerid,
    		    posid:qSchema.posid
               };
    succFun = (typeof succFun != "undefined")?succFun:SERVICE_PAGECLICK_TONGJI.success;
    errorFun = (typeof errorFun != "undefined")?errorFun:SERVICE_PAGECLICK_TONGJI.error;
    var s = new jinfuzi.PageClickTongjiServcie_ByPosition();
    s.async = true;
    s.fasionAJAX(jinfuzi.Service.generateRequestData(data,succFun,errorFun,afterSuccFun,afterErrorFun));
};


/**
* 统计相关内容assembler
* author:sam wang
* date:2013.11.26
*/
var ASSEMBLER_PAGECLICK_TONGJI = {};
ASSEMBLER_PAGECLICK_TONGJI.assemblePageclickByAdowner = function(assObj){
	$("#"+assObj.objectid).click(function(e){
		window.open(assObj.openUrl);	
		var qParam = new class_pageclick_adowner();
		qParam.adownerid = assObj.adownerid;
		qParam.posid = assObj.posid;
		SERVICE_PAGECLICK_TONGJI.recordPageClickByAdowner(qParam,assObj.succFun,assObj.errorFun);
		e.preventDefault();
	});
};
ASSEMBLER_PAGECLICK_TONGJI.assemblePageclickByPosition = function(assObj){
	$("#"+assObj.objectid).click(function(e){
		window.open(assObj.openUrl);	
		var qParam = new class_pageclick_position();
		qParam.adownerid = assObj.adownerid;
		qParam.posid = assObj.posid;
		SERVICE_PAGECLICK_TONGJI.recordPageClickByPosition(qParam,assObj.succFun,assObj.errorFun);
		e.preventDefault();
	});
};
