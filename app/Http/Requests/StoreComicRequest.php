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
            'title' => 'required|min:5',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|min:2',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
           'title.required' => 'Devi inserire il titolo',
           'description.required' => 'Devi inserire la descrizione',
           'thumb.required' => 'Devi inserire l\'immagine',
           'price.required' => 'Devi inserire il prezzo',
           'series.required' => 'Devi inserire la serie',
           'sale_date.required' => 'Devi inserire la data di uscita',
           'type.required' => 'Devi inserire il tipo',
        ];
    }
}
