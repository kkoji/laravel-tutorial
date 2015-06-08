<?php

// Welcomeコントローラ indexアクションへのルート
Route::get('/', 'WelcomeController@index');

// クロージャーへのルーティング
Route::get('hello', function() {
	return 'Hello World!!';
});

// 複数のHTTPメソッドに対応したルーティング
Route::match(['get', 'post'], 'multi', function() {
	return 'このURLはget, postに対応しています。';
});

// 全てのHTTPメソッドに対応したルーティング
Route::any('any', function() {
	return 'このURLは全てのHTTPメソッドに対応しています。';
});

// オプションパラメータ付きルート
Route::get('product/{id?}', function($id = null) {
	return $id;
});

// whereメソッドの正規表現にマッチするルートのみがルーティングされる
Route::get('name/{name}', function($name)
{
	return $name;
})
	->where('name', '[A-Za-z]+');

// 複数のパラメータを正規表現でチェック
Route::get('user/{id}/{name}', function($id, $name)
{
	return "id:{$id} name:{$name}";
})
	->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// ルートに名前を付ける
Route::get('route/name', ['as' => 'profile', function() {
	return route('profile');
}]);

// ルートのプレフィックスでグルーピング
Route::group(['prefix' => 'user'], function() {
	// パラメータ付きルート user/{id}
	Route::get('{id}', function($id) {
		return $id;
	});
});

// プレフィックスのあとにパラメータを付けたパターン
Route::group(['prefix' => 'accounts/{account_id}'], function() {
	// ルート accounts/{account_id}/detail
	Route::get('detail', function($account_id) {
		return $account_id;
	});
});

Route::get('sample/index', 'SampleController@index');
Route::get('sample/csrf', 'SampleController@csrf');
