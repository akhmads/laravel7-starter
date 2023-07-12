
@extends('layouts.main')

@section('title', 'Contact')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Contact</h5>
                <small class="text-muted float-end">Show detail</small>
            </div>
            <div class="card-body">
                <x-show label="Name" wrap="h" value="{{ $contact->name }}" />
                <x-show label="Contact Name" wrap="h" value="{{ $contact->contact_name }}" />
                <x-show label="Email" wrap="h" value="{{ $contact->email }}" />
                <x-show label="Phone" wrap="h" value="{{ $contact->phone }}" />
                <x-show label="Mobile" wrap="h" value="{{ $contact->mobile }}" />
                <x-show label="Note" wrap="h" value="{{ $contact->note }}" />
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('contact.index') }}" class="btn btn-warning"><i class="fa fa-arrow-left me-3"></i> Back</a>
        </div>
    </div>
</div>
@endsection