var products = [
    {productid:'FI-SW-01',name:'Koi'},
    {productid:'K9-DL-01',name:'Dalmation'},
    {productid:'RP-SN-01',name:'Rattlesnake'},
    {productid:'RP-LI-02',name:'Iguana'},
    {productid:'FL-DSH-01',name:'Manx'},
    {productid:'FL-DLH-02',name:'Persian'},
    {productid:'AV-CB-01',name:'Amazon Parrot'}
];
function productFormatter(value){
	for(var i=0; i<products.length; i++){
		if (products[i].productid == value) return products[i].name;
	}
	return value;
}
$(function(){
	var lastIndex;
	$('#tt').datagrid({
		toolbar:[{
			text:'新建',
			iconCls:'icon-add',
			handler:function(){
				$('#tt').datagrid('endEdit', lastIndex);
				$('#tt').datagrid('appendRow',{
				});
				lastIndex = $('#tt').datagrid('getRows').length-1;
				$('#tt').datagrid('selectRow', lastIndex);
				$('#tt').datagrid('beginEdit', lastIndex);
			}
		},'-',{
			text:'删除',
			iconCls:'icon-remove',
			handler:function(){
				var row = $('#tt').datagrid('getSelected');
				if (row){
					var index = $('#tt').datagrid('getRowIndex', row);
					$('#tt').datagrid('deleteRow', index);
				}
				del( row);
			}
		},'-',{
			text:'保存',
			iconCls:'icon-save',
			handler:function(){
				$('#tt').datagrid('acceptChanges');
				save();
			}
		},'-',{
			text:'撤消',
			iconCls:'icon-undo',
			handler:function(){
				$('#tt').datagrid('rejectChanges');
			}
		},'-',{
			text:'取得新建行数',
			iconCls:'icon-search',
			handler:function(){
				var rows = $('#tt').datagrid('getChanges');
				alert('新建: ' + rows.length + ' 行');
			}
		}],
		onBeforeLoad:function(){
			$(this).datagrid('rejectChanges');
		},
		onClickRow:function(rowIndex){
			if (lastIndex != rowIndex){
				$('#tt').datagrid('endEdit', lastIndex);
				$('#tt').datagrid('beginEdit', rowIndex);
			}
			lastIndex = rowIndex;
		}
	});
});
function save(){
	var row = $('#tt').datagrid('getSelected');
	$.post('/userinfo/userinfo/save',
		row,function(r){
			if(r){
				$('#tt').datagrid('reload');
			}
		});
}
function del( row){
	$.get('/userinfo/userinfo/del',
		{ id: row.id},
		function(){

		});
}
