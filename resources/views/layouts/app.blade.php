<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <title>
            Luft Technik - Control Panel
        </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
        <link href="{{Request::root()}}/public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- daterange picker -->
        <link href="{{Request::root()}}/public/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"/>
        <!-- Font Awesome -->
        <link href="{{Request::root()}}/public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <!-- Ionicons -->
        <link href="{{Request::root()}}/public/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet"/>
        <link href="{{Request::root()}}/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
        <!-- Theme style -->
        <link href="{{Request::root()}}/public/dist/css/AdminLTE.min.css" rel="stylesheet"/>
        <link href="{{Request::root()}}/public/css/skins/skin-black.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet"/>
        <script src="{{Request::root()}}/public/bower_components/jquery/dist/jquery.min.js">
        </script>
        <meta content="{{ csrf_token() }}" name="csrf-token"/>
    </head>
</html>
<body class="skin-black sidebar-mini">
    <div class="wrapper" style="overflow-y: hidden;">
        <header class="main-header">
            <!-- Logo -->
            <a class="logo" href="index2.html">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <img alt="" height="50" src="http://127.0.0.1/luftusa/public/frontend_template/HTML/img/logo.png" width="50"/>
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <img alt="" height="50" src="http://127.0.0.1/luftusa/public/frontend_template/HTML/img/logo.png" width="50"/>
                </span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a class="sidebar-toggle" data-toggle="push-menu" href="{{Request::root()}}/public/#" role="button">
                    <span class="sr-only">
                        Toggle navigation
                    </span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="{{Request::root()}}/public/#">
                                <span class="hidden-xs">
                                    {{ucwords(auth()->user()->name." ". auth()->user()->lastname)}}
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header" style="height: 90px;">
                                    <p>
                                        {{ucwords(auth()->user()->name." ". auth()->user()->lastname)}} - Web Developer
                                        <small>
                                            Member since {{ucwords(auth()->user()->created_at)}}
                                        </small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="center" style="text-align: center;">
                                        <a class="btn btn-default btn-flat" href="{{url('logout')}}">
                                            Sign out
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">
                        MAIN NAVIGATION
                    </li>
                    <li>
                        <a href="{{Request::root()}}/admin">
                            <i class="fa fa-home">
                            </i>
                            <span>
                                Home
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/cars">
                            <i class="fa fa-car">
                            </i>
                            <span>
                                Cars
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/carstype">
                            <i class="fa fa-archive">
                            </i>
                            <span>
                                Car Types
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/carmodels">
                            <i class="fa fa-clone">
                            </i>
                            <span>
                                Car Models
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/carversions">
                            <i class="fa fa-vimeo">
                            </i>
                            <span>
                                Car Versions
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/carparts">
                            <i class="fa fa-gears">
                            </i>
                            <span>
                                Car Parts
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/blogs">
                            <i class="fa fa-book">
                            </i>
                            <span>
                                Blogs
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/galleries">
                            <i class="fa fa-image">
                            </i>
                            <span>
                                Galleries
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/users">
                            <i class="fa fa-user">
                            </i>
                            <span>
                                Users
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/userstype">
                            <i class="fa fa-user-times">
                            </i>
                            <span>
                                Users Types
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/message">
                            <i class="fa fa-envelope-o">
                            </i>
                            <span>
                                Messages
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/newsletters">
                            <i class="fa fa-group">
                            </i>
                            <span>
                                Newsletters
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/mydata/">
                            <i class="fa fa-info">
                            </i>
                            <span>
                                My Data
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Request::root()}}/../#">
                            <i class="fa fa-gear">
                            </i>
                            <span>
                                Settings
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}">
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
                <a href="{{Request::root()}}/public/https://adminlte.io">
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
                    <a data-toggle="tab" href="{{Request::root()}}/public/#control-sidebar-home-tab">
                        <i class="fa fa-home">
                        </i>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="{{Request::root()}}/public/#control-sidebar-settings-tab">
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
                            <a href="{{Request::root()}}/public/javascript:void(0)">
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
                            <a href="{{Request::root()}}/public/javascript:void(0)">
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
                            <a href="{{Request::root()}}/public/javascript:void(0)">
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
                            <a href="{{Request::root()}}/public/javascript:void(0)">
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
                            <a href="{{Request::root()}}/public/javascript:void(0)">
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
                            <a href="{{Request::root()}}/public/javascript:void(0)">
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
                            <a href="{{Request::root()}}/public/javascript:void(0)">
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
                            <a href="{{Request::root()}}/public/javascript:void(0)">
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
                                <a class="text-red pull-right" href="{{Request::root()}}/public/javascript:void(0)">
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
    <!-- Bootstrap 3.3.7 -->
    <script src="{{Request::root()}}/public/bower_components/bootstrap/dist/js/bootstrap.min.js">
    </script>
    <!-- bootstrap datepicker -->
    <!-- InputMask -->
    <script src="{{Request::root()}}/public/plugins/input-mask/jquery.inputmask.js">
    </script>
    <script src="{{Request::root()}}/public/plugins/input-mask/jquery.inputmask.date.extensions.js">
    </script>
    <script src="{{Request::root()}}/public/plugins/input-mask/jquery.inputmask.extensions.js">
    </script>
</body>
<script src="{{Request::root()}}/public/public/plugins/input-mask/jquery.inputmask.extensions.js">
</script>
<!-- FastClick -->
<script src="{{Request::root()}}/public/public/bower_components/fastclick/lib/fastclick.js">
</script>
<script src="{{Request::root()}}/public/bower_components/ckeditor/ckeditor.js">
</script>
<!--Data Tables -->
<script src="{{Request::root()}}/public/bower_components/datatables.net/js/jquery.dataTables.min.js">
</script>
<script src="{{Request::root()}}/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
</script>
<!--Data Tables -->
<!-- AdminLTE App -->
<script src="{{Request::root()}}/public/dist/js/adminlte.min.js">
</script>
<!-- AdminLTE for demo purposes -->
<script src="{{Request::root()}}/public/dist/js/demo.js">
</script>
<script>
    $(function () {
                $('.datemask').inputmask('yyyy/mm/dd', { 'placeholder': 'yyyy/mm/dd' })
                $('#example1').DataTable()
                $('#example2').DataTable({
                  'paging'      : true,
                  'lengthChange': false,
                  'searching'   : false,
                  'ordering'    : true,
                  'info'        : true,
                  'autoWidth'   : false
                })
                CKEDITOR.replace('editor1')
              })
</script>
