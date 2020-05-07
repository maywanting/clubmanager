<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>首页</title>
<!-- core CSS -->
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('css/font-awesome.min.css') !!}
{!! Html::style('css/animate.min.css') !!}
{!! Html::style('css/prettyPhoto.css') !!}
{!! Html::style('css/styles.css') !!}

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->       

{!! Html::image("images/ico/favicon.ico", "icon") !!}
</head> 

<body id="home">
<header id="header">
	<nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><img src="images/logo5.png" alt="logo"></a>
			</div>
			
			<div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li class="scroll @if($info['menu'] == 'index') active @endif"><a href="{!! url('/') !!}">首页</a></li>  
					<li class="scroll @if($info['menu'] == 'coach') active @endif"><a href="{!! url('coach') !!}">教练团队</a></li>
					<li class="scroll @if($info['menu'] == 'building') active @endif"><a href="{!! url('building') !!}">健身课程</a></li> 
					@if ($info['login'])
					<li class="scroll"><a href="#">欢迎！{{$info['name']}}</a></li>  
					<li class="scroll"><a href="{!! url('logout') !!}">退出登录</a></li>
					@else
					<li class="scroll"><a href="{!! url('login') !!}">登录</a></li>
					@endif                        
				</ul>
			</div>
		</div><!--/.container-->
	</nav><!--/nav-->
</header><!--/header-->

@yield('content')

@if(isset($info['is_alert'])) 
<script>
	alert("{{$info['content']}}");
</script>
@endif

<!--/#bottom-->

<!--/#footer-->
{!! Html::script('js/jquery.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/mousescroll.js') !!}
{!! Html::script('js/smoothscroll.js') !!}
{!! Html::script('js/jquery.prettyPhoto.js') !!}
{!! Html::script('js/jquery.isotope.min.js') !!}
{!! Html::script('js/jquery.inview.min.js') !!}
{!! Html::script('js/wow.min.js') !!}
{!! Html::script('js/custom-scripts.js') !!}
</body>
</html>