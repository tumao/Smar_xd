$(function(){
	var assObj = new class_pageclick_assembler();
	assObj.adownerid="adowner_guotai";
	assObj.posid = "bank_detail_righttop";
	assObj.openUrl = "../../www.zlfund.cn/jinfuzi";
	assObj.succFun=function(ret){};
	assObj.errorFun=function(ret){};
	assObj.objectid = "bank_detail_righttop";//要加点击统计的id
	ASSEMBLER_PAGECLICK_TONGJI.assemblePageclickByAdowner(assObj);
	//ASSEMBLER_PAGECLICK_TONGJI.assemblePageclickByPosition(assObj);
});