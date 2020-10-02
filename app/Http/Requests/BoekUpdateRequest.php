<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoekUpdateRequest extends FormRequest
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
        $boek = $this->route('boek');
        return [
            'name' => 'required|string|max:100|unique:boeks,name'.$boek->id,
            'description' => 'required',
            'pagina' => 'required|numeric|max:999'
        ];
    }
}
