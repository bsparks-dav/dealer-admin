<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceItemStoreRequest extends FormRequest
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
            'inv_itm_inv_no' => ['required', 'string'],
            'inv_itm_seq_no' => ['required', 'integer'],
            'inv_itm_inv_date' => ['required', 'date'],
            'inv_itm_cust_no' => ['required', 'string'],
            'inv_itm_itm_no_alt' => ['nullable', 'string'],
            'inv_itm_inv_date_alt' => ['nullable', 'date'],
            'inv_itm_desc_1' => ['nullable', 'string'],
            'inv_itm_desc_2' => ['nullable', 'string'],
            'inv_itm_ser_lot_no' => ['nullable', 'string'],
            'inv_itm_ser_eff_date' => ['nullable', 'date'],
            'inv_itm_unit_price' => ['nullable', 'numeric'],
            'inv_itm_discount_pct' => ['nullable', 'numeric'],
            'inv_itm_request_date' => ['nullable', 'date'],
            'inv_itm_uom' => ['nullable', 'string'],
            'inv_itm_unit_cost' => ['nullable', 'numeric'],
            'inv_itm_unit_weight' => ['nullable', 'numeric'],
            'inv_itm_comm_p_o_amt' => ['nullable', 'numeric'],
            'inv_itm_promise_date' => ['nullable', 'date'],
            'inv_itm_select_code' => ['nullable', 'string'],
            'inv_itm_explode_kit' => ['nullable', 'string'],
            'inv_itm_bm_order_no' => ['nullable', 'string'],
            'inv_itm_no_package' => ['nullable', 'string'],
            'inv_itm_po_xrf_seqno' => ['nullable', 'integer'],
            'inv_itm_prod_cate' => ['nullable', 'string'],
            'inv_itm_reason_code' => ['nullable', 'string'],
            'inv_itm_prc_lvl_no' => ['nullable', 'string'],
            'inv_itm_vendor_no' => ['nullable', 'string'],
            'inv_itm_edi_turnarnd' => ['nullable', 'string'],
            'inv_itm_cancel_cls' => ['nullable', 'string'],
            'inv_itm_bm_ord_tp' => ['nullable', 'string'],
            'inv_itm_custom_bom' => ['nullable', 'string'],
            'inv_itm_case_size' => ['nullable', 'string'],
            'inv_itm_inner_size' => ['nullable', 'string'],
            'invoice_header_id' => ['required', 'integer', 'exists:invoice_headers,id'],
        ];
    }
}
