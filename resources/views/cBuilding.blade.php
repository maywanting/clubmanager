@extends('tem')
@section('content')

<section style="margin-top:100px">
	<div class="container" style="padding:0 100px">
		@foreach ($buildings as $key => $building)
			<div class="row building">
				<div class="col-md-9 col-sm-9 col-xs-9">
					<p class="wow fadeInDown building-head">{{$building['name']}}</h2>
					<p class="wow fadeInDown building-desc">{{$building['description']}}</p>
					<p class="wow fadeInDown building-desc">任课教练: {{$coachSet[$building['coach_id']]}}</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					@if ($flag)
						<p>此课程目前还剩下&nbsp;<span>{{$building['res']}}</span>&nbsp;席位！</p>
						@if (in_array($building['id'], $info['builds']))
							<a class="btn btn-origin">您的课程</a>
						@elseif ($building['res'] > 0)
							<a class="btn btn-primary btn-lg" href="{!! url('building/select/' . $building['id']) !!}">预定此课程</a>
						@endif
					@endif
				</div>	
			</div>
		@endforeach
			
	</div>
</section>

<style>
	.building-head {
		font-size: 39px;
	}
	.building {
		border-bottom: 2px dotted #555;
		margin: 50px;
	}
</style>
@stop