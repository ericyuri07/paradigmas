<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max500',
            'vacancies' => 'required|numeric|min:1|max:500'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser um texto.',
            'name.min' => 'O nome deve ter no mínimo :min caracteres.',
            'name.max' => 'O nome deve ter no máximo :max caracteres.',

            'vacancies.required' => 'O campo vagas é obrigatório.',
            'vacancies.numeric' => 'O campo vagas deve ser um número.',
            'vacancies.min' => 'Deve haver no mínimo :min vaga.',
            'vacancies.max' => 'O número de vagas não pode ser maior que :max.',
        ];
    }
}
