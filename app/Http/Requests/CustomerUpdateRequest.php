<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'cus_no' => ['required', 'string'],
            'cus_name' => ['nullable', 'string'],
            'cus_corr_name' => ['nullable', 'string'],
            'cus_street1' => ['nullable', 'string'],
            'cus_street2' => ['nullable', 'string'],
            'cus_city' => ['nullable', 'string'],
            'cus_st' => ['nullable', 'string'],
            'cus_zip' => ['nullable', 'string'],
            'cus_country' => ['nullable', 'string'],
            'cus_geo_code' => ['nullable', 'string'],
            'cus_outside_city_lm' => ['nullable', 'string'],
            'cus_contact' => ['nullable', 'string'],
            'cus_phone_no' => ['nullable', 'string'],
            'cus_fax_number' => ['nullable', 'string'],
            'cus_start_dt' => ['nullable', 'date'],
            'cus_slm_no' => ['nullable', 'string'],
            'cus_tp' => ['nullable', 'string'],
            'cus_bal_meth' => ['nullable', 'string'],
            'cus_stm_freq' => ['nullable', 'string'],
            'cus_exempt_no' => ['nullable', 'string'],
            'cus_search_name' => ['nullable', 'string'],
        ];
    }
}
