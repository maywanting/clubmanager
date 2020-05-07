@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">本周教学安排</h1>
    </div>
    <!--课表显示-->
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-th fa-fw"></i> 本周课表
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            第{{$weekId}}周
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="{!! url('class/weekSelect/1') !!}">第1周</a></li>
                            <li><a href="{!! url('class/weekSelect/2') !!}">第2周</a></li>
                            <li><a href="{!! url('class/weekSelect/3') !!}">第3周</a></li>
                            <li><a href="{!! url('class/weekSelect/4') !!}">第4周</a></li>
                            <li><a href="{!! url('class/weekSelect/5') !!}">第5周</a></li>
                            <li><a href="{!! url('class/weekSelect/6') !!}">第6周</a></li>
                            <li><a href="{!! url('class/weekSelect/7') !!}">第7周</a></li>
                            <li><a href="{!! url('class/weekSelect/8') !!}">第8周</a></li>
                            <li><a href="{!! url('class/weekSelect/9') !!}">第9周</a></li>
                            <li><a href="{!! url('class/weekSelect/10') !!}">第10周</a></li>
                            <li><a href="{!! url('class/weekSelect/11') !!}">第11周</a></li>
                            <li><a href="{!! url('class/weekSelect/12') !!}">第12周</a></li>
                            <li><a href="{!! url('class/weekSelect/13') !!}">第13周</a></li>
                            <li><a href="{!! url('class/weekSelect/14') !!}">第14周</a></li>
                            <li><a href="{!! url('class/weekSelect/15') !!}">第15周</a></li>
                            <li><a href="{!! url('class/weekSelect/16') !!}">第16周</a></li>
                            <li><a href="{!! url('class/weekSelect/17') !!}">第17周</a></li>
                            <li><a href="{!! url('class/weekSelect/18') !!}">第18周</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>周一</th>
                                <th>周二</th>
                                <th>周三</th>
                                <th>周四</th>
                                <th>周五</th>
                                <th>周六</th>
                                <th>周日</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>am.8:00-8:50</td>
                                @foreach ($classTime[0] as $time)
                                    <td>
                                        @if ($time == 1)
                                        有课
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>am.9:00-9:50</td>
                                @foreach ($classTime[1] as $time)
                                    <td>
                                        @if ($time == 1)
                                        有课
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>am.10:10-11:00</td>
                                @foreach ($classTime[2] as $time)
                                    <td>
                                        @if ($time == 1)
                                        有课
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>am.11:10-12:00</td>
                                @foreach ($classTime[3] as $time)
                                    <td>
                                        @if ($time == 1)
                                        有课
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>pm.1:30-2:20</td>
                                @foreach ($classTime[4] as $time)
                                    <td>
                                        @if ($time == 1)
                                        有课
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>pm.2:30-3:20</td>
                                @foreach ($classTime[5] as $time)
                                    <td>
                                        @if ($time == 1)
                                        有课
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>pm.3:40-4:30</td>
                                @foreach ($classTime[6] as $time)
                                    <td>
                                        @if ($time == 1)
                                        有课
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>pm.4:40-5:30</td>
                                @foreach ($classTime[7] as $time)
                                    <td>
                                        @if ($time == 1)
                                        有课
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    <!--课表显示-->

    <!--教学计划显示-->
    <div class="col-lg-4" id="teaching_plan">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-tasks fa-fw"></i> 本周教学计划
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            <p>{{$arrangement}}</p>
            <!--插入教学计划-->
                </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!--教学计划显示-->

<!--/ClaaatablePage-->

</div>
@stop
