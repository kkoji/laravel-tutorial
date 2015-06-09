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
	 * ユーザー新規作成フォーム
	 *
	 */
	public function create()
	{
		return view('user.create');
	}


	/**
	 * ユーザー作成処理
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(Request $request)
	{
		User::create($request->all());

		return redirect('user');
	}

	/**
	 * ユーザー情報閲覧
	 * @param $id
	 * @return \Illuminate\View\View
	 */
	public function show($id)
	{
		return view('user.show', ['user' => User::find($id)]);
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
