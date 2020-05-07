@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">教学课件管理</h1>
    </div>
    <!--上传下载1-->
    @foreach ($classes as $key => $class)
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-desktop fa-fw"></i> 课程{{$key+1}} {{$class->name}}
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="fa fa-file-powerpoint-o fa-fw"></i>文件名</th>
                                <th><i class="fa fa-cloud-download fa-fw"></i>下载</th>
                                <th><i class="fa fa-trash-o fa-fw"></i>删除</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($coursewares[$class->id]))
                                @foreach($coursewares[$class->id] as $k => $courseware)
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$courseware->file_name}}</td>
                                        <td><a href="{!! url('courseware/download/' . $courseware->id) !!}" class="btn btn-outline btn-primary btn-sm">下载</a></td>
                                        <td><a href="{!! url('courseware/delete/' . $courseware->id) !!}" class="btn btn-outline btn-primary btn-sm">删除</a></td>
                                    </tr>
                                @endforeach
                            @endif
                            <!--上传，自增行-->
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                {!! Form::open(['url' => url('courseware/upload/' . $class->id), 'method' => 'post', 'files' => 'true']) !!}
                <div class="col-lg-6">
                    <input type="file" name="file">
                </div>
                <div class="col-lg-5">
                    <input type="submit" class="btn btn-outline btn-primary btn-sm" value="上传">
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!--/上传下载1-->
    @endforeach
<!--/ClaaatablePage-->
</div>
@stop
