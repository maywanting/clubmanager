@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">课程信息导出及归档</h1>
    </div>
    @foreach ($classes as $key => $class)
    <div class="col-lg-12">
        <h4 class="page-header"><i class="fa fa-file-excel-o fa-fw"></i>课程{{$key+1}} {{$class->name}}</h4>
        <!--导出-->
        <td><a href="{!! url('class/exportInfo/' . $class->id) !!}" type="button" class="btn btn-outline btn-primary btn-sm">导出</a></td>
        <!--导出-->
    </div>
    @endforeach
    <div class="pull-right">
        <h4 class="page-header"><i class="fa fa-exclamation-circle fa-fw"></i>清空所有数据</h4>
        <a href="{!! url('class/clear') !!}" class="btn btn-outline btn-danger" type="button">清空</a>
    </div>
<!--/ClaaatablePage-->

</div>
@stop
