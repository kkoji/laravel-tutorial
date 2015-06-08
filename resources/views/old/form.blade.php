
<form action="/old" method="post">
	<label for="old">年齢を入力してください</label>
	<input type="text" name="age">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="実行">
</form>
