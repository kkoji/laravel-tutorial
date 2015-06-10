<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

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
	 *
	 * @param Requests\UserPostRequest $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(Requests\UserPostRequest $request)
	{
		$input = $request->all();

		if ($request->hasFile('photo'))
		{
			$photo = $request->file('photo');
			$file_name = str_random('32').'.'.$photo->getClientOriginalExtension();

			$input += ['photo_name' => $file_name];
			$photo->move('photo', $file_name);
		}

		User::create($input);

		return redirect('user');
	}

	/**
	 * ユーザー情報閲覧
	 *
	 * @param User $user
	 * @return \Illuminate\View\View
	 */
	public function show(User $user)
	{
		return view('user.show', compact('user'));
	}

	/**
	 * ユーザー情報編集フォーム
	 *
	 * @param User $user
	 * @return \Illuminate\View\View
	 */
	public function edit(User $user)
	{
		return view('user.edit', compact('user'));
	}

	/**
	 * ユーザー情報を更新
	 *
	 * @param Request $request
	 * @param User $user
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function update(User $user, Request $request)
	{
		$input = $request->except(['_method', '_token']);
		$user->update($input);

		return redirect('user');
	}

	/**
	 * ユーザー削除処理
	 *
	 * @param User $user
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @throws \Exception
	 */
	public function destroy(User $user)
	{
		$user->delete();

		return redirect('user');
	}

}
