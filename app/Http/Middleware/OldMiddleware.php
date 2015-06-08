<?php namespace App\Http\Middleware;

use Closure;

class OldMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// リクエスト前処理
		if ($request->input('age') < 200)
		{
			return redirect('home');
		}

		// リクエスト処理
		$response = $next($request);

		// リクエスト後処理
		// 実行コード

		// 処理結果を返却
		return $response;
	}

}
