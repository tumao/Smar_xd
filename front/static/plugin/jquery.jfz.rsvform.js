//预约插件
;(function($){
    jQuery.fn.extend({
        'rsvform':function(showField, hiddenField, config){
            var tips = {
                2:'尊敬的客户，恭喜您成功预约期货开户，我司已安排期货专员正在处理。办理开户需要身份证和银行卡。如有疑问，欢迎拨打：4000181131【金斧子期货部】',
                9:'尊敬的客户，恭喜您成功预约港股开户，我司会尽快安排港股经理联系您。祝您生活愉快！金斧子服务热线：4000-181-131【金斧子港股部】 ',
                6:'尊敬的客户，恭喜您成功预约外汇业务，我司会尽快安排外汇经理联系您。祝生活愉快！金斧子服务热线：4000-181-131【金斧子外汇部】',
                1:'尊敬的客户，恭喜您成功预约证券开户，我司已安排证券营业部专员正在处理。如有疑问，欢迎拨打：4000181131【金斧子证券部】',
                3:'尊敬的客户，恭喜您成功预约，我司已安排高级理财顾问正在处理。如有疑问，欢迎拨打：4000181131【金斧子财富管理部】',
                16:'尊敬的客户，恭喜您成功预约，我司已安排高级理财顾问正在处理。如有疑问，欢迎拨打：4000181131【金斧子财富管理部】',
                17:'尊敬的客户，恭喜您成功预约，我司已安排高级理财顾问正在处理。如有疑问，欢迎拨打：4000181131【金斧子财富管理部】',
                4:'尊敬的客户，恭喜您成功预约，我司已安排高级理财顾问正在处理。如有疑问，欢迎拨打：4000181131【金斧子财富管理部】',
                7:'尊敬的客户，恭喜您成功预约，我司已经安排资深理财经理正在处理。如有疑问，欢迎拨打：4000181131【金斧子财富管理部】',
                15:'尊敬的客户，恭喜您成功预约，我司已经安排资深理财经理正在处理。如有疑问，欢迎拨打：4000181131【金斧子财富管理部】'
            };
            var defaults = {
                show:{
                    name:'name',
                    phone:'phone',
                    contact:'',
                    ps:''
                },
                hidden:{
                    type:1,
                    uid:0,
                    src:window.location.href,
                    referrer:document.referrer,
                    search_src:0,
                    biz_type:1,
                    biz_mtype:0,
                    from_req:1,
                    biz_mtype:0
                },
                config:{
                    tableName:'RsvInfo',
                    submitUrl:'/public/rsv',
                    idPreffix:'',
                    submitFailedFn:function(){return true;},
                    submitSucceedFn:function(){return true;},
                    hintType:1, //1-alert弹窗 2-DIV弹窗 3-表单内提示
                    hintColor:'#999',
                    textColor:'#000',
                    placeText:{
                        name:'请输入2-5字中文姓名', 
                        phone:'请输入手机号码或固话',
                        contact:'请输入其他联系方式',
                        ps:'请输入备注'
                    },//占位符文字
                    successTipsFn:function(tips){
                        if(typeof(tips)=='undefined'){
                            return '<div class="alert_body"><i class="icon i_right"></i> <p class="dialog_info">恭喜您预约成功！</p></div>';
                        }else{
                            return '<div class="alert_body"><i class="icon i_right"></i> <p class="dialog_info">'+tips+'</p></div>';
                        }
                    },
                    errorTipsFn:function(tips){
                        return '<div class="alert_body"><i class="icon i_error"></i> <p class="dialog_info">'+tips+'</p></div>';
                    }
                }
            };
            showField = $.extend(defaults.show, showField);
            hiddenField = $.extend(defaults.hidden, hiddenField);
            config = $.extend(defaults.config, config);
            
            var _submitFlag = false;
            var $_form = $(this);
            
            //加入隐藏域
            //values = {field:value}
            //options = {html属性:value} 
            var appendHidden = function(values, options){
                values = values || {};
                for(var field in values)
                {
                    options = $.extend(options, {
                        id:config.idPreffix + config.tableName + '_' + field, 
                        name:config.tableName + '[' + field + ']', 
                        value:values[field]
                    });
                    var $elem = $('<input type="hidden"/>');
                    for(var attrName in options)
                    {
                        $elem.attr(attrName, options[attrName]);
                    }
                    $_form.append($elem);
                }
            };
            
            //设置可见input
            //values = {field:value}
            //options = {html属性:value} 
            var decorateShow = function(values, options){
                values = values || {};
                for(var field in values)
                {
                    options = $.extend(options, {
                        name:config.tableName + '[' + field + ']' 
                    });
                    var $elem = $('#' + values[field]);
                    for(var attrName in options)
                    {
                        $elem.attr(attrName, options[attrName]);
                    }
                }
            };
            
            //设置占位提示符
            var setPlaceText = function(values){
                var placeholder = function(idName, tip){
                    var obj = $('#'+idName);
                    if($.trim(obj.val()).length == 0) {
                        obj.val(tip);
                        obj.css("color", config.hintColor);
                    }
                    obj.focus(function() {
                        if(tip == $(this).val()) {
                            $(this).val("");
                            obj.css("color", config.textColor);
                        }
                        //点击输入框时隐藏错误提示
                        if(config.hintType==3)
                        {
                            $('#'+idName+'_error').hide();
                        }
                    });
                    obj.blur(function() {
                        if($.trim($(this).val()).length == 0) {
                            $(this).val(tip);
                            obj.css("color", config.hintColor);
                        }
                    });
                };
                
                //占位符操作
                for(var field in showField)
                {
                    placeholder(showField[field], config.placeText[field]);
                }
            };
            
            
            var showError = function(error){
                if(config.hintType==1)
                {
                    var n = 1;
                    var msg= "";
                    for(var field in error)
                    {
                        if((error[field].length != 0))
                        {
                            msg += (n++) + "."+error[field] + "\n";
                        }
                    }
                    alert(msg);
                }
                else if(config.hintType==2)
                {
                    var n = 1;
                    var msg= "";
                    for(var field in error)
                    {
                        if((error[field].length != 0))
                        {
                            msg += (n++) + "."+error[field] + "<br>";
                        }
                    }
                    var jfz_dg2 = new $.JFZ_Dialog2({
                        source  : {
                            'inline'  : config.errorTipsFn(msg)
                        },
                        title   : '温馨提示',
                        buttons : false,
                        type    : false,
                        width   : 450
                    });
                }
                else if(config.hintType==3)
                {
                    for(var field in error)
                    {
                        if((error[field].length != 0))
                        {
                            if(field.indexOf('RsvInfo_')>-1){
                                $_form.find('#'+showField[field.substring(8)]+'_error').text(error[field]).show();
                            }else{
                                $_form.find('#'+showField[field]+'_error').text(error[field]).show();
                            }
                        }
                    }
                }
            };
            
            var showSuccess = function(msg){
                if(config.hintType==1)
                {
                    alert(msg);
                }
                else if(config.hintType==2)
                {
                    var $tips = tips[defaults.hidden.biz_type];
                    new $.JFZ_Dialog2({
                        source  : {
                            'inline'  : config.successTipsFn($tips)
                        },
                        title   : '温馨提示',
                        buttons : false,
                        type    : false,
                        width   : 450
                    });
                }
                else if(config.hintType==3)
                {
                    var $tips = tips[defaults.hidden.biz_type];
                    new $.JFZ_Dialog2({
                        source  : {
                            'inline'  : config.successTipsFn($tips)
                        },
                        title   : '温馨提示',
                        buttons : false,
                        type    : false,
                        width   : 450
                    });
                }
            };
            
            appendHidden(hiddenField);
            decorateShow(showField);
            setPlaceText(showField);
            
            $_form.attr('action', config.submitUrl);
            
            $_form.submit(function(){
                if(_submitFlag) return false;
                else _submitFlag = true;
                
                //占位符操作
                for(var field in showField)
                {
                    if($('#'+showField[field]).val()==config.placeText[field])
                    {
                        $('#'+showField[field]).val('');
                    }
                }
                
                var params = $_form.serialize();
                $.post(config.submitUrl, params+"&validate=1", function(resp){
                    if(resp.length==0)
                    {
                        $.post(config.submitUrl, params, function(resp){
                            //console.log(resp);
                            if(resp.success)
                            {
                                if(config.submitSucceedFn())
                                {
                                    showSuccess(resp.message);
                                    //清除表单内容
                                    $_form[0].reset();
                                    //让表单字段重新显示提示文字
                                    $_form.find('input:visible').blur();
                                }
                            }
                            else
                            {
                                if(config.submitFailedFn())
                                {
                                    showError(resp.message);
                                }
                            }
                            _submitFlag = false;
                        }, 'json');
                    }
                    else
                    {
                        showError(resp);
                        _submitFlag = false;
                        //让表单字段重新显示提示文字
                        $_form.find('input:visible').blur();
                    }
                }, 'json');
                //console.log('submit');
                return false;
            });
            
        }
    });
})(jQuery);
