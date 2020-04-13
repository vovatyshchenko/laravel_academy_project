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
            'surname' => 'required|max:100',
            'name' => 'required|max:100|min:2',
            'patronymic' => 'required|max:100',
            'b_day' => 'required|date',
            'position_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'Неверный тип файла, это не изображение',
            'image.max' => 'Размер изображения не должен превышать 2мб',
            'name.required' => 'Поле имя обязательно для заполнения',
            'name.max' => 'Поле не может содержать более 100 символов',
            'name.min'  => 'Поле имя должно содержать более 2-х символов',
            'surname.required'  => 'Поле фамилия обязательно для заполнения',
            'surname.max' => 'Поле не может содержать более 100 символов',
            'patronymic.required'  => 'Поле отчество обязательно для заполнения',
            'patronimic.max' => 'Поле не может содержать более 100 символов',
            'b_day.required'  => 'Поле дата рождения обязательно для заполнения',
            'b_day.date'  => 'Не корректное значение в поле дата',
            'position_id.required'  => 'Не выбрана специализация',
        ];
    }
}
