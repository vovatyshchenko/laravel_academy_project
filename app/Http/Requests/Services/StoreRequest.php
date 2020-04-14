<?php

namespace App\Http\Requests\Services;

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
            'name' => 'required|max:100|min:2',
            'price' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательно для заполнения',
            'name.max' => 'Поле не может содержать более 100 символов',
            'name.min'  => 'Поле должно содержать более 2-х символов',
            'price.required'  => 'Поле обязательно для заполнения',
            'price.numeric'  => 'Поле должно содержать только цифры',
        ];
    }
}
