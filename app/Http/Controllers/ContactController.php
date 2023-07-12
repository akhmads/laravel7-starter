<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DataTables;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact.index');
    }

    public function json(Request $request)
    {
        // datatable source via ajax
        if ($request->ajax()) {
            $model = Contact::query();
            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->editColumn('created_at', function(Contact $contact) {
                    return date('d-m-y, H:i',strtotime($contact->created_at));
                })
                ->addColumn('show_url', function(Contact $contact) {
                    return route('contact.show',$contact->id);
                })
                ->addColumn('edit_url', function(Contact $contact) {
                    return route('contact.edit',$contact->id);
                })
                ->addColumn('destroy_url', function(Contact $contact) {
                    return route('contact.destroy',$contact->id);
                })
                ->toJson();
        }
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact_name' => 'required',
        ]);

        Contact::create($request->post());
        return redirect()->route('contact.index')->with('success','Contact has been created successfully.');
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
