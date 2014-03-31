$(function(){
	var assObj = new class_pageclick_assembler();
	assObj.adownerid="adowner_huatai";
	assObj.posid = "wenda_zq_detail_answertop";
	assObj.openUrl = "../../www.hengda-88.com/default.htm";
	assObj.succFun=function(ret){};
	assObj.errorFun=function(ret){};
	assObj.objectid = "wenda_zq_detail_answertop";//要加点击统计的id
	ASSEMBLER_PAGECLICK_TONGJI.assemblePageclickByAdowner(assObj);
	//ASSEMBLER_PAGECLICK_TONGJI.assemblePageclickByPosition(assObj);
});