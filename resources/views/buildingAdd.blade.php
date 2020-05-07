@extends('template')
@section('content')
<div class="row">
    <div>
        <h1 class="page-header">新增课程</h1>
    </div>
    {!! Form::open(['url' => 'sys/building/store/', 'method' => 'post']) !!}
    <div class="row col-sm-8">
    <div class="form-group">
        <label>课程名字</label>
        <input class="form-control input-sm" name="name" type="text" />
    </div>
    <div class="form-group">
        <label>参加人数</label>
        <input class="form-control input-sm" name="seat_num" type="text" />
    </div>
    </div>
    <div class="row col-sm-8">
    <div class="form-group">
        <label>负责教练</label>
        @foreach ($coaches as $key => $coach)
        <div class="radio">
            <label>
                <input name="coach_id" type="radio" value="{{$coach['id']}}"/>
                {{$coach['name']}}
            </label>
        </div>
        @endforeach
        
    </div>
    </div>
    <div class="row col-sm-8">
        <div class="form-group">
            <h4>描述</h4>
            <textarea name="description" rows="6" class="form-control"></textarea>
        </div>
    </div>
    <div class="row col-sm-8">
    <div class="form-group">
        <input type="submit" class="btn btn-outline btn-primary" value="保存" />
    </div>
    </div>

    {!! Form::close() !!}
</div>
@stop