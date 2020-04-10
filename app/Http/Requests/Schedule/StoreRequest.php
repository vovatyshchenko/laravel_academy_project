<?php

namespace App\Http\Requests\Schedule;

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
            'master_id' => 'required',
            'date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'master_id.required' => 'Не выбрано имя работника',
            'date.required'  => 'Поле дата обязательно для заполнения',
            'date.date'  => 'Поле дата содержит не корректное зачение',
        ];
    }
}
