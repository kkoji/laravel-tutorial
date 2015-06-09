@extends('common.layout')

@section('content')
	<div class="row">
		<h1>ユーザープロフィール</h1>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>ID</th>
				<th>名前</th>
				<th>プロフィール</th>
			</tr>
			</thead>

			<tbody>
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->profile }}</td>
			</tr>
			</tbody>
		</table>
	</div>
@stop
