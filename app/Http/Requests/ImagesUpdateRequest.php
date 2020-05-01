<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImagesUpdateRequest extends FormRequest
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
        $urlPage = 'http://fgi-udo.local/admin/mediasAdminFichier/*/edit';
        if (session('role') == 'respecoledoct' or url()->current() ==  $urlPage ) {
           return [
        
            'file' => 'required',

        ];
        }else{

            return [
        
            'image' => 'required|image',

        ];
        }

        
    }
}
