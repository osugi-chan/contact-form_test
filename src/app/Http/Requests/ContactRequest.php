<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|string|email|max:255',
            'tel1' => 'required|digits_between:1,5|numeric',
            'tel2' => 'required|digits:4|numeric',
            'tel3' => 'required|digits:4|numeric',
            'address' => 'required|string|max:255',
            'category_id' =>'required|exists:categories,id',
            'detail' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '名を入力してください',
            'last_name.required' => '姓を入力してください',

            'gender.required' => '性別を選択してください',

            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',

            'tel1.required' => '電話番号（最初の部分）を入力してください',
            'tel1.digits_between' => '電話番号（最初の部分）は1〜5桁の数字で入力してください',
            'tel1.numeric' => '電話番号（最初の部分）は数字で入力してください',

            'tel2.required' => '電話番号（中間部分）を入力してください',
            'tel2.digits' => '電話番号（中間部分）は4桁の数字で入力してください',
            'tel2.numeric' => '電話番号（中間部分）は数字で入力してください',

            'tel3.required' => '電話番号（最後の部分）を入力してください',
            'tel3.digits' => '電話番号（最後の部分）は4桁の数字で入力してください',
            'tel3.numeric' => '電話番号（最後の部分）は数字で入力してください',

            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
