<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonnelCreateRequest extends Request
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

            'nomPers' => 'required|max:45',
            'prenomPers' => 'max:45',
            'image' => 'image',

        ];
    }
}
