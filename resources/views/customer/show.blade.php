
@extends('layouts.main')

@section('title', 'Customer Edit')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Customer</h5>
                <small class="text-muted float-end">Show detail</small>
            </div>
            <div class="card-body">
                <x-show label="Name" value="{{ $customer->CustName }}" />
                <x-show label="Contact Name" value="{{ $customer->CustContactName }}" />
                <x-show label="Email" value="{{ $customer->CustEmail }}" />
                <x-show label="Phone" value="{{ $customer->CustPhone }}" />
                <x-show label="Mobile" value="{{ $customer->CustMobile }}" />
                <x-show label="Note" value="{{ $customer->CustNote }}" />
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('customer.index') }}" class="btn btn-warning"><i class="fa fa-arrow-left me-3"></i> Back</a>
        </div>
    </div>
</div>
@endsection