
@extends('layouts.main')

@section('title', 'Create User')

@section('content')

<form action="{{ route('user.store') }}" method="POST">
@csrf
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Create User</h5>
                <small class="text-muted float-end">Create User</small>
            </div>
            <div class="card-body">
                <x-input name="name" label="Name" value="" wrap="h" />
                <x-input name="email" label="Email" type="email" value="" wrap="h" />
                <x-input name="password" label="Password" type="password" value="" wrap="h" />
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('user.index') }}" class="btn btn-warning me-2"><i class="fa fa-arrow-left me-2"></i> Back</a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save me-2"></i> Save</button>
        </div>
    </div>
</div>
</form>
@endsection