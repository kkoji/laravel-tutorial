<!DOCTYPE html>
<html lang="ja">
<head>
	<title>Laravel5 Sandbox</title>
	<meta charset="utf-8">
	{!! Html::style(elixir('css/all.css')) !!}
	{!! Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') !!}

	{!! Html::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
	{!! Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') !!}
</head>

<body>

@include('common.header')

<div class="container">
	@yield('content')
</div>

</body>
</html>