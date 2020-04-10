<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class Step2Request extends FormRequest
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
            'service' => 'required',
            'date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'service.required' => 'Услуга не выбрана',
            'date.required' => 'Поле обязательно для заполнения',
            'date.date' => 'Поле дата содержит не корректное зачение',
        ];
    }
}
