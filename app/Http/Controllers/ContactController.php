<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use DataTables;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // datatable source via ajax
        if ($request->ajax()) {
            $model = Contact::query();
            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->editColumn('created_at', function(Contact $contact) {
                    return date('d-m-y, H:i',strtotime($contact->created_at));
                })
                ->addColumn('edit_url', function(Contact $contact) {
                    return route('contact.edit',$contact->id);
                })
                ->addColumn('delete_url', function(Contact $contact) {
                    return route('contact.delete',$contact->id);
                })
                ->toJson();
        }

        return view('contact.index');
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'ContactName' => 'required',
        ]);

        Contact::create($request->post());

        return redirect()->route('contact')->with('success','Contact has been created successfully.');
    }

    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit',compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'contact_name' => 'required',
        ]);

        $contact->fill($request->post())->save();

        return redirect()->route('contact.index')->with('success','Contact has been updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact has been deleted.');
    }
}
