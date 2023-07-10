
@extends('layouts.main')

@section('title', 'Customer Create')

@section('content')

<form action="{{ route('customer.store') }}" method="POST">
@csrf
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Create Customer</h5>
                <small class="text-muted float-end">Create Customer</small>
            </div>
            <div class="card-body">
                <x-input name="CustName" label="Name" value="" placeholder="Name" />
                <x-input name="CustContactName" label="Contact Name" value="" />
                <x-input name="CustEmail" label="Email" type="email" value="" />
                <x-input name="CustPhone" label="Phone" type="phone" value="" />
                <x-input name="CustMobile" label="Mobile" type="phone" value="" />
                <x-input name="CustNote" label="Note" value="" />
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save me-3"></i> Save</button>
        </div>
    </div>
</div>
</form>
@endsection