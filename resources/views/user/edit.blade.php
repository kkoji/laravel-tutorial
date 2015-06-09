@extends('common.layout')

@section('content')
	<h1>ユーザー情報編集</h1>
	{!! Form::model($user, ['method' => 'PUT', 'route' => ['user.update', $user]]) !!}
	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('profile', 'Profile:') !!}
		{!! Form::textarea('profile', null, ['class' => 'form-control', 'placeholder' => 'Enter profile']) !!}
	</div>
	{!! Form::submit('Update user', ['class' => 'btn btn-primary form-control']) !!}
	{!! Form::close() !!}
@stop
