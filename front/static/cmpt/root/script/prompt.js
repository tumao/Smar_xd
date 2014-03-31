function addTips(idName, tip){
	var idName = '#'+idName;
	var obj = $(idName);
	if($.trim(obj.val()).length == 0) {
		obj.val(tip);
		obj.css("color", "#999");
	}
	obj.focus(function() {
		if(tip == $(this).val()) {
			$(this).val("");
			obj.css("color", "#000");
		}
	});
	obj.blur(function() {
		if($.trim($(this).val()).length == 0) {
			$(this).val(tip);
			obj.css("color", "#999");
		}
	});
}