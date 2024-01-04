<?php

namespace Modules\ContactManagement\Http\Requests;

use Modules\ContactManagement\Entities\ContactCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
class MassDestroyContactCompanyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }
    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:contact_companies,id',
        ];
    }
}


// namespace Modules\ContactManagement\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

// class MassDestroyContactCompanyRequest extends FormRequest
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
