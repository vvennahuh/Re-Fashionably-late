<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // 認証を許可
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255', // 名前
            'email' => 'required|email', // メールアドレス
            'password' => 'required|string|min:8|max:255', // パスワード
        ];
    }

    /**
     * Get custom attribute names for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'お名前は入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスは「ユーザー@ドメイン」形式で入力してください。',
            'password.required' => 'パスワードを入力してください。',
        ];
    }
}
