
@extends('layouts.main')

@section('title', 'Customer Create/Update')

@section('content')
<form action="{{ route('customer.store') }}" method="POST">
@csrf
@method('PUT')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Basic Layout</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <x-input name="CustName" label="Name" value="{{ isset($CustName) ? $CustName : '' }}" />
                <x-input name="CustContactName" label="Contact Name" value="{{ isset($CustContactName) ? $CustContactName : '' }}" />
                <x-input name="CustEmail" label="Email" type="email" value="{{ isset($CustEmail) ? $CustEmail : '' }}" />
                <x-input name="CustPhone" label="Phone" type="phone" value="{{ isset($CustPhone) ? $CustPhone : '' }}" />
                <x-input name="CustMobile" label="Mobile" type="phone" value="{{ isset($CustMobile) ? $CustMobile : '' }}" />
                <x-input name="CustNote" label="Note" value="{{ isset($CustNote) ? $CustNote : '' }}" />
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save me-3"></i> Save</button>
        </div>
    </div>
</div>
</form>
@endsection

@push('scripts')
@endpush