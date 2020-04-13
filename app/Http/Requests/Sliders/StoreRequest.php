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
            'title' => 'required|max:150',
            'text' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'Неверный тип файла, это не изображение',
            'image.max' => 'Размер изображения не должен превышать 2мб',
            'title.required' => 'Поле обязательно для заполнения',
            'title.max' => 'Поле не может содержать более 150 символов',
            'text.required'  => 'Поле обязательно для заполнения',
            'text.max'  => 'Поле не может содержать более 255 символов',
        ];
    }
}
