@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">课题讨论成绩</h1>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row"><div class="col-sm-12"><table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example3" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="StuNumber: activate to sort column descending" style="width: 100px;">学号</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="StuName: activate to sort column ascending" style="width: 100px;">姓名</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Topic1: activate to sort column ascending" style="width: 100px;">课题讨论1</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Topic2: activate to sort column ascending" style="width: 100px;">课题讨论2</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Topic3: activate to sort column ascending" style="width: 100px;">课题讨论3</th>
                                   <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Topic4: activate to sort column ascending" style="width: 100px;">课题讨论4</th>
                                   <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Topic5: activate to sort column ascending" style="width: 100px;">课题讨论5</th>
                                   <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Topic6: activate to sort column ascending" style="width: 100px;">课题讨论6</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($studentLists as $student)
                                <tr class="gradeA odd" role="row">
                                        <td class="sorting_1">{{$student->student_number}}</td>
                                        <td>{{$student->name}}</td>
                                        <td class="center">@if(!isset($student->discussions[0])) 无 @else {{$student->discussions[0]->grade}} @endif</td>
                                        <td class="center">@if(!isset($student->discussions[1])) 无 @else {{$student->discussions[1]->grade}} @endif</td>
                                        <td class="center">@if(!isset($student->discussions[2])) 无 @else {{$student->discussions[2]->grade}} @endif</td>
                                        <td class="center">@if(!isset($student->discussions[3])) 无 @else {{$student->discussions[3]->grade}} @endif</td>
                                        <td class="center">@if(!isset($student->discussions[4])) 无 @else {{$student->discussions[4]->grade}} @endif</td>
                                        <td class="center">@if(!isset($student->discussions[5])) 无 @else {{$student->discussions[5]->grade}} @endif</td>
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
    $('#dataTables-example3').DataTable({
        responsive: true
    });
});
</script>
@stop
