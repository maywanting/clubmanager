@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">教练列表</h1>
    </div>
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>编号</th>
                        <th>姓名</th>
                        <th>首页推荐</th>
                        <th>描述</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $data)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$data['name']}}</td>
                        <td>{{$data['is_recommended'] ? "是" : "否" }}</td>
                        <td>{{$data['description']}}</td>
                        <td>
                            <a href="{!! url('sys/coach/edit/' . $data['id']) !!}"><i class="fa fa-edit fa-fw"></i></a>
                            <a href="{!! url('sys/coach/delete/' . $data['id']) !!}"><i class="fa fa-remove fa-fw"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop