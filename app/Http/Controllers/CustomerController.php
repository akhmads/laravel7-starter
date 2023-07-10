<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$query = Customer::query();
        $query->limit(10);
        $query->orderBy('CustName');
        $query->when($request->input('q'), function ($q) use ($request) {
            return $q->where('CustName', 'like', '%'.$request->input('q').'%');
        });
        $customer = $query->get();
        foreach( $customer as $cust ){
            echo '<p>'.$cust->CustName.'</p>';
        }*/

        /**
         * Datasource for datatables via ajax request.
         *
         * @return json
         */
        if ($request->ajax()) {
            $model = Customer::query();
            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->editColumn('created_at', function(Customer $customer) {
                    return date('d-m-y, H:i',strtotime($customer->created_at));
                })
                ->addColumn('edit_url', function(Customer $customer) {
                    return route('customer.edit',$customer->CustID);
                })
                ->addColumn('delete_url', function(Customer $customer) {
                    return route('customer.delete',$customer->CustID);
                })
                ->toJson();
        }

        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'CustName' => 'required',
            'CustContactName' => 'required',
        ]);

        Customer::create($request->post());

        return redirect()->route('customer')->with('success','Customer has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        #$customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'CustName' => 'required',
            'CustContactName' => 'required',
        ]);

        $customer->fill($request->post())->save();

        return redirect()->route('customer.index')->with('success','Customer has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index')->with('success', 'Customer has been deleted.');
    }
}
