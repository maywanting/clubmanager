@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">随机提问名单</h1>
    </div>
    <!--名单显示 5个一组-->
        <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-th fa-fw"></i> 本次随机名单
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
                                <th>答题成绩</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($student))
                            <tr>
                                <td>1</td>
                                <td>{{$student->student_number}}</td>
                                <td>{{$student->name}}</td>
                                <td>
                                    {!! Form::open(['url' => url('question/store'), 'method' => 'post']) !!}
                                    <div class="col-lg-7">
                                        <input type="hidden" name="student_id" value="{{$student->id}}"/>
                                        <input class="form-control" type="text" name="grade"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="submit" class="btn btn-outline btn-primary" value="保存成绩"/>
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <div class="pull-right">
            <a href="{!! url('question/random') !!}" type="button" class="btn btn-outline btn-success">随机抽取</a>
        </div>
    </div>
    <!--名单显示-->

<!--/ClaaatablePage-->

</div>
@stop
