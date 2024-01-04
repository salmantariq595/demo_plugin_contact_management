<?php

namespace Modules\ContactManagement\Http\Requests;

use Modules\ContactManagement\Entities\ContactCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
class StoreContactCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_company_create');
    }
    public function rules()
    {
        return [
            'company_name' => [
                'string',
                'nullable',
            ],
            'company_address' => [
                'string',
                'nullable',
            ],
            'company_website' => [
                'string',
                'nullable',
            ],
            'company_email' => [
                'string',
                'nullable',
            ],
        ];
    }
}

// namespace Modules\ContactManagement\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

// class StoreContactCompanyRequest extends FormRequest
// {
//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array
//      */
//     public function rules()
//     {
//         return [
//             //
//         ];
//     }

//     /**
//      * Determine if the user is authorized to make this request.
//      *
//      * @return bool
//      */
//     public function authorize()
//     {
//         return true;
//     }
// }
