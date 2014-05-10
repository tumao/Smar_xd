<?php echo $this->load->view('admin/header');?>
<?php echo $this->load->view('admin/sidebar');?>
<div class="main-content">
<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>
    
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">信托产品</a>
        </li>
    </ul><!-- .breadcrumb -->

    <div class="nav-search" id="nav-search">
        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                <i class="icon-search nav-search-icon"></i>
                            </span>
        </form>
    </div><!-- #nav-search -->
</div>

<div class="page-content">
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<form name="x-form"  class="form-horizontal" id="x-form" role="form">
    <input type="hidden" name="id" id="id" value="<?php echo $product['id']; ?>">
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 产品简称 </label>

    <div class="col-sm-9">
        <input type="text" name="short_name" id="short_name" class="col-xs-10 col-sm-5" value="<?php echo $product['short_name']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 产品全称 </label>

    <div class="col-sm-9">
        <input type="text" name="full_name" id="full_name" class="col-xs-10 col-sm-5" value="<?php echo $product['full_name']; ?>"  />
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> 发售日期 </label>

    <div class="col-sm-9 input-group">
        <input class="date-picker col-xs-10 col-sm-5" name="sell_date" id="sell_date" type="text" data-date-format="yyyy-mm-dd" value="<?php echo $product['sell_date']; ?>" />
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> 产品简介 </label>
    <div class="col-sm-9">
        <input type="text" id="tip" name="tip" class="col-xs-10 col-sm-5" value="<?php echo $product['tip']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-5"> 信托公司 </label>
    <div class="col-sm-9">
        <select id="form-field-5" name="company_name" class="col-xs-10 col-sm-5">
            <option value="<?php echo $product['company_name']; ?>"><?php echo $product['company_name']; ?></option>
            <?php foreach ($product['company_group'] as $val) { ?>
                <option value="<?php echo $val['name']; ?>"><?php echo $val['name']; ?></option>
            <?php  } ?>
        </select>
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-6"> 预计发行规模 </label>

    <div class="col-sm-9">
        <input type="text" id="circulation" class="col-xs-10 col-sm-5" name="circulation" value="<?php echo $product['circulation']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-7"> 存续期 </label>

    <div class="col-sm-9">
        <input type="text" id="duration" class="col-xs-10 col-sm-5" name="duration" value="<?php echo $product['duration']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-8"> 预期年收益率 </label>

    <div class="col-sm-9">
        <input type="text" id="income_rate" class="col-xs-10 col-sm-5" name="income_rate" value="<?php echo $product['income_rate']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-9"> 最低认购金额 </label>

    <div class="col-sm-9">
        <input type="text" id="min_sub_amount" class="col-xs-10 col-sm-5" name="min_sub_amount" value="<?php echo $product['min_sub_amount']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-10"> 利息分配 </label>

    <div class="col-sm-9">
        <input type="text" id="interest_distribution_name" class="col-xs-10 col-sm-5" name="interest_distribution_name" value="<?php echo $product['interest_distribution_name']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-11"> 投资行业 </label>

    <div class="col-sm-9">
        <input type="text" id="invest_name" class="col-xs-10 col-sm-5" name="invest_name" value="<?php echo $product['invest_name']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-12"> 信托类型 </label>

    <div class="col-sm-9">
        <input type="text" id="xintuo_name" class="col-xs-10 col-sm-5" value="<?php echo $product['xintuo_name']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-13"> 收益说明 </label>

    <div class="col-sm-9">
        <input type="text" id="income_explain" class="col-xs-10 col-sm-5" name="income_explain" value="<?php echo $product['income_explain'] ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-14"> 抵押物 </label>

    <div class="col-sm-9">
        <input type="text" id="pledge_object" class="col-xs-10 col-sm-5" name="pledge_object" value="<?php echo $product['pledge_object']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-15"> 抵押率 </label>

    <div class="col-sm-9">
        <input type="text" id="pledge_rate" class="col-xs-10 col-sm-5" name="pledge_rate" value="<?php echo $product['pledge_rate']; ?>" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-16"> 产品说明 </label>

    <div class="col-sm-9">
        <input type="text" id="productinfo" class="col-xs-10 col-sm-5" name="productinfo" value="<?php echo $product['productinfo']; ?>" />
    </div>
</div>
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-17"> 资金用途 </label>

    <div class="col-sm-9">
        <textarea id="purpose_info" class="autosize-transition col-xs-10 col-sm-9" name="purpose_info" style="height: 80px;"><?php echo $product['purpose_info']; ?></textarea>
    </div>
</div>
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-18"> 风险控制 </label>

    <div class="col-sm-9">
        <textarea id="risk_control_info" class="autosize-transition col-xs-10 col-sm-9" name="risk_control_info" style="height: 80px;"><?php echo $product['risk_control_info']; ?></textarea>
    </div>
</div>
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-19"> 还款来源 </label>

    <div class="col-sm-9">
        <textarea id="payment_info" class="autosize-transition col-xs-10 col-sm-9" name="payment_info" style="height: 80px;"><?php echo $product['payment_info']; ?></textarea>
    </div>
</div>
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-20"> 担保方介绍 </label>

    <div class="col-sm-9">
        <textarea id="guarantor_info" class="autosize-transition col-xs-10 col-sm-9" name="guarantor_info" style="height: 80px;"><?php echo $product['guarantor_info']; ?></textarea>
    </div>
</div>
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-21"> 融资方介绍 </label>

    <div class="col-sm-9">
        <textarea id="financingpart_info" class="autosize-transition col-xs-10 col-sm-9" name="financingpart_info" style="height: 80px;"><?php echo $product['financingpart_info']; ?></textarea>
    </div>
</div>
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-22"> 受托人 </label>

    <div class="col-sm-9">
        <textarea id="depositary_info" class="autosize-transition col-xs-10 col-sm-9" name="depositary_info" style="height: 80px;"><?php echo $product['depositary_info']; ?></textarea>
    </div>
</div>
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-23"> 相关信息 </label>

    <div class="col-sm-9">
        <textarea id="more_info" class="autosize-transition col-xs-10 col-sm-9" name="more_info" style="height: 80px;"><?php echo $product['more_info']; ?></textarea>
    </div>
</div>
<div class="space-4"></div>

<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="button" onclick="PropApp.save()">
            <i class="icon-ok bigger-110"></i>
            Submit
        </button>

        &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            Reset
        </button>
    </div>
</div>
</form>
<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div><!-- /.main-content -->
<?php echo $this->load->view('admin/footer'); ?>
<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="/static/admin/js/excanvas.min.js"></script>
<![endif]-->

<script src="/static/admin/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/static/admin/js/jquery.ui.touch-punch.min.js"></script>
<script src="/static/admin/js/chosen.jquery.min.js"></script>
<script src="/static/admin/js/fuelux/fuelux.spinner.min.js"></script>
<script src="/static/admin/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/static/admin/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="/static/admin/js/date-time/moment.min.js"></script>
<script src="/static/admin/js/date-time/daterangepicker.min.js"></script>
<script src="/static/admin/js/bootstrap-colorpicker.min.js"></script>
<script src="/static/admin/js/jquery.knob.min.js"></script>
<script src="/static/admin/js/jquery.autosize.min.js"></script>
<script src="/static/admin/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="/static/admin/js/jquery.maskedinput.min.js"></script>
<script src="/static/admin/js/bootstrap-tag.min.js"></script>

<!-- ace scripts -->

<script src="/static/admin/js/ace-elements.min.js"></script>
<script src="/static/admin/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
jQuery(function($) {
    $('#id-disable-check').on('click', function() {
        var inp = $('#form-input-readonly').get(0);
        if(inp.hasAttribute('disabled')) {
            inp.setAttribute('readonly' , 'true');
            inp.removeAttribute('disabled');
            inp.value="This text field is readonly!";
        }
        else {
            inp.setAttribute('disabled' , 'disabled');
            inp.removeAttribute('readonly');
            inp.value="This text field is disabled!";
        }
    });


    $(".chosen-select").chosen();
    $('#chosen-multiple-style').on('click', function(e){
        var target = $(e.target).find('input[type=radio]');
        var which = parseInt(target.val());
        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
        else $('#form-field-select-4').removeClass('tag-input-style');
    });


    $('[data-rel=tooltip]').tooltip({container:'body'});
    $('[data-rel=popover]').popover({container:'body'});

    $('textarea[class*=autosize]').autosize({append: "\n"});
    $('textarea.limited').inputlimiter({
        remText: '%n character%s remaining...',
        limitText: 'max allowed : %n.'
    });

    $.mask.definitions['~']='[+-]';
    $('.input-mask-date').mask('99/99/9999');
    $('.input-mask-phone').mask('(999) 999-9999');
    $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
    $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



    $( "#input-size-slider" ).css('width','200px').slider({
        value:1,
        range: "min",
        min: 1,
        max: 8,
        step: 1,
        slide: function( event, ui ) {
            var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
            var val = parseInt(ui.value);
            $('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
        }
    });

    $( "#input-span-slider" ).slider({
        value:1,
        range: "min",
        min: 1,
        max: 12,
        step: 1,
        slide: function( event, ui ) {
            var val = parseInt(ui.value);
            $('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
        }
    });


    $( "#slider-range" ).css('height','200px').slider({
        orientation: "vertical",
        range: true,
        min: 0,
        max: 100,
        values: [ 17, 67 ],
        slide: function( event, ui ) {
            var val = ui.values[$(ui.handle).index()-1]+"";

            if(! ui.handle.firstChild ) {
                $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
            }
            $(ui.handle.firstChild).show().children().eq(1).text(val);
        }
    }).find('a').on('blur', function(){
        $(this.firstChild).hide();
    });

    $( "#slider-range-max" ).slider({
        range: "max",
        min: 1,
        max: 10,
        value: 2
    });

    $( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
        // read initial values from markup and remove that
        var value = parseInt( $( this ).text(), 10 );
        $( this ).empty().slider({
            value: value,
            range: "min",
            animate: true

        });
    });


    $('#id-input-file-1 , #id-input-file-2').ace_file_input({
        no_file:'No File ...',
        btn_choose:'Choose',
        btn_change:'Change',
        droppable:false,
        onchange:null,
        thumbnail:false //| true | large
        //whitelist:'gif|png|jpg|jpeg'
        //blacklist:'exe|php'
        //onchange:''
        //
    });

    $('#id-input-file-3').ace_file_input({
        style:'well',
        btn_choose:'Drop files here or click to choose',
        btn_change:null,
        no_icon:'icon-cloud-upload',
        droppable:true,
        thumbnail:'small'//large | fit
        //,icon_remove:null//set null, to hide remove/reset button
        /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
        /**,before_remove : function() {
						return true;
					}*/
        ,
        preview_error : function(filename, error_code) {
            //name of the file that failed
            //error_code values
            //1 = 'FILE_LOAD_FAILED',
            //2 = 'IMAGE_LOAD_FAILED',
            //3 = 'THUMBNAIL_FAILED'
            //alert(error_code);
        }

    }).on('change', function(){
        //console.log($(this).data('ace_input_files'));
        //console.log($(this).data('ace_input_method'));
    });


    //dynamically change allowed formats by changing before_change callback function
    $('#id-file-format').removeAttr('checked').on('change', function() {
        var before_change
        var btn_choose
        var no_icon
        if(this.checked) {
            btn_choose = "Drop images here or click to choose";
            no_icon = "icon-picture";
            before_change = function(files, dropped) {
                var allowed_files = [];
                for(var i = 0 ; i < files.length; i++) {
                    var file = files[i];
                    if(typeof file === "string") {
                        //IE8 and browsers that don't support File Object
                        if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
                    }
                    else {
                        var type = $.trim(file.type);
                        if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                            || ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                            ) continue;//not an image so don't keep this file
                    }

                    allowed_files.push(file);
                }
                if(allowed_files.length == 0) return false;

                return allowed_files;
            }
        }
        else {
            btn_choose = "Drop files here or click to choose";
            no_icon = "icon-cloud-upload";
            before_change = function(files, dropped) {
                return files;
            }
        }
        var file_input = $('#id-input-file-3');
        file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
        file_input.ace_file_input('reset_input');
    });




    $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
        .on('change', function(){
            //alert(this.value)
        });
    $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
    $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});



    $('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
        $(this).prev().focus();
    });
    $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
        $(this).next().focus();
    });

    $('#timepicker1').timepicker({
        minuteStep: 1,
        showSeconds: true,
        showMeridian: false
    }).next().on(ace.click_event, function(){
        $(this).prev().focus();
    });

    $('#colorpicker1').colorpicker();
    $('#simple-colorpicker-1').ace_colorpicker();


    $(".knob").knob();


    //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
    var tag_input = $('#form-field-tags');
    if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) )
    {
        tag_input.tag(
            {
                placeholder:tag_input.attr('placeholder'),
                //enable typeahead by specifying the source array
                source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
            }
        );
    }
    else {
        //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
        tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
        //$('#form-field-tags').autosize({append: "\n"});
    }




    /////////
    $('#modal-form input[type=file]').ace_file_input({
        style:'well',
        btn_choose:'Drop files here or click to choose',
        btn_change:null,
        no_icon:'icon-cloud-upload',
        droppable:true,
        thumbnail:'large'
    })

    //chosen plugin inside a modal will have a zero width because the select element is originally hidden
    //and its width cannot be determined.
    //so we set the width after modal is show
    $('#modal-form').on('shown.bs.modal', function () {
        $(this).find('.chosen-container').each(function(){
            $(this).find('a:first-child').css('width' , '210px');
            $(this).find('.chosen-drop').css('width' , '210px');
            $(this).find('.chosen-search input').css('width' , '200px');
        });
    })
    /**
     //or you can activate the chosen plugin after modal is shown
     //this way select element becomes visible with dimensions and chosen works as expected
     $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
     */

});
</script>