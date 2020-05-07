@extends('tem')
@section('content')

<section style="margin-top:100px">
	<div class="container" style="padding:0 100px">
		@foreach ($coaches as $key => $coach)
			<div class="row coach">
				<div class="col-md-9 col-sm-9 col-xs-9">
					<p class="wow fadeInDown coach-head">{{$coach['name']}}</h2>
					<p class="wow fadeInDown coach-desc">{{$coach['description']}}</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					@if ($flag)
						@if ($info['coach'] == 0)
							<a class="btn btn-primary btn-lg" href="{!! url('coach/select/' . $coach['id']) !!}">选为私人教练</a>
						@elseif ($info['coach'] == $coach['id'])
							<span class="btn btn-primary">您的私人教练</span>
						@endif
					@endif
				</div>	
			</div>
		@endforeach
			
	</div>
</section>

<style>
	.coach-head {
		font-size: 39px;
	}
	.coach {
		border-bottom: 2px dotted #555;
		margin: 50px;
	}
</style>
@stop