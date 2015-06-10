@extends('common.layout')

@section('content')
	<div class="row">
		<h1>ユーザー情報編集</h1>
		{!! Form::model($user, ['method' => 'PUT', 'route' => ['user.update', $user]]) !!}
		@include('user._form')
		{!! Form::submit('Update user', ['class' => 'btn btn-primary form-control']) !!}
		{!! Form::close() !!}
	</div>
@stop
