
@extends('layouts.main')

@section('title', 'Customer Edit')

@section('content')

<form action="{{ route('customer.update', $customer->CustID) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Customer Update</h5>
                <small class="text-muted float-end">Update Form</small>
            </div>
            <div class="card-body">
                <x-input name="CustName" label="Name" value="{{ $customer->CustName }}" />
                <x-input name="CustContactName" label="Contact Name" value="{{ $customer->CustContactName }}" />
                <x-input name="CustEmail" label="Email" type="email" value="{{ $customer->CustEmail }}" />
                <x-input name="CustPhone" label="Phone" type="phone" value="{{ $customer->CustPhone }}" />
                <x-input name="CustMobile" label="Mobile" type="phone" value="{{ $customer->CustMobile }}" />
                <x-input name="CustNote" label="Note" value="{{ $customer->CustNote }}" />
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save me-3"></i> Save</button>
        </div>
    </div>
</div>
</form>
@endsection