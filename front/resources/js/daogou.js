var Poc = (function($){
	this.save = function(){
		var formdata = {};
		var title = $("#title").val();
		var content = $("#editor1").html();
		var id 	= $("#cid").val();
		formdata['title'] = title;
		formdata['content'] = content;
		formdata['id']	= id;
		$.ajax({
			'url' 	:"/admin/index/save_daogou",
			'type'	:'POST',	
			'data'	: formdata,
			'success':function(){
				window.location.href="/redbud_admin/daogou";
			}
		});
	};
	this.addpage = function(){
		window.location.href = "/redbud_admin/upsertdaogou";
	};
	return this;
})(jQuery);