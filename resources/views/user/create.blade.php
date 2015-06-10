@extends('common.layout')

@section('content')
	<div class="row">
		<h1>ユーザー新規追加</h1>
		{!! Form::model(new App\User, ['route' => 'user.store', 'files' => true]) !!}
		@include('user._form')
		{!! Form::submit('Add user', ['class' => 'btn btn-primary form-control']) !!}
		{!! Form::close() !!}
	</div>
@stop
