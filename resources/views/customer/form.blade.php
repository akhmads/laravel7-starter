
@extends('layouts.main')

@section('title', 'Customer Create/Update')

@section('content')
<form action="{{ route('customer.store') }}" method="POST">
@csrf
@method('PUT')
<div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Basic Layout</h5>
        <small class="text-muted float-end">Default label</small>
    </div>
    <div class="card-body">
        <x-input name="CustName" label="Name" value="{{ isset($CustName) ? $CustName : '' }}" />
        <x-input name="CustContactName" label="Contact Name" />
        <x-input name="CustEmail" label="Email" type="email" />
    </div>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save me-3"></i> Save</button>
</div>
</form>
@endsection

@push('scripts')
@endpush