@extends('common.layout')

@section('content')
	<div class="row">
		<h1>ユーザー一覧</h1>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>ID</th>
				<th>名前</th>
				<th>プロフィール</th>
			</tr>
			</thead>

			<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->profile }}</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@stop
