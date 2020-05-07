@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">本课程课时管理</h1>
    </div>
    <!--课时修改-->
    <div class="col-lg-8" id="change_plan">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-wrench fa-fw"></i> 课时增删改
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>周几</th>
                                <th>时间段</th>
                                <th>单双周</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $id => $data)
                            <tr>
                                <td>{{$weeks[$data['week']]}}</td>
                                <td>@foreach($data['time'] as $key => $value) {{$value}}  @endforeach 课 </td>
                                <td>{{$weekSet[$data['weekSet']]}}</td>
                                <td>
                                    <a href="{!! url('class/teachTime/delete/' . $id) !!}" type="button" class="btn btn-outline btn-primary btn-xs">删除</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--上删改 下增加-->
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>请勾选对应课时信息</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! Form::open(['url' => 'class/teachTime/change', 'method' => 'post']) !!}
                            <tr>
                                <td>
                                    <label class="radio-inline">
                                        <input type="radio" name="week"  value="1">周一
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="week"  value="2">周二
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="week"  value="3">周三
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="week"  value="4">周四
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="week"  value="5">周五
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="week"  value="6">周六
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="week"  value="7">周日
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="time[]" value="1">上午第一课
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="time[]" value="2">上午第二课
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="time[]" value="3">上午第三课
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="time[]" value="4">上午第四课
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="time[]" value="5">下午第一课
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="time[]" value="6">下午第二课
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox"  name="time[]" value="7">下午第三课
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="time[]" value="8">下午第四课
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="radio-inline">
                                        <input type="radio" name="weekSet" value="single">仅单周
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="weekSet" value="double">仅双周
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="weekSet" value="every">每周
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="pull-right">
                                        <input type="submit" class="btn btn-outline btn-primary btn-xs" value="保存">
                                    </div>
                                </td>
                            </tr>
                            {!! Form::close() !!}
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
    <!--/课时修改-->

<!--/ClaaatablePage-->

</div>
<!-- /.row -->
@stop
