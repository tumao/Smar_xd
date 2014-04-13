var PropApp = (function($){
	this.save = function(){
		var xform = document.forms['x-form'];
		// alert( $(xform['short_name']).val());
		var fields= [
				'id',
				'short_name',
				'full_name',
				// sell_date,
				'tip',
				// companyid,
				'circulation',
				'duration',
				'income_rate',
				'min_sub_amount',
				// interest_ distribution_id,
				// invest_orientation_id,
				// xintuo_type_id,
				'income_explain',
				'pledge_object',
				'pledge_rate',
				'productinfo',
				'purpose_info',
				'risk_control_info',
				'payment_info',
				'guarantor_info',
				'financingpart_info',
				'depositary_info',
				'more_info',
			];
		var formdata = {};
		for( x in fields ){
			formdata[fields[x]] = $(xform[fields[x]]).val();
			// console.log( formdata.short_name);
			// alert(xform[x].val());
		}

		if( formdata.short_name == ''){
			alert('产品简称不可空');
		}

		$.ajax({
			'url':'/admin/index/save_product',
			'data':formdata,
			'type':'POST',
			'success':function(){
				window.location.href = "/redbud_admin/product";
			}
		});


	};
	this.addpage = function(){
		window.location.href = "/redbud_admin/upsertproduct";
	}
	return this;
})(jQuery);