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
				<th>メニュー</th>
			</tr>
			</thead>

			<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->profile }}</td>
				<td>
					{!! link_to_route('user.show', 'Show', $user, ['class' => 'btn btn-primary']) !!}
					{!! link_to_route('user.edit', 'Edit', $user, ['class' => 'btn btn-primary']) !!}
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@stop
