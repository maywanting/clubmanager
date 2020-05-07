@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">课程初始信息导入</h1>
    </div>

    @foreach($datas as $num => $data)
    <div class="row">
        <div class="col-lg-4">
            <h4 class="page-header"><i class="fa fa-tasks fa-fw"></i>课程{{$num+1}} 课程名称</h4>
            <!--导入-->
            {!! Form::open(['method' => 'post', 'url' => url('class/storeName/' . $data['classId'])]) !!}
            <div class="col-lg-5">
                <input type="text" name="className" value="{{$data['name']}}" class="form-control">
            </div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-outline btn-primary btn-sm" value="保存"/>
            </div>
            {!! Form::close() !!}
            <!--导入-->
        </div>

        <div class="col-lg-4">
            <h4 class="page-header"><i class="fa fa-tasks fa-fw"></i>课程{{$num+1}} 教学计划导入</h4>
            <!--导入-->
            {!! Form::open(['method' => 'post', 'url' => url('class/import/' . $data['classId']), 'files' => 'true']) !!}
            <div class="col-lg-5">
                <input type="file" name="arrangementFile">
            </div>
            <div class="col-lg-2">
                @if($data['plan'] == false) 已上传 @endif
            </div>
            <div class="col-lg-3">
                <input type="submit" class="btn btn-outline btn-primary btn-sm" value="上传"/>
            </div>
            {!! Form::close() !!}
            <!--导入-->
        </div>

        <div class="col-lg-4">
            <h4 class="page-header"><i class="fa fa-graduation-cap fa-fw"></i>课程{{$num+1}} 学生名单导入</h4>
            <!--导入-->
            {!! Form::open(['method' => 'post', 'url' => url('student/import/' . $data['classId']), 'files' => 'true']) !!}
            <div class="col-lg-5">
                <input type="file" name="studentFile">
            </div>
            <div class="col-lg-2">
                @if($data['student'] == false) 已上传 @endif
            </div>
            <div class="col-lg-3">
                <input type="submit" class="btn btn-outline btn-primary btn-sm" value="上传"/>
            </div>
            {!! Form::close() !!}
            <!--导入-->
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-lg-4">
            <h4 class="page-header"><i class="fa fa-tasks fa-fw"></i>课程{{count($datas)+1}} 课程名称</h4>
            <!--导入-->
            {!! Form::open(['method' => 'post', 'url' => url('class/storeName/0')]) !!}
            <div class="col-lg-5">
                <input type="text" name="className" value="" class="form-control">
            </div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-outline btn-primary btn-sm" value="保存"/>
            </div>
            {!! Form::close() !!}
            <!--导入-->
        </div>

        <div class="col-lg-4">
            <h4 class="page-header"><i class="fa fa-tasks fa-fw"></i>课程{{count($datas)+1}} 教学计划导入</h4>
            <!--导入-->
            {!! Form::open(['method' => 'post', 'url' => url('class/import/0'), 'files' => 'true']) !!}
            <div class="col-lg-5">
                <input type="file" name="arrangementFile">
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-3">
                <input type="submit" class="btn btn-outline btn-primary btn-sm" value="上传"/>
            </div>
            {!! Form::close() !!}
            <!--导入-->
        </div>
        <div class="col-lg-4">
            <h4 class="page-header"><i class="fa fa-graduation-cap fa-fw"></i>课程{{count($datas) + 1}} 学生名单导入</h4>
            <!--导入-->
            {!! Form::open(['method' => 'post', 'url' => url('student/import/0'), 'files' => 'true']) !!}
            <div class="col-lg-5">
                <input type="file" name="studentFile">
            </div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-outline btn-primary btn-sm" value="上传"/>
            </div>
            {!! Form::close() !!}
            <!--导入-->
        </div>
    </div>
<!--/ClaaatablePage-->

</div>
@stop
