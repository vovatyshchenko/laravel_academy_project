<?php

namespace App\Http\Requests\Sliders;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'image' => 'image|max:2048',
            'title' => 'required',
            'text' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'Неверный тип файла, это не изображение',
            'image.max' => 'Размер изображения не должен превышать 2мб',
            'title.required' => 'Поле обязательно для заполнения',
            'text.required'  => 'Поле обязательно для заполнения',
        ];
    }
}
