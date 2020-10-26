<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'min: 7|confirmed',
            'password_confirmation' => 'min: 7',
        ];
    }

    public function messages(){
        return[
            'name.required' =>'名前は必ず入力してください',
            'password.min' => '7文字以上で入力してください',
            'password.confirmed' => 'パスワードが異なります',
            'password_confirmation.min' => '7文字以上で入力してください'
        ];
    }
}
