<!DOCTYPE html>
<html lang="zh_cn">
<head>
    <meta charset="utf-8" />
    <title>跃盈财富-后台管理系统-version1.0 by Redbud.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/static/admin/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/static/admin/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="/static/admin/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="/static/admin/css/chosen.css" />
    <link rel="stylesheet" href="/static/admin/css/datepicker.css" />
    <link rel="stylesheet" href="/static/admin/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/static/admin/css/daterangepicker.css" />


    <!-- fonts -->


    <!-- ace styles -->

    <link rel="stylesheet" href="/static/admin/css/ace.min.css" />
    <link rel="stylesheet" href="/static/admin/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/static/admin/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/static/admin/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script type="text/javascript" src = "/resources/js/jquery.min.js"></script>
    <script src="/static/admin/js/ace-extra.min.js"></script>
    <script type="text/javascript" src="/static/admin/js/bootstrap-wysiwyg.min.js"></script>
    <script type="text/javascript" src="/resources/js/product.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/static/admin/js/html5shiv.js"></script>
    <script src="/static/admin/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-default" id="navbar">
<script type="text/javascript">
    try{ace.settings.check('navbar' , 'fixed')}catch(e){}
</script>

<div class="navbar-container" id="navbar-container">
<div class="navbar-header pull-left">
    <a href="#" class="navbar-brand">
        <small>
            <i class="icon-leaf"></i>
            <span style="font-size: 30px">跃盈财富</span>
            <span style="font-size: 20px">后台管理</span>
        </small>
    </a><!-- /.brand -->
</div><!-- /.navbar-header -->

<div class="navbar-header pull-right" role="navigation">
<ul class="nav ace-nav">

<li class="light-blue">
    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
        <img class="nav-user-photo" src="/static/admin/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

        <i class="icon-caret-down"></i>
    </a>

    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
       <!--  <li>
            <a href="#">
                <i class="icon-cog"></i>
                Settings
            </a>
        </li>

        <li>
            <a href="#">
                <i class="icon-user"></i>
                Profile
            </a>
        </li> -->

        <li class="divider"></li>

        <li>
            <a href="/admin/index/logout">
                <i class="icon-off"></i>
                Logout
            </a>
        </li>
    </ul>
</li>
</ul><!-- /.ace-nav -->
</div><!-- /.navbar-header -->
</div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>
