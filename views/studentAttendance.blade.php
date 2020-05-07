@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">学生出勤情况</h1>
    </div>
    <!--搜索及学生详细成绩显示-->
    <div class="col-lg-12">
        <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row"><div class="col-sm-12"><table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="StuNumber: activate to sort column descending" style="width: 100px;">学号</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="StuName: activate to sort column ascending" style="width: 100px;">姓名</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Absence(s): activate to sort column ascending" style="width: 100px;">缺勤次数</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="AttScore: activate to sort column ascending" style="width: 100px;">出勤分</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($studentLists as $student)
                <tr class="gradeA odd" role="row">
                        <td class="sorting_1">{{$student->student_number}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->absent->count()}}</td>
                        <td>0</td>
                    </tr>
                @endforeach
                </tbody>
            </table></div></div></div>
            <!-- /.table-responsive -->
        </div>
    </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
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
