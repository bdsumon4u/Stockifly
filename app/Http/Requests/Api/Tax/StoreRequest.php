<?php

namespace App\Http\Requests\Api\Tax;

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

        $rules = [
            'name'    => 'required',
            'tax_type'    => 'required',
            'rate'    => 'required|numeric|between:0,100',
        ];

        if($this->tax_type == 'multiple') {
            $rules['multiple_taxes'] = 'required|min:1';
        }

        return $rules;

    }

}
