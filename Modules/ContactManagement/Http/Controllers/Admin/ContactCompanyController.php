<?php

namespace Modules\ContactManagement\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\ContactManagement\Entities\ContactCompany;
use Modules\ContactManagement\Http\Requests\MassDestroyContactCompanyRequest;
use Modules\ContactManagement\Http\Requests\StoreContactCompanyRequest;
use Modules\ContactManagement\Http\Requests\UpdateContactCompanyRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ContactCompanyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactCompanies = ContactCompany::all();

        return view('contactmanagement::admin.contactCompanies.index', compact('contactCompanies'));
    }

    public function create()
    {
        abort_if(Gate::denies('contact_company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('contactmanagement::admin.contactCompanies.create');
    }

    public function store(StoreContactCompanyRequest $request)
    {
        $contactCompany = ContactCompany::create($request->all());
        return redirect()->route('admin.contact-companies.index');
    }
    public function edit(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('contactmanagement::admin.contactCompanies.edit', compact('contactCompany'));
    }

    public function update(UpdateContactCompanyRequest $request, ContactCompany $contactCompany)
    {
        $contactCompany->update($request->all());
        return redirect()->route('admin.contact-companies.index');
    }
    public function show(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('contactmanagement::admin.contactCompanies.show', compact('contactCompany'));
    }

    public function destroy(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $contactCompany->delete();
        return back();
    }
    public function massDestroy(MassDestroyContactCompanyRequest $request)
    {
        ContactCompany::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}

// namespace Modules\ContactManagement\Http\Controllers\Admin;

// use Illuminate\Contracts\Support\Renderable;
// use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;

// class ContactCompanyController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      * @return Renderable
//      */
//     public function index()
//     {
//         return view('contactmanagement::index');
//     }

//     /**
//      * Show the form for creating a new resource.
//      * @return Renderable
//      */
//     public function create()
//     {
//         return view('contactmanagement::create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      * @param Request $request
//      * @return Renderable
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Show the specified resource.
//      * @param int $id
//      * @return Renderable
//      */
//     public function show($id)
//     {
//         return view('contactmanagement::show');
//     }

//     /**
//      * Show the form for editing the specified resource.
//      * @param int $id
//      * @return Renderable
//      */
//     public function edit($id)
//     {
//         return view('contactmanagement::edit');
//     }

//     /**
//      * Update the specified resource in storage.
//      * @param Request $request
//      * @param int $id
//      * @return Renderable
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      * @param int $id
//      * @return Renderable
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }
