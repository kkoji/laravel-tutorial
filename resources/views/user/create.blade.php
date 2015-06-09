@extends('common.layout')

@section('content')
	<h1>ユーザー新規追加</h1>
	{!! Form::model(new App\User, ['route' => 'user.store']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('profile', 'Profile:') !!}
			{!! Form::textarea('profile', null, ['class' => 'form-control', 'placeholder' => 'Enter profile']) !!}
		</div>
		{!! Form::submit('Add user', ['class' => 'btn btn-primary form-control']) !!}
	{!! Form::close() !!}
@stop
