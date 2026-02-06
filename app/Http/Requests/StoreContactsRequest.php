<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactsRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'number'  => 'required',
            'course'  => 'nullable|string|max:255',
            'subject' => 'required|string',
            'message' => 'required|string|max:1000'
        ];
    }

    public function wantsJson()
    {
        return true;
    }
}
