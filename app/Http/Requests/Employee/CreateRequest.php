<?php

namespace App\Http\Requests\Employee;

use App\Http\Requests\ApiRequest;

class CreateRequest extends ApiRequest
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
            'first_name' => 'bail|required|max:255',
            'last_name' => 'required|max:255',
            'employer' => 'required|max:255',
            'started_at' => 'required|date',
            'stopped_at' => 'date'
        ];
    }
}
