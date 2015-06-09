@extends('common.layout')

@section('content')
	<h1>ユーザー新規追加</h1>
	{!! Form::open() !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
	{!! Form::close() !!}
@stop
