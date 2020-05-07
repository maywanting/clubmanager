@extends('template')
@section('content')
<div class="row">
    <div>
        <h1 class="page-header">修改教练信息</h1>
    </div>
    {!! Form::open(['url' => 'sys/coach/update/' . $data['id'], 'method' => 'post']) !!}
    <div class="row col-sm-8">
    <div class="form-group">
        <label>教练姓名</label>
        <input class="form-control input-sm" name="name" type="text" value="{{$data['name']}}"/>
    </div>
    </div>
    <div class="row col-sm-8">
    <div class="form-group">
        <label>是否出现在首页推荐</label>
        <div class="radio">
            <label>
                <input name="is_recommend" type="radio" value="1" {{ $data['is_recommended'] ? 'checked' : ''}}/>
                是
            </label>
        </div>
        <div class="radio">
            <label>
                <input name="is_recommend" type="radio" value="0" {{ $data['is_recommended'] ? '' : 'checked'}}/>
                否
            </label>
        </div>
    </div>
    </div>
    <div class="row col-sm-8">
        <div class="form-group">
            <h4>描述</h4>
            <textarea name="description" rows="6" class="form-control">{{$data['description']}}</textarea>
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