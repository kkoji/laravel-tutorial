<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

class UserController extends Controller {

	public function __construct()
	{
		// コントローラ単位でミドルウェアを指定できる
		// $this->middleware('auth');

		// 特定のアクションのみ
		// $this->middleware('log', ['only' => ['showProfile']]);

		// 特定のアクションを除外
		// $this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
	}

	/**
	 * ユーザー一覧表示
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('user.index', ['users' => User::all()]);
	}

	/**
	 * 指定されたユーザーのプロファイルを表示
	 * @param $id
	 * @return \Illuminate\View\View
	 */
	public function getProfile(Request $request, $id = null)
	{
		// タイプヒントによりRequestオブジェクトを取得
		$name = $request->input('name', 'unknown');
		// 全てのリクエストパラメータを取得
		$request->all();
		if ($request->has('name')) {
			//echo 'nameが渡されてました';
		} else {
			//echo 'nameが渡されていません';

		}
		// アクションのURLを取得
		// $url = action('UserController@showProfile');
		// URL::setRootControllerNamespace('App\Http\Controllers');
		// $url = action('UserController@showProfile');
		// $action = Route::currentRouteAction();


		return view('user.profile', ['user' => User::findOrFail($id)]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
