<?php

namespace App\Http\Requests\Masters;

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
            'surname' => 'required|string',
            'name' => 'required|string|min:2',
            'patronymic' => 'required|string',
            'b_day' => 'required|date',
            'position_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя обязательно для заполнения',
            'name.min'  => 'Поле имя должно содержать более 2-х символов',
            'surname.required'  => 'Поле фамилия обязательно для заполнения',
            'patronymic.required'  => 'Поле отчество обязательно для заполнения',
            'b_day.required'  => 'Поле дата рождения обязательно для заполнения',
            'b_day.date'  => 'Не корректное значение в поле дата',
            'position_id.required'  => 'Не выбрана специализация',
        ];
    }
}
