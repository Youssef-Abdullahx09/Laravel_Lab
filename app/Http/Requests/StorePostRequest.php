<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "title" => "required|min:3|unique:App\Models\Post,title",
            "description" => "required|min:10",
            "posted_by" => "required|exists:App\Models\User,id"
        ];
    }
    public function messages(): array
    {
        return [
            "title" => [
                "required" => "Title Is Required....",
                "min" => "Title Needs Not To Be Less Than 3 Characters",
                "unique" => "Title Must Be Unique One"
            ],
            "description" => [
                "required" => "Description Is Required....",
                "min" => "Description Needs Not To Be Less Than 3 Characters",
            ]
        ];
    }
}
