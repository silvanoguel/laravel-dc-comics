<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|min:4|max:100',
            'description'=> 'nullable',
            'thumb' => 'nullable',
            'price'=> 'required',
            'series'=> 'required',
            'sale_date'=> 'nullable',
            'type'=> 'required',
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'Il campo "Title" è richiesto e deve essere lungo almeno 4 caratteri',
            'title.min' => 'Il campo "Title" deve essere lungo almeno 4 caratteri',
            'title.max' => 'Il campo "Title" non deve superare 100 caratteri',
            'price.required' => 'il campo "Price" è richiesto',
            'series.required' => 'il campo "Series" è richiesto',
        ];
    }
}
