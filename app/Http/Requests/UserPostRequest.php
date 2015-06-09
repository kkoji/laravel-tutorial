<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserPostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|max:30',
			'profile' => 'required|max:500',
		];
	}

	/**
	 * バリデーションエラーメッセージを返却
	 * @return array
	 */
	public function messages()
	{
		return [
			'name.required'    => '名前は必須です。',
			'name.max'         => '名前は30字以内で入力して下さい。',
			'profile.required' => 'プロフィールは必須です。',
			'profile.max'      => 'プロフィールは500字以内で入力して下さい。',
		];
	}

}
