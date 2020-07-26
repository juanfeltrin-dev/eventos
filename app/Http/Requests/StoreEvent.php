<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvent extends FormRequest
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
            'name'              => 'required|string|max:255',
            'date'              => 'required|date',
            'place'             => 'required|string|max:255',
            'description'       => 'required|string|max:510',
            'banner'            => 'nullable',
            'featured_banner'   => 'required|boolean',
            'quantity_tickets'  => 'required|integer',
            'city_id'           => 'required|integer',
            'category_id'       => 'required|integer',
            'age_rating_id'     => 'required|integer'
        ];
    }
}
