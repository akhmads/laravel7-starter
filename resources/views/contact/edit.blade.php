
@extends('layouts.main')

@section('title', 'Contact Edit')

@section('content')

<form action="{{ route('contact.update', $contact->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Contact Update</h5>
                <small class="text-muted float-end">Update Form</small>
            </div>
            <div class="card-body">
                <x-input name="name" label="Name" value="{{ $contact->name }}" />
                <x-input name="contact_name" label="Contact Name" value="{{ $contact->contact_name }}" />
                <x-input name="email" label="Email" type="email" value="{{ $contact->email }}" />
                <x-input name="phone" label="Phone" type="phone" value="{{ $contact->phone }}" />
                <x-input name="mobile" label="Mobile" type="phone" value="{{ $contact->mobile }}" />
                <x-input name="note" label="Note" value="{{ $contact->note }}" />
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save me-3"></i> Save</button>
        </div>
    </div>
</div>
</form>
@endsection