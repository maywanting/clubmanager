<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>熊虎俱乐部后台管理系统</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}

    <!-- MetisMenu CSS -->
    {!! Html::style('vendor/metisMenu/metisMenu.min.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('css/sb-admin-2.css') !!}

    <!-- Morris Charts CSS -->
    {!! Html::style('vendor/morrisjs/morris.css') !!}

    <!-- Custom Fonts -->
    {!! Html::style('vendor/font-awesome/css/font-awesome.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! url('index') !!}">熊虎俱乐部后台管理系统</a>
            </div>
            <!-- /.navbar-header -->
        <ul class="nav navbar-top-links navbar-right">
        <li><a href="{!! url('sys/logout') !!}"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a></li>
            
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i>教练管理<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{!! url('sys/coach/index') !!}">教练名单</a></li>
                                <li><a href="{!! url('sys/coach/add') !!}">新增教练</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i>课程管理<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{!! url('sys/building/index') !!}">课程列表</a></li>
                                <li><a href="{!! url('sys/building/add') !!}">新增课程</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i>客户管理<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{!! url('sys/customer/list') !!}">客户名单</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!--ClaaatablePage-->
        <div id="page-wrapper">
            <!-- /.row -->
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {!! Html::script('vendor/jquery/jquery.min.js') !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}

    <!-- Metis Menu Plugin JavaScript -->
    {!! Html::script('vendor/metisMenu/metisMenu.min.js') !!}

    <!-- Morris Charts JavaScript -->
    {!! Html::script('vendor/raphael/raphael.min.js') !!}
    {!! Html::script('vendor/morrisjs/morris.min.js') !!}

    <!-- Custom Theme JavaScript -->
    {!! Html::script('js/sb-admin-2.js') !!}

    <!-- DataTables JavaScript -->
    {!! Html::script('vendor/datatables/js/jquery.dataTables.min.js') !!}
    {!! Html::script('vendor/datatables-plugins/dataTables.bootstrap.min.js') !!}
    {!! Html::script('vendor/datatables-responsive/dataTables.responsive.js') !!}

    @yield('footer')
</body>

</html>
