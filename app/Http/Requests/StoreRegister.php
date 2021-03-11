<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegister extends FormRequest
{
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
            //
          'name'=>'required',
          'email'=>'required|email',
          'password'=>'required|min:7',
          'password-confirm'=>'required|same:password',
        ];
    }
    public function messages()
    {
      return[
        'name.required'=>'名前は必須です。',
        'email.required'=>'メールアドレスは必須です。',
        'password.required'=>'パスワードは必須です。',
        'password.min'=>'パスワードは７文字以上でお願いします。',
        'password-confirm.same'=>'パスワードが異なっています。',
      ];
    }
}