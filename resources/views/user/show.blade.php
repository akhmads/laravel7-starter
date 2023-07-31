
@extends('layouts.main')

@section('title', 'User')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">User</h5>
                <small class="text-muted float-end">Show detail</small>
            </div>
            <div class="card-body">
                <x-show label="Name" wrap="h" value="{{ $user->name }}" />
                <x-show label="Email" wrap="h" value="{{ $user->email }}" />
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('user.index') }}" class="btn btn-warning"><i class="fa fa-arrow-left me-3"></i> Back</a>
        </div>
    </div>
</div>
@endsection