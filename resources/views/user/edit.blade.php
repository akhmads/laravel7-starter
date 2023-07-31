
@extends('layouts.main')

@section('title', 'User Edit')

@section('content')

<form action="{{ route('user.update', $user->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">User Update</h5>
                <small class="text-muted float-end">Update Form</small>
            </div>
            <div class="card-body">
                <x-input name="name" label="Name" value="{{ $user->name }}" wrap="h" />
                <x-input name="email" label="Email" type="email" value="{{ $user->email }}" wrap="h" />
                <x-input name="password" label="Password" type="password" value="" wrap="h" />
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save me-3"></i> Save</button>
        </div>
    </div>
</div>
</form>
@endsection