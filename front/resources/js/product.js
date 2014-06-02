var PropApp = (function($){
	this.save = function(){
		var xform = document.forms['x-form'];
		// alert( $(xform['short_name']).val());
		var fields= [
		    "product[id]",
            "product[short_name]",
            "product[full_name]",
            "product[sell_date]",
            "product[tip]",
            "product[companyid]",
            "product[circulation]",
            "product[duration]",
            "product[income_rate]",
            "product[min_sub_amount]",
            "product[interest_ distribution_id]",
            "product[invest_orientation_id]",
            "product[xintuo_type_id]",
            "product[income_explain]",
            "product[pledge_object]",
            "product[pledge_rate]",
            "product[productinfo]",
            "product[purpose_info]",
            "product[risk_control_info]",
            "product[payment_info]",
            "product[guarantor_info]",
            "product[financingpart_info]",
            "product[depositary_info]",
            "product[more_info]",
			];
        var product_fields= [
            'id',
            'short_name',
            'full_name',
            'sell_date',
            'tip',
            'companyid',
            'circulation',
            'duration',
            'income_rate',
            'min_sub_amount',
            'interest_distribution_id',
            'invest_orientation_id',
            'xintuo_type_id',
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
		for( x in product_fields ){
            //console.log('product['+product_fields[x] + ']');
			formdata[product_fields[x]] = $(xform["product["+product_fields[x] + "]"]).val();
		}
        /*
        for(x1 in fields) {
            product[fields[x1]] = $(xform["product["+product_fields[x1] + "]"]).val();
        }
        */
		if(  !$.isNumeric( formdata.circulation) ){
			alert('预计发行规模 为数字！');
			return;
		}
		else if(  !$.isNumeric( formdata.min_sub_amount) ){
			alert('最低认购金额 为数字！');
			return;
		}
		else if(  !$.isNumeric( formdata.duration) ){
			alert('存续期 为数字！');
			return;
		}
		else if(  !$.isNumeric( formdata.income_rate) ){
			alert('预期年收益率 为数字！');
			return;
		}
		
		else if( formdata.short_name == ''){
			alert('产品名 不可为空！');
			return ;
		}
		else if( formdata.full_name == ''){
			alert('产品全名 不可为空！');
			return false;
		}
		else if( formdata.tip == ''){
			alert('产品简介不可为空！');
			return false;
		}
		else if( formdata.duration == ''){
			alert('存续期  不可为空！');
			return false;
		}
		else if( formdata.income_rate == ''){
			alert('预期年收益率  不可为空！');
			return false;
		}

        /*
		else if( formdata.pledge_object == ''){
			alert('抵押物 不可为空！');
			return false;
		}
		else if( formdata.pledge_rate == ''){
			alert('抵押率 不可为空！');
			return false;
		}
		else if( formdata.productinfo == ''){
			alert('产品说明 不可为空！');
			return false;
		}
		else if( formdata.purpose_info == ''){
			alert('投资方向 不可为空！');
			return false;
		}
		else if( formdata.risk_control_info == ''){
			alert('风险控制 不可为空！');
			return false;
		}
		else if( formdata.payment_info == ''){
			alert('还款来源 不可为空！');
			return false;
		}
		else if( formdata.guarantor_info == ''){
			alert('担保方介绍 不可为空！');
			return false;
		}
		else if( formdata.financingpart_info == ''){
			alert('融资方介绍 不可为空！');
			return false;
		}
		else if( formdata.depositary_info == ''){
			alert('受托人 不可为空！');
			return false;
		}
		else if( formdata.more_info == ''){
			alert('相关信息 不可为空！');
			return false;
		}
		*/


		$.ajax({
			'url':'/admin/index/save_product',
			'data':formdata,
			'type':'POST',
			'success':function(id){
				if(id){
					window.location.href = "/redbud_admin/product";
				}
			}
		});


	};
	this.delproduct = function(pid){
		var r = confirm('确认要删除这条数据?');
		if(r){
			$.ajax({
				url: '/admin/index/delproduct?pid='+pid,
				type: 'get',
				success : function( r){
					if(r){
						window.location.href = "/redbud_admin/product";
					}
				}
			});
		}
	};
	this.paddElite = function(obj_check){
		// console.log(pid);
		var stat = $(obj_check).prop('checked');
		var pid = $(obj_check).val();
		$.ajax({
			url:'/admin/index/product_add_elite',
			type:'get',
			data : {'pid':pid,'stat':stat},
		});
	};
	this.addpage = function(){
		window.location.href = "/redbud_admin/upsertproduct";
	};
	return this;
})(jQuery);

