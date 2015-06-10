<div class="form-group">
	{!! Form::label('photo', 'Photo:', ['class' => 'control-label']) !!}
	@if (!empty($user->photo_name))
		<br />
		{!! Html::image("photo/{$user->photo_name}", $user->name, ['width' => '100px']) !!}
	@endif
	{!! Form::file('photo', null, ['class' => 'form-control']) !!}
</div>

@if($errors->has('name'))<div class="form-group has-error">@endif
	<div class="form-group">
		{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) !!}
		<label class="control-label">{{ $errors->first('name') }}</label>
	</div>
@if($errors->has('name'))</div>@endif

@if($errors->has('profile'))<div class="form-group has-error">@endif
	<div class="form-group">
		{!! Form::label('profile', 'Profile:', ['class' => 'control-label']) !!}
		{!! Form::textarea('profile', null, ['class' => 'form-control', 'placeholder' => 'Enter profile']) !!}
		<label class="control-label">{{ $errors->first('profile') }}</label>
	</div>
@if($errors->has('profile'))</div>@endif

