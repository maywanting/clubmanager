<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>进入课程</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}

    <!-- MetisMenu CSS -->
    {!! Html::style('vendor/metisMenu/metisMenu.min.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('css/sb-admin-2.css') !!}

    <!-- Custom Fonts -->
    {!! Html::style('vendor/font-awesome/css/font-awesome.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div>
    <h1 align="center">课堂管理系统</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">请选择课程班级</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                @foreach ($datas as $key => $data)
                                <a href="{!! url('class/selectClass/' . $data['id']) !!}" class="btn btn-lg btn-success btn-block">课程{{$key+1}} {{$data['name']}}</a>
                                @endforeach
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    {!! Html::script('vendor/jquery/jquery.min.js') !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}

    <!-- Metis Menu Plugin JavaScript -->
    {!! Html::script('vendor/metisMenu/metisMenu.min.js') !!}

    <!-- Custom Theme JavaScript -->
    {!! Html::script('js/sb-admin-2.js') !!}
</body>

</html>
