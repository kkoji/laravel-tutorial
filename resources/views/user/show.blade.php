@extends('common.layout')

@section('content')
	<div class="row">
		<h1>ユーザー情報閲覧</h1>
		<table class="table table-bordered">
			<tbody>
			<tr>
				<th>ID</th>
				<td>{{ $user->id }}</td>
			</tr>
			<tr>
				<th>写真</th>
				<td>
					@if (!empty($user->photo_name))
						{!! Html::image("photo/{$user->photo_name}", $user->name, ['width' => '100px']) !!}
					@endif
				</td>
			</tr>
			<tr>
				<th>名前</th>
				<td>{{ $user->name }}</td>
			</tr>
			<tr>
				<th>プロフィール</th>
				<td>{{ $user->profile }}</td>
			</tr>
			</tbody>
		</table>
	</div>
@stop
