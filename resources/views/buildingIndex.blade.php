@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">课程列表</h1>
    </div>
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>编号</th>
                        <th>课程名</th>
                        <th>负责教练</th>
                        <th>最大人数</th>
                        <th>已选人数</th>
                        <th>描述</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $key => $data)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$data['name']}}</td>
                            <td>{{$coachSet[$data['coach_id']]}}</td>
                            <td>{{$data['seat_num']}}</td>
                            <td>{{$data['selected']}}</td>
                            <td>{{$data['description']}}</td>
                            <td>
                                <a href="{!! url('sys/building/edit/' . $data['id']) !!}"><i class="fa fa-edit fa-fw"></i></a>
                                <a href="{!! url('sys/building/delete/' . $data['id']) !!}"><i class="fa fa-remove fa-fw"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop