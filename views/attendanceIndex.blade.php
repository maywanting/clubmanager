@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">学生点名名单</h1>
    </div>

    <!--班级1第N周名单表-->
    {!! Form::open(['url' => 'attendance/store', 'method' => 'post']) !!}
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-th fa-fw"></i> 本次点名名单
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>学号</th>
                                <th>姓名</th>
                                <th>出勤情况</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentLists as $key => $student)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$student->student_number}}</td>
                                <td>{{$student->name}}</td>
                                <td><!--div class="form-group"-->
                                <label class="radio-inline">
                                    <input name="{{$student->id}}" type="radio" checked="" value="0">出席
                                </label>
                                <label class="radio-inline">
                                    <input name="{{$student->id}}" type="radio" value="1">请假
                                </label>
                                <label class="radio-inline">
                                    <input name="{{$student->id}}" type="radio" value="2">缺勤
                                </label>
                            <!--/div--></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    <!--班级1名单显表-->
    <!--历史缺勤记录表-->
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bell fa-fw"></i> 历史缺勤名单
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                @foreach ($absent as $info)
                <p>{{$info->student_number}}-{{$info->student_name}}-{{$info->number}}次 </p>
                @endforeach
            <!--联入缺勤名单-->
                </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        <!--保存本次出勤记录-->
        <div class="pull-right">
            <input type="submit" class="btn btn-primary" value="保存本次点名">
            <input type="reset" class="btn btn-primary" value="重置本次点名">
        </div>
        <!--保存本次出勤记录-->
    </div>
    {!! Form::close() !!}
    <!--历史缺勤记录-->

<!--/ClaaatablePage-->

</div>
@stop
