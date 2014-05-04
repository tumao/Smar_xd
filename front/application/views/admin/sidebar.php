<div class="sidebar" id="sidebar">
<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
</script>

<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
            <i class="icon-signal"></i>
        </button>

        <button class="btn btn-info">
            <i class="icon-pencil"></i>
        </button>

        <button class="btn btn-warning">
            <i class="icon-group"></i>
        </button>

        <button class="btn btn-danger">
            <i class="icon-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div><!-- #sidebar-shortcuts -->

<ul class="nav nav-list">
    <li>
        <a href="/redbud_admin">
            <i class="icon-dashboard"></i>
            <span class="menu-text"> 控制台 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'product') echo 'class="active"';?>>
        <a href="/redbud_admin/product">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 信托产品 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'company') echo 'class="active"';?>>
        <a href="/redbud_admin/company">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 信托公司 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'course') echo 'class="active"';?>>
        <a href="/redbud_admin/course">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 信托课堂 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'daogou') echo 'class="active"';?>>
        <a href="/redbud_admin/daogou">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 信托导购 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'zixun') echo 'class="active"';?>>
        <a href="/redbud_admin/zixun">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 信托咨询 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'contactus') echo 'class="active"';?>>
        <a href="/redbud_admin/contactus">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 联系我们 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'investorientation') echo 'class="active"';?>>
        <a href="/redbud_admin/investorientation">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 投资行业管理 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'xintuotype') echo 'class="active"';?>>
        <a href="/redbud_admin/xintuotype">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 信托类型管理 </span>
        </a>
    </li>
    <li <?php if($this->uri->segment(2) == 'iint') echo 'class="active"';?>>
        <a href="/redbud_admin/iint">
            <i class="icon-file-alt"></i>
            <span class="menu-text"> 利息分配方式管理 </span>
        </a>
    </li>

    <li class="<?php if($this->uri->segment(2) == 'editaccount') echo 'active';?> open">
        <a href="#" class="dropdown-toggle">
            <i class="icon-file-alt"></i>
            <span class="menu-text">
                系统设置
            </span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li <?php if($this->uri->segment(2) == 'editaccount') echo 'class="active"';?>>
                <a href="/redbud_admin/editaccount">
                    <i class="icon-double-angle-right"></i>
                    编辑账户
                </a>
            </li>
        </ul>
    </li>
</ul><!-- /.nav-list -->

<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
</div>

<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>
</div>