var Company = (function($){
	this.ishot = function(obj_comp){
		var cid = $(obj_comp).val();
		var stat = $(obj_comp).prop('checked');
		$.ajax({
			url: '/admin/index/add_hot_company',
			type: 'GET',
			data: {cid: cid,stat:stat},
		});

	};
	return this;
})(jQuery);