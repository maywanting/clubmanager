<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>课堂管理系统</title>

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
                <a class="navbar-brand" href="{!! url('index') !!}">课堂管理系统</a>
            </div>
            <!-- /.navbar-header -->
<ul class="nav navbar-top-links navbar-right">
            <li>当前课程： @if(session()->has('className')) {{session('className')}} @else 无 @endif </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> 用户简况</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{!! url('logout') !!}"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- 用户设置 -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        @if(session()->has('classId'))
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> 课时管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! url('class/index') !!}">查看课表及计划</a>
                                </li>
                                <li>
                                    <a href="{!! url('class/teachTime') !!}">修改课时安排</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i>课堂点名<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="{!! url('attendance/index') !!}">课程学生名单</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> 课堂评测<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! url('question/index') !!}">问答学生名单</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i> 课堂讨论<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! url('discussion/index/1') !!}">课题讨论1</a>
                                </li>
                                <li>
                                    <a href="{!! url('discussion/index/2') !!}">课题讨论2</a>
                                </li>
                                <li>
                                    <a href="{!! url('discussion/index/3') !!}">课题讨论3</a>
                                </li>
                                <li>
                                    <a href="{!! url('discussion/index/4') !!}">课题讨论4</a>
                                </li>
                                <li>
                                    <a href="{!! url('discussion/index/5') !!}">课题讨论5</a>
                                </li>
                                <li>
                                    <a href="{!! url('discussion/index/6') !!}">课题讨论6</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> 分析统计<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! url('student/overall') !!}">学生综合成绩</a>
                                </li>
                                <li>
                                    <a href="{!! url('student/attendance') !!}">学生课堂出勤</a>
                                </li>
                                <li>
                                    <a href="{!! url('student/question') !!}">学生课堂问答</a>
                                </li>
                                <li>
                                    <a href="{!! url('student/discussion') !!}">学生讨论成绩</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @endif
                        <li>
                            <a href="#"><i class="fa fa-cubes fa-fw"></i> 学期管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! url('class/import') !!}">初始化导入</a>
                                </li>
                                <li>
                                    <a href="{!! url('class/export') !!}">导出归档</a>
                                </li>
                                <li>
                                    <a href="{!! url('courseware/index') !!}">课件管理</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
