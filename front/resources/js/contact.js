var Poc = (function($){
	this.save = function(){
		var content = $("#editor1").html();
		
		$.ajax({
			'url' 	:"/admin/index/save_contact",
			'type'	:'POST',	
			'data'	: {'content':content},
			'success':function(){
				window.location.href="/admin/index/contactus";
			}
		});
	};
	return this;
})(jQuery);