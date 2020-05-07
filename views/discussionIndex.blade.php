@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">课题讨论{{$id}}</h1>
    </div>
    <!--讨论课题编辑 显示-->
    {!! Form::open(['url' => 'discussion/storeContent/' . $id, 'method' => 'post']) !!}
    <div class="form-group">
        <h4><i class="fa fa-inbox fa-fw"></i>本次讨论内容</h4>
        <textarea name="content" class="form-control" rows="6">@if(!is_null($discussion)) {{$discussion->content}} @endif</textarea>
    </div>
    <div class="pull-right">
            <input type="submit" class="btn btn-outline btn-primary" value="保存"/>
    </div>
    {!! Form::close() !!}
    <!--/讨论课题编辑 显示-->
    <!--学生分组选项-->
    @if(is_null($discussion) || is_null($discussion->group_type))
    <div class="form-group">
        <h4><i class="fa fa-comments fa-fw"></i>学生分组选项</h4>
        {!! Form::open(['url' => 'discussion/selectGroup/1/' . $id, 'method' => 'post']) !!}
        <div class="col-lg-3">
        <input class="form-control input-sm" name="number" id="btn-input" type="text" placeholder="请输入每组人数...">
        </div>
        <div class="col-lg-1">
        <input class="btn btn-outline btn-primary btn-sm" type="submit" value="随机分组">
        </div>
        {!! Form::close() !!}
        <div class="col-lg-1">
        <a class="btn btn-outline btn-primary btn-sm" href="{!! url('discussion/selfGroup/' . $id) !!}">自主分组</a>
        </div>
    </div>
    @endif
    <!--/学生分组选项-->

    @if (isset($groups) && $discussion->group_type == 1)
    <!--随机分组div-->
    <div class="col-lg-12" id="random_group">
        {!! Form::open(['url' => 'discussion/storeGrade/' . $id, 'method' => 'post']) !!}
        @foreach ($groups as $key => $group)
            <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                第{{$key}}组
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
                                    <th>成绩</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($group as $student)
                                <tr>
                                    <td>@if($student['is_leader']) 组长 @else 组员 @endif</td>
                                    <td>{{$student['student_number']}}</td>
                                    <td>{{$student['student_name']}}</td>
                                    <td><input class="form-control" name="{{$student['discussionStudentId']}}" value="{{$student['grade']}}"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            <!-- /.panel-body -->
            </div>

            <!-- /.panel -->
            </div>
        @endforeach
        <!--保存分组情况 保存展示成绩-->
        <div class="col-lg-12">
            <input type="submit" class="btn btn-outline btn-primary" value="保存成绩">
        </div>
        {!! Form::close() !!}
        <!--/保存分组情况 存展示成绩-->
    </div>
@endif
    <!--/随机分组-->
    @if (isset($groups) && $discussion->group_type == 2)
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-th fa-fw"></i>自主分组
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            {!! Form::open(['url' => url('discussion/selfGroup/store/' . $id), 'method' => 'post']) !!}
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row"><div class="col-sm-12"><table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 168px;">学号</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 206px;">姓名</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 188px;">组号</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 148px;">成绩</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($groups as $student)
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">{{$student['student_number']}}</td>
                        <td>{{$student['student_name']}}</td>
                        <td>
                            @if (is_null($student['teamId']))
                                <input class="form-control" name="teamId[{{$student['student_id']}}]">
                            @else
                                {{$student['teamId']}}
                            @endif
                        </td>
                        <td> <input class="form-control" name="grade[{{$student['student_id']}}]" value="{{$student['grade']}}"> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table></div></div></div>
                <div class="col-lg-12">
                    <input type="submit" class="btn btn-outline btn-primary" value="保存">
                </div>
                {!! Form::close() !!}
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>

    </div>
    @endif
<!--/ClaaatablePage-->

</div>
@stop

@section('footer')

<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>
@stop
