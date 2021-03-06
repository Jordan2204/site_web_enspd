<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DossierCreateRequest extends FormRequest
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
            'nomDOC' => 'required',
            'numBCA'  => 'required|unique:dossiers',
            'etape' => 'max:4',
            'date_intr'  => 'required'

        ];
    }
}
