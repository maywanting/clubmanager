@extends('template')
@section('content')
<div class="row">
    <div>
        <h1 class="page-header">新增教练</h1>
    </div>
    {!! Form::open(['url' => 'sys/coach/store/', 'method' => 'post']) !!}
    <div class="row col-sm-8">
    <div class="form-group">
        <label>教练姓名</label>
        <input class="form-control input-sm" name="name" type="text" />
    </div>
    </div>
    <div class="row col-sm-8">
    <div class="form-group">
        <label>是否出现在首页推荐</label>
        <div class="radio">
            <label>
                <input name="is_recommend" type="radio" value="1"/>
                是
            </label>
        </div>
        <div class="radio">
            <label>
                <input name="is_recommend" type="radio" value="0"/>
                否
            </label>
        </div>
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