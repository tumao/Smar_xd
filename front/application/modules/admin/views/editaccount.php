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
            <li>
                <a href="#">系统设置</a>
            </li>
            <li class="active">编辑管理员账户</li>
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

                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
               <!--  <th class="center">
                    <label>
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th> -->
                <th>用户名</th>
                <th>用户邮箱</th>
                <th class="hidden-480">创建时间</th>

            
                <th>操作</th>
            </tr>
            </thead>

                <tbody>
                <?php $sum = count( $users); ?>
                <?php for( $i = 0; $i< $sum;$i++){ ?>
                <tr>
                    <td class="center">
                        <label>
                            <!-- <input type="checkbox" class="ace" /> -->
                            <span class="lbl"><?php echo $users[$i]['user_name']; ?></span>
                        </label>
                    </td>

                    <td>
                        <a href="#"><?php  echo $users[$i]['email'];?></a>
                    </td>
                    <td><?php  echo $users[$i]['create_time']; ?></td>
               
                    <td>
                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                         <!--    <a class="blue" href="#">
                                <i class="icon-zoom-in bigger-130"></i>
                            </a> -->

                            <a class="green" href="/admin/index/accountInfo?uid=<?php echo $users[$i]['id']; ?>">
                                <i class="icon-pencil bigger-130"></i>修改密码
                            </a>

                           <!--  <a class="red" href="#">
                                <i class="icon-trash bigger-130"></i>
                            </a> -->
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
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->
<?php echo $this->load->view('admin/footer'); ?>