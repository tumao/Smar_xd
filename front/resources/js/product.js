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

		if(  !$.isNumeric( formdata.circulation) ){
			alert('预计发行规模 位数字！');
			return;
		}
		else if( formdata.short_name == ''){
			alert('产品简称不可为空！');
			return ;
		}
		else if( formdata.full_name == ''){
			alert('产品简称不可为空！');
		}
		else if( formdata.tip == ''){
			alert('产品简介不可为空！');
		}
		else if( formdata.duration == ''){
			alert('存续期  不可为空！');
		}
		else if( formdata.income_rate == ''){
			alert('预期年收益率  不可为空！');
		}

		else if( formdata.pledge_object == ''){
			alert('抵押物 不可为空！');
		}
		else if( formdata.pledge_rate == ''){
			alert('抵押率 不可为空！');
		}
		else if( formdata.productinfo == ''){
			alert('产品简介 不可为空！');
		}
		else if( formdata.purpose_info == ''){
			alert('投资方向 不可为空！');
		}
		else if( formdata.risk_control_info == ''){
			alert('风险控制 不可为空！');
		}
		else if( formdata.payment_info == ''){
			alert('还款来源 不可为空！');
		}
		else if( formdata.guarantor_info == ''){
			alert('担保方介绍 不可为空！');
		}
		else if( formdata.financingpart_info == ''){
			alert('融资方介绍 不可为空！');
		}
		else if( formdata.depositary_info == ''){
			alert('受托人 不可为空！');
		}
		else if( formdata.more_info == ''){
			alert('相关信息 不可为空！');
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