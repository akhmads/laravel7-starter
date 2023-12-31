
@extends('layouts.main')

@section('title', 'User Edit')

@section('content')

<form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
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
                <x-input name="avatar" label="Avatar" type="file" value="{{ $user->avatar }}" wrap="h" image="true" />
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