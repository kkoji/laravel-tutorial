<html>
	<head>
		<title>Laravel</title>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		{!! Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') !!}
		{!! Html::style(elixir('css/all.css')) !!}

		{!! Html::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
		{!! Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') !!}
	</head>
	<body class="home">
	@yield('header')
	@include('common.header')

		<div class="home-container">
			<div class="home-content">
				<div class="home-title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
