<?php


namespace Modules\ContactManagement\Http\Requests;

use Modules\ContactManagement\Entities\ContactContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
class MassDestroyContactContactRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_contact_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }
    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:contact_contacts,id',
        ];
    }
}

// namespace Modules\ContactManagement\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

// class MassDestroyContactContactRequest extends FormRequest
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
