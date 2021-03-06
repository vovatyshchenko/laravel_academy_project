<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'tel' => 'required|numeric',
            'master_id' => 'integer',
            'service' => 'required',
            'date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательно для заполнения',
            'name.max' => 'Поле не может содержать более 100 символов',
            'name.min'  => 'Поле должно содержать более 2-х символов',
            'tel.required' => 'Поле обязательно для заполнения',
            'tel.numeric' => 'Поле дата содержит не корректное зачение',
            'master_id.integer' => 'Выберите мастера',
            'service.required' => 'Услуга не выбрана',
            'date.required' => 'Поле обязательно для заполнения',
            'date.date' => 'Поле дата содержит не корректное зачение',
        ];
    }
}
