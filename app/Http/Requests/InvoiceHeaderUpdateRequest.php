<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceHeaderUpdateRequest extends FormRequest
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
            'inv_no' => ['required', 'string'],
            'inv_order_no' => ['required', 'string'],
            'inv_customer_no' => ['required', 'string'],
            'inv_date' => ['required', 'date'],
            'inv_date_entered' => ['nullable', 'date'],
            'inv_order_date' => ['nullable', 'date'],
            'inv_type' => ['nullable', 'string'],
            'inv_apply_to_no' => ['nullable', 'string'],
            'inv_purchase_ord_no' => ['nullable', 'string'],
            'inv_no_alt' => ['nullable', 'string'],
            'inv_cust_bal_method' => ['nullable', 'string'],
            'inv_terms_code' => ['nullable', 'string'],
            'inv_frt_pay_code' => ['nullable', 'string'],
            'inv_discount_percent' => ['nullable', 'numeric'],
            'inv_job_no' => ['nullable', 'string'],
            'inv_mfg_location' => ['nullable', 'string'],
            'inv_department' => ['nullable', 'string'],
            'inv_ar_reference' => ['nullable', 'string'],
            'inv_date_picked' => ['nullable', 'date'],
            'inv_selection_code' => ['nullable', 'string'],
            'inv_posted_date' => ['nullable', 'date'],
            'inv_part_posted_flag' => ['nullable', 'string'],
            'inv_copy_to_bm_fg' => ['nullable', 'string'],
            'inv_closed_fg' => ['nullable', 'string'],
            'inv_store_no' => ['nullable', 'string'],
            'inv_rma_status' => ['nullable', 'string'],
            'inv_phatm_inv_flag' => ['nullable', 'string'],
            'inv_dept_no' => ['nullable', 'string'],
            'inv_bol_no' => ['nullable', 'string'],
            'inv_bol_printed' => ['nullable', 'string'],
            'inv_ref_doc_no' => ['nullable', 'string'],
            'inv_po_req_gen_flg' => ['nullable', 'string'],
            'customer_id' => ['nullable', 'integer', 'exists:Customers,id'],
        ];
    }
}
