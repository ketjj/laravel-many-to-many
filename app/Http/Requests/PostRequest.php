<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:10',
            'image' => 'required|min:10',
            'author' => 'required|min:3|max:255',
        ];
    }

    public function messages(){
        return[
          'title.required' => 'Il campo titolo è obbligatorio',
          'title.min' => 'Debba inserire min 3 caratteri',
          'title.min' => 'Debba inserire max 255 caratteri',
          'content.required' => 'Il campo content è obbligatorio',
          'content.min' => 'Debba inserire min 10 caratteri',
          'image.required' => 'Il campo image è obbligatorio',
          'image.min' => 'Debba inserire min 10 caratteri',
          'author.required' => 'Il campo author è obbligatorio',
          'author.min' => 'Debba inserire min 3 caratteri',
          'author.min' => 'Debba inserire max 255 caratteri'
        ];
    }
}
