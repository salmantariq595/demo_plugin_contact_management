<?php

namespace Modules\ContactManagement\Http\Requests;

use Modules\ContactManagement\Entities\ContactContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
class StoreContactContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_contact_create');
    }
    public function rules()
    {
        return [
            'company_id' => [
                'required',
                'integer',
            ],
            'contact_first_name' => [
                'string',
                'nullable',
            ],
            'contact_last_name' => [
                'string',
                'nullable',
            ],
            'contact_phone_1' => [
                'string',
                'nullable',
            ],
            'contact_phone_2' => [
                'string',
                'nullable',
            ],
            'contact_email' => [
                'string',
                'nullable',
            ],
            'contact_skype' => [
                'string',
                'nullable',
            ],
            'contact_address' => [
                'string',
                'nullable',
            ],
        ];
    }
}


// namespace Modules\ContactManagement\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

// class StoreContactContactRequest extends FormRequest
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
