
// function productFormatter(value){
// 	for(var i=0; i<products.length; i++){
// 		if (products[i].productid == value) return products[i].name;
// 	}
// 	return value;
// }
// $(function(){
// 	var lastIndex;
// 	$('#tt').datagrid({
// 		toolbar:[{
// 			text:'新建',
// 			iconCls:'icon-add',
// 			handler:function(){
// 				ProApp.showForm(0);
// 				// $('#tt').datagrid('endEdit', lastIndex);
// 				// $('#tt').datagrid('appendRow',{
// 				// });
// 				// lastIndex = $('#tt').datagrid('getRows').length-1;
// 				// $('#tt').datagrid('selectRow', lastIndex);
// 				// $('#tt').datagrid('beginEdit', lastIndex);
// 			}
// 		},'-',{
// 			text:'删除',
// 			iconCls:'icon-remove',
// 			handler:function(){
// 				var row = $('#tt').datagrid('getSelected');
// 				if (row){
// 					var index = $('#tt').datagrid('getRowIndex', row);
// 					$('#tt').datagrid('deleteRow', index);
// 				}
// 				del( row);
// 			}
// 		}],
// 		onBeforeLoad:function(){
// 			$(this).datagrid('rejectChanges');
// 		},
// 		onClickRow:function(rowIndex){
// 			if (lastIndex != rowIndex){
// 				$('#tt').datagrid('endEdit', lastIndex);
// 				$('#tt').datagrid('beginEdit', rowIndex);
// 			}
// 			lastIndex = rowIndex;
// 		},
// 	});
// });

function save(){
	var row = $('#FormRow').datagrid('getSelected');
	var url = '/store/store/save';
	$.post('/store/store/save',
		row,function(r){
			if(r){
				$('#FormRow').datagrid('reload');
			}
		});
}

// function del( row){
// 	// console.log(row);
// 	$.get('/store/store/del',
// 		{ id: row.id},
// 		function(){

// 		});
// }

var RowFormat = {
	control: function(val, row){
		var ophtml = '<a class="my-link-remove l-btn l-btn-plain" onclick="Edit.deleteRow('+val+')" title="'+val+'"><span class="l-btn-left"><span class="l-btn-text icon-remove l-btn-icon-left">删除</span></span></a>&nbsp;';
		ophtml += '<a class="my-icon-stat-ok l-btn l-btn-plain" onclick="ProApp.showForm('+val+')" title="'+val+'"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty icon-edit">&nbsp;</span>编辑</span></span></a>&nbsp;';
		if( row.status == 'pending' ){
			// ophtml = '<a class="my-link-remove l-btn l-btn-plain" onclick="Edit.deleteRow('+val+')" title="'+val+'"><span class="l-btn-left"><span class="l-btn-text icon-remove l-btn-icon-left">删除</span></span></a>&nbsp;&nbsp;';
			ophtml += '<a class="my-icon-stat-ok l-btn l-btn-plain" onclick="Edit.pass('+val+')" title="'+val+'"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty icon-ok">&nbsp;</span>通过</span></span></a>&nbsp;';
			ophtml += '<a class="my-icon-stat-no l-btn l-btn-plain" onclick="Edit.deny('+val+')" title="'+val+'"> <span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty icon-no">&nbsp;</span>拒绝</span></span></a>';
		}else if( row.status == 'pass'){
			// ophtml = '<a class="my-link-remove l-btn l-btn-plain" onclick="Edit.deleteRow('+val+')" title="'+val+'"><span class="l-btn-left"><span class="l-btn-text icon-remove l-btn-icon-left">删除</span></span></a>&nbsp;&nbsp;';
			ophtml += '<a class="my-icon-stat-no l-btn l-btn-plain" onclick="Edit.deny('+val+')" title="'+val+'"> <span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty icon-no">&nbsp;</span>拒绝</span></span></a>';
		}else if( row.status == 'deny'){
			// ophtml = '<a class="my-link-remove l-btn l-btn-plain" onclick="Edit.deleteRow('+val+')" title="'+val+'"><span class="l-btn-left"><span class="l-btn-text icon-remove l-btn-icon-left">删除</span></span></a>&nbsp;&nbsp;';
			ophtml += '<a class="my-icon-stat-ok l-btn l-btn-plain" onclick="Edit.pass('+val+')" title="'+val+'"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty icon-ok">&nbsp;</span>通过</span></span></a>';
		}else{
			ophtml += '<a class="my-icon-stat-ok l-btn l-btn-plain" onclick="Edit.pass('+val+')" title="'+val+'"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty icon-ok">&nbsp;</span>通过</span></span></a>';
		}
		return ophtml;
	},
	status: function(val, row){
		var res = '<a class="my-link-remove l-btn l-btn-plain" href="javascript:void(0)" title="待审核"><span class="l-btn-left"><span class="l-btn-text icon-state l-btn-icon-left"></span></span></a>';
		if( row.status == 'pass'){
			res = '<a href="javascript:void(0)" class="my-icon-stat-ok l-btn l-btn-plain" title="已通过"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty icon-ok">&nbsp;</span></span></span></a>';
		}else if( row.status == 'pending' || row.status == ''){
			res = '<a class="my-link-remove l-btn l-btn-plain" href="javascript:void(0)" title="待审核"><span class="l-btn-left"><span class="l-btn-text icon-remove l-btn-icon-left"></span></span></a>';
		}else if ( row.status == 'deny'){
			res = '<a href="javascript:void(0)" class="my-icon-stat-no l-btn l-btn-plain" group="" id="" title="已拒绝"><span class="l-btn-left"><span class="l-btn-text"><span class="l-btn-empty icon-no">&nbsp;</span></span></span></a>';
		}
		return res;
	}
}
var Edit = {
	pass: function( val){
		$.get('/store/store/edit', {
			'id': val,
			'control':'pass' },function(txt){
				if(txt){
					$('#FormRow').datagrid('reload');
				}
		});
	},
	deny: function( val){
		$.get('/store/store/edit', {
			'id': val,
			'control':'deny' },function(txt){
				if(txt){
					$('#FormRow').datagrid('reload');
				}
		});
	},
	deleteRow: function(val){
		$.get('/store/store/del',{'id':val},function(){
			$('#FormRow').datagrid('reload');
		})
	}
}

var ProApp = (function($){
	var $saving = false;
	this.showForm = function(id){

		var title = '增加新应用';
		var data = {};
		if (id > 0) {
			title = '修改应用';
			data.id = id;
		}
		$.ajax({
			url: '/store/store/info',
			data: data,
			success: function(rp) {
				// if (rp.code != 0) {
				// 	return $.messager.alert('提示信息', rp.info, 'error');
				// }
				$('div#InfoForm').dialog({
					title: title,
					width: 745,
					height: 285,
					closed: false,
					modal: true,
					buttons: [{
						text: '保存',
						iconCls: 'icon-ok',
						handler: ProApp.saveform
					}, {
						text: '取消',
						iconCls: 'icon-cancel',
						handler: function() {
							$('div#InfoForm').dialog('close');
						}
					}],
					
					content:rp,
					onOpen:function(){
						$("#update_time").datebox();
					}
					
				});
			}
		});
	};
	this.saveform = function(){
		var xform = document.forms['x-form'];
		var fields = [
			 'id',
			'storeName',
			'address',
			'tel1',
			'tel2',
			'tel3',
			'mainItem',
			'mainParts',
			'workers',
			'area',
			'equipment',
			'openTime',
			'workStations',
			'selfContents'
		];
		var formdata = {};
		for( var x in fields){
			formdata[fields[x]] = $.trim(xform[fields[x]].value);
		}
		if( formdata.storeName == ''){
			xform.storeName.focus();
			return $.messager.alert('提示信息', '店铺名称不能为空！', 'error');
		}
		if( formdata.address == ''){
			xform.address.focus();
			return $.messager.alert('提示信息', '地址不能为空！', 'error');
		}
		if( formdata.tel1 == '' && formdata.tel2 == '' && formdata.tel3 == '' ){
			xform.tel1.focus();
			return $.messager.alert('提示信息', '联系方式至少填写一个！', 'error');
		}
		$.ajax({
			'url'	: 	"/store/store/save",
			'data'	: 	formdata,
			'success'	: ProApp.cb_save__handler,
			'error'	: function() { $saving = false; }
		});
	};
	this.cb_save__handler = function(rp){
		$saving = false;
		$('div#InfoForm').dialog('close');
		$('#FormRow').datagrid('reload');
	};
	return this;
})(jQuery);