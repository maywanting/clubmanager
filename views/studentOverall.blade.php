@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">学生综合成绩</h1>
    </div>
    <!--搜索及学生详细成绩显示-->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-th fa-fw"></i>所有学生详细情况
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row"><div class="col-sm-12"><table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 168px;">学号</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 206px;">姓名</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 188px;">缺勤次数</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 148px;">问答成绩</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">讨论综合成绩</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">{{$data['student_number']}}</td>
                        <td>{{$data['name']}}</td>
                        <td>{{$data['absent']}}</td>
                        <td class="center">{{$data['question']}}</td>
                        <td class="center">{{$data['discussion']}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table></div></div></div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!--搜索及学生详细成绩显示-->

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
