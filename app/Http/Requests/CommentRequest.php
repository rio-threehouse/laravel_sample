<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'tag' => ['nullable', 'string', 'max:50'],
            'comment' => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'comment.required'  => 'コメントを入力してください',
            'tag.max'  => 'タグ名が50文字以上です',
            'name.max' => '名前が50文字以上です',
            'comment.max'  => 'コメントが255文字以上です',
        ];
    }
}
