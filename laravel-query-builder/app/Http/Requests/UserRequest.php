<?php

namespace App\Http\Requests;

use App\Rules\uppercase;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\PseudoTypes\True_;

class UserRequest extends FormRequest
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

            'name' => ['required',new uppercase],
            'age' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
            'city' => 'required',

        ];
    }


    public function messages()
    {

        return
            [
                'name.required' => 'User Name is required',
                'age.required' => 'User Age is required',
                'age.numeric' => 'User Age must be numeric',
            ];
    }

    public function attributes()
    {
        return [

            'name' => 'User Name',
            'age' => 'User Age',
            'email' => 'User Email',
            'password' => 'User Password',
            'city' => 'User City',

        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
          'name' => strtoupper($this->name),
           'name' => str::slug($this->name),
        ]);
    }

    protected $stopOnFirstFailure = false ;
}
