<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampusIdentityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'campus_name'=>'required|string',
            'abbreviated_name' => 'required|string',
            'campus_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'campus_email' =>'required|email',
            'campus_telephone' => 'required|numeric',
            'address' => 'required|string',
            'campus_twitter',
            'campus_instagram',
            'campus_linkedin',
            'campus_youtube',
        ];
    }
}
