
@extends('layouts.main')

@section('title', 'Contact Create')

@section('content')

<form action="{{ route('contact.store') }}" method="POST">
@csrf
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Create Contact</h5>
                <small class="text-muted float-end">Create Contact</small>
            </div>
            <div class="card-body">
                <x-input name="name" label="Name" value="" placeholder="" />
                <x-input name="contact_name" label="Contact Name" value="" />
                <x-input name="email" label="Email" type="email" value="" />
                <x-input name="phone" label="Phone" type="phone" value="" />
                <x-input name="mobile" label="Mobile" type="phone" value="" />
                <x-input name="note" label="Note" value="" />
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save me-3"></i> Save</button>
        </div>
    </div>
</div>
</form>
@endsection