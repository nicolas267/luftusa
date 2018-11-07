<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                    AdminLTE 2 | General Form Elements
                </title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
                <!-- Bootstrap 3.3.7 -->
                <link href="{{Request::root()}}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
                <!-- Font Awesome -->
                <link href="{{Request::root()}}/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
                <!-- Ionicons -->
                <link href="{{Request::root()}}/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet"/>
                <!-- Theme style -->
                <link href="{{Request::root()}}/dist/css/AdminLTE.min.css" rel="stylesheet"/>
                <link href="{{Request::root()}}/dist/css/skins/_all-skins.min.css" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet"/>
            </meta>
        </meta>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a class="logo" href="{{Request::root()}}/index2.html">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">
                        <b>
                            A
                        </b>
                        LT
                    </span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">
                        <b>
                            Admin
                        </b>
                        LTE
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a class="sidebar-toggle" data-toggle="push-menu" href="{{Request::root()}}/#" role="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="{{Request::root()}}/#">
                                    <i class="fa fa-envelope-o">
                                    </i>
                                    <span class="label label-success">
                                        4
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 4 messages
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start message -->
                                                <a href="{{Request::root()}}/#">
                                                    <div class="pull-left">
                                                        <img alt="User Image" class="img-circle" src="{{Request::root()}}/dist/img/user2-160x160.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            5 mins
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <div class="pull-left">
                                                        <img alt="User Image" class="img-circle" src="{{Request::root()}}/dist/img/user3-128x128.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            2 hours
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <div class="pull-left">
                                                        <img alt="User Image" class="img-circle" src="{{Request::root()}}/dist/img/user4-128x128.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            Today
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <div class="pull-left">
                                                        <img alt="User Image" class="img-circle" src="{{Request::root()}}/dist/img/user3-128x128.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            Yesterday
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <div class="pull-left">
                                                        <img alt="User Image" class="img-circle" src="{{Request::root()}}/dist/img/user4-128x128.jpg">
                                                        </img>
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small>
                                                            <i class="fa fa-clock-o">
                                                            </i>
                                                            2 days
                                                        </small>
                                                    </h4>
                                                    <p>
                                                        Why not buy a new awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="{{Request::root()}}/#">
                                            See All Messages
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="{{Request::root()}}/#">
                                    <i class="fa fa-bell-o">
                                    </i>
                                    <span class="label label-warning">
                                        10
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 10 notifications
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <i class="fa fa-users text-aqua">
                                                    </i>
                                                    5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <i class="fa fa-warning text-yellow">
                                                    </i>
                                                    Very long description here that may not fit into the
                                                    page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <i class="fa fa-users text-red">
                                                    </i>
                                                    5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <i class="fa fa-shopping-cart text-green">
                                                    </i>
                                                    25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{Request::root()}}/#">
                                                    <i class="fa fa-user text-red">
                                                    </i>
                                                    You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="{{Request::root()}}/#">
                                            View all
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="{{Request::root()}}/#">
                                    <i class="fa fa-flag-o">
                                    </i>
                                    <span class="label label-danger">
                                        9
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 9 tasks
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- Task item -->
                                                <a href="{{Request::root()}}/#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">
                                                            20%
                                                        </small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-aqua" role="progressbar" style="width: 20%">
                                                            <span class="sr-only">
                                                                20% Complete
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="{{Request::root()}}/#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">
                                                            40%
                                                        </small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-green" role="progressbar" style="width: 40%">
                                                            <span class="sr-only">
                                                                40% Complete
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="{{Request::root()}}/#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">
                                                            60%
                                                        </small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-red" role="progressbar" style="width: 60%">
                                                            <span class="sr-only">
                                                                60% Complete
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li>
                                                <!-- Task item -->
                                                <a href="{{Request::root()}}/#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">
                                                            80%
                                                        </small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-yellow" role="progressbar" style="width: 80%">
                                                            <span class="sr-only">
                                                                80% Complete
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="{{Request::root()}}/#">
                                            View all tasks
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="{{Request::root()}}/#">
                                    <img alt="User Image" class="user-image" src="{{Request::root()}}/dist/img/user2-160x160.jpg">
                                        <span class="hidden-xs">
                                            Alexander Pierce
                                        </span>
                                    </img>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img alt="User Image" class="img-circle" src="{{Request::root()}}/dist/img/user2-160x160.jpg">
                                            <p>
                                                Alexander Pierce - Web Developer
                                                <small>
                                                    Member since Nov. 2012
                                                </small>
                                            </p>
                                        </img>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="{{Request::root()}}/#">
                                                    Followers
                                                </a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="{{Request::root()}}/#">
                                                    Sales
                                                </a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="{{Request::root()}}/#">
                                                    Friends
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a class="btn btn-default btn-flat" href="{{Request::root()}}/#">
                                                Profile
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a class="btn btn-default btn-flat" href="{{Request::root()}}/#">
                                                Sign out
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a data-toggle="control-sidebar" href="{{Request::root()}}/#">
                                    <i class="fa fa-gears">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img alt="User Image" class="img-circle" src="{{Request::root()}}/dist/img/user2-160x160.jpg">
                            </img>
                        </div>
                        <div class="pull-left info">
                            <p>
                                Alexander Pierce
                            </p>
                            <a href="{{Request::root()}}/#">
                                <i class="fa fa-circle text-success">
                                </i>
                                Online
                            </a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" class="sidebar-form" method="get">
                        <div class="input-group">
                            <input class="form-control" name="q" placeholder="Search..." type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-flat" id="search-btn" name="search" type="submit">
                                        <i class="fa fa-search">
                                        </i>
                                    </button>
                                </span>
                            </input>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">
                            MAIN NAVIGATION
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/">
                                <i class="fa fa-home">
                                </i>
                                <span>
                                    Home
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/users">
                                <i class="fa fa-group">
                                </i>
                                <span>
                                    usuarios
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-car">
                                </i>
                                <span>
                                    Cars
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/carstype">
                                <i class="fa fa-archive">
                                </i>
                                <span>
                                    Car Types
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-clone">
                                </i>
                                <span>
                                    Car Models
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-vimeo">
                                </i>
                                <span>
                                    Car Versions
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-calendar-check-o">
                                </i>
                                <span>
                                    Car Years
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-gears">
                                </i>
                                <span>
                                    Car Parts
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-dashboard">
                                </i>
                                <span>
                                    Parts
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-book">
                                </i>
                                <span>
                                    Blogs
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-envelope-o">
                                </i>
                                <span>
                                    Messages
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-group">
                                </i>
                                <span>
                                    Newsletters
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-user">
                                </i>
                                <span>
                                    My Data
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-gear">
                                </i>
                                <span>
                                    Settings
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{Request::root()}}/../#">
                                <i class="fa fa-sign-out">
                                </i>
                                <span>
                                    Logout
                                </span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>
                        Version
                    </b>
                    2.4.0
                </div>
                <strong>
                    Copyright © 2014-2016
                    <a href="{{Request::root()}}/https://adminlte.io">
                        Almsaeed Studio
                    </a>
                    .
                </strong>
                All rights
                reserved.
            </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li>
                        <a data-toggle="tab" href="{{Request::root()}}/#control-sidebar-home-tab">
                            <i class="fa fa-home">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="{{Request::root()}}/#control-sidebar-settings-tab">
                            <i class="fa fa-gears">
                            </i>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">
                            Recent Activity
                        </h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="{{Request::root()}}/javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red">
                                    </i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">
                                            Langdon's Birthday
                                        </h4>
                                        <p>
                                            Will be 23 on April 24th
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{Request::root()}}/javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow">
                                    </i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">
                                            Frodo Updated His Profile
                                        </h4>
                                        <p>
                                            New phone +1(800)555-1234
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{Request::root()}}/javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue">
                                    </i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">
                                            Nora Joined Mailing List
                                        </h4>
                                        <p>
                                            nora@example.com
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{Request::root()}}/javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green">
                                    </i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">
                                            Cron Job 254 Executed
                                        </h4>
                                        <p>
                                            Execution time 5 seconds
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                        <h3 class="control-sidebar-heading">
                            Tasks Progress
                        </h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="{{Request::root()}}/javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">
                                            70%
                                        </span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{Request::root()}}/javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">
                                            95%
                                        </span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{Request::root()}}/javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">
                                            50%
                                        </span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{Request::root()}}/javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">
                                            68%
                                        </span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">
                        Stats Tab Content
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">
                                General Settings
                            </h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input checked="" class="pull-right" type="checkbox">
                                    </input>
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input checked="" class="pull-right" type="checkbox">
                                    </input>
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input checked="" class="pull-right" type="checkbox">
                                    </input>
                                </label>
                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <h3 class="control-sidebar-heading">
                                Chat Settings
                            </h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input checked="" class="pull-right" type="checkbox">
                                    </input>
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input class="pull-right" type="checkbox">
                                    </input>
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a class="text-red pull-right" href="{{Request::root()}}/javascript:void(0)">
                                        <i class="fa fa-trash-o">
                                        </i>
                                    </a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
        </div>
        <div class="control-sidebar-bg">
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 3 -->
        <script src="{{Request::root()}}/bower_components/jquery/dist/jquery.min.js">
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{Request::root()}}/bower_components/bootstrap/dist/js/bootstrap.min.js">
        </script>
        <!-- FastClick -->
        <script src="{{Request::root()}}/bower_components/fastclick/lib/fastclick.js">
        </script>
        <!-- AdminLTE App -->
        <script src="{{Request::root()}}/dist/js/adminlte.min.js">
        </script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{Request::root()}}/dist/js/demo.js">
        </script>
        <script src="{{Request::root()}}/http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript">
        </script>
    </body>
</html>
