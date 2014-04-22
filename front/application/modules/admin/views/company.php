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
                <a href="/redbud_admin">Home</a>
            </li>
            <li class="active">信托公司管理</li>
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
                <div class="header" style="line-height: 48px;">
                    <h3 class="smaller lighter blue" style="display: inline;">信托公司列表</h3>
                    <button class="btn btn-primary" style="float: right;margin-right: 10px;" onclick="PropApp.addpage()">
                        <i class="icon-plus align-top bigger-125"></i>添加
                    </button>
                </div>

                <div class="table-responsive">
                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="center">
                                <label>
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>公司简称</th>
                            <th class="hidden-480">注册资本</th>

                            <th>

                               董事长
                            </th>
                            <th class="hidden-480">总经理</th>
                            <th>大股东</th>
                            <th>是否上市</th>
                            <th><i class="icon-time bigger-110 hidden-480"></i>注册时间</th>
                            <th>地区</th>
                            <th>操作</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $sum = count( $result); ?>
                        <?php for($i = 0; $i < $sum; $i++) { ?>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td><a href="#"><?php echo $result[$i]['name'];?></a></td>
                                <td><?php echo $result[$i]['register_capital']; ?></td>
                                <td class="hidden-480"><?php echo $result[$i]['chairman']; ?></td>
                                <td><?php echo $result[$i]['manage_director']; ?></td>

                                <td><?php echo $result[$i]['major_stockholder'];?></td>
                                <td><?php if($result[$i]['is_listed']== "1") echo "是"; else echo "否"; ?></td>
                                <td><?php echo $result[$i]['register_time']; ?></td>
                                <td><?php echo $result[$i]['area']; ?></td>
                                <td>
                                    <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                        <a class="blue" href="#">
                                            <i class="icon-zoom-in bigger-130"></i>
                                        </a>

                                        <a class="green" href="/redbud_admin/upsertcompany?pid=<?php echo $result[$i]['id']; ?>">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>

                                        <a class="red" href="#">
                                            <i class="icon-trash bigger-130"></i>
                                        </a>
                                    </div>

                                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                                        <div class="inline position-relative">
                                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-caret-down icon-only bigger-120"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
<?php echo $this->load->view('admin/footer'); ?>

<script src="/static/admin/js/jquery.dataTables.min.js"></script>
<script src="/static/admin/js/jquery.dataTables.bootstrap.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        var oTable1 = $('#sample-table-2').dataTable( {
            "oLanguage" : {
                "sLengthMenu": "每页显示 _MENU_ 条记录",
                "sZeroRecords": "抱歉， 没有找到",
                "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
                "sInfoEmpty": "没有数据",
                "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
                "sZeroRecords": "没有检索到数据",
                "sSearch": "搜索:",
                "oPaginate": {
                    "sFirst": "首页",
                    "sPrevious": "前一页",
                    "sNext": "后一页",
                    "sLast": "尾页"
                }
            },

            "aoColumns": [
                { "bSortable": false },
                { "bSortable": false },
                { "bSortable": false },
                { "bSortable": false },
                { "bSortable": false },
                { "bSortable": false },
                { "bSortable": false },
                { "bSortable": false },
                { "bSortable": false },
                //null, null,null, null, null, null, null, null,
                { "bSortable": false }
            ]
        } );


        $('table th input:checkbox').on('click' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function(){
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });

        });


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }
    })
</script>