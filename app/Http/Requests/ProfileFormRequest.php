<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use Illuminate\Validation\Rule;

class ProfileFormRequest extends FormRequest
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
            'firstname' => ['required', 'string', 'alpha', 'max:255'],
            'lastname' => ['required', 'string', 'alpha', 'max:255'],
            'phone' => ['required', 'numeric', 'phone:AUTO,KE',
            Rule::unique('users', 'phone')->ignore($this->user()->id)],
            'profileImage'=>['image', 'max:8000'],
        ];
    }
}
