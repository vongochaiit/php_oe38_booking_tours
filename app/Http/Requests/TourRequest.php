<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class TourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|min:3',
            'place_from' => 'bail|required|min:3',
            'place_to' => 'bail|required|min:3',
            'place_tobe' => 'bail|required|min:3',
            'des' => 'bail|required|min:3|max:255',
            'duration' => 'bail|required|numeric',
            'category_id' => 'bail|required',
            'image' => 'bail|required',
            'price' => 'bail|required|numeric',
            'hotel_star' => 'bail|required|numeric|min:1|max:5',
            'quantity_people' => 'bail|required|numeric',
        ];
    }
}
