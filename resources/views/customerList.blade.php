@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">客户列表</h1>
    </div>
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>编号</th>
                        <th>账户名</th>
                        <th>姓名</th>
                        <th>私人教练</th>
                        <th>选择课程</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                        <td>{{$customer['id']}}</td>
                        <td>{{$customer['account']}}</td>
                        <td>{{$customer['name']}}</td>
                        <td>{{$customer['coachName']}}</td>
                        <td>{{$customer['buildingClass']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop