<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWork extends FormRequest
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
            'title' => ['required','string'],
            'description' => ['nullable','string','unique:technologies,key'],
            'work_image_file' => ['nullable'],
            'link' => ['nullable','string'],
            'github_link' => ['nullable','string'],
            'comment' => ['nullable','string'],
            'technologies' => ['nullable','string'],
        ];
    }
}
