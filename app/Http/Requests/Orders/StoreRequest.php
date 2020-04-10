<?php

namespace App\Http\Requests\Orders;

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
            'name' => 'required|string|min:2',
            'tel' => 'required|numeric',
            'master' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательно для заполнения',
            'name.min'  => 'Поле должно содержать более 2-х символов',
            'tel.required' => 'Поле обязательно для заполнения',
            'tel.numeric' => 'Некорректное значение',
            'master.required' => 'Выберите мастера',
        ];
    }
}
