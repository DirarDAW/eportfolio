<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Enums\EstadoValidacion;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'estudiante_id' => ['required', 'integer', 'min:1'],
            'tarea_id' => ['required', 'integer', 'min:1'],
            'url' => ['required', 'string', 'max:2048'],
            'descripcion' => ['required', 'string'],
            'estado' => ['required', 'string', Rule::enum(EstadoValidacion::class)],
        ];
    }

    public function messages(): array
    {
        return [
            'estudiante_id.required' => 'El campo estudiante_id es obligatorio.',
            'tarea_id.required' => 'El campo tarea_id es obligatorio.',
            'url.required' => 'La dirección de la evidencia no es una URL válida.',
            'descripcion.required' => 'El campo descripcion es obligatorio.',
            'estado.required' => 'El campo estado es obligatorio.',
        ];
    }
}
