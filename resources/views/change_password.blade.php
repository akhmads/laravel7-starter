
@extends('layouts.app')

@section('title', 'Change Password')

@push('head')
<link rel="stylesheet" href="{{ url('assets/vendor/css/pages/page-auth.css') }}" />
@endpush

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Login -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-3">
              <a href="{{ url('/login') }}" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img src="{{ url('assets/img/logo.svg') }}" alt="Logo" style="height:50px;" />
                </span>
                {{-- <span class="app-brand-text demo text-body fw-bolder">Hypercode</span> --}}
                
              </a>
            </div>
            <!-- /Logo -->
           
            <h2 class="mb-3">Change Password</h2>

            <!-- Alert Message -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
              {{ session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!-- /Alert Message -->

            <form class="mb-3" action="{{ url('/change_password') }}" method="POST">
              @csrf
              
              <div class="mb-3">
                <label for="current_password" class="form-label">Current Password</label>
                <input type="password" id="current_password" name="current_password" value="{{ old('current_password') }}" class="form-control" placeholder="" autofocus />
                @error('current_password')
                  <div class="d-block invalid-feedback">
                    {{ $message }}
                  </div>                         
                @enderror
              </div>

              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="new_password">New Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control" name="new_password" id="new_password" value="{{ old('new_password') }}" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                @error('new_password')
                  <div class="d-block invalid-feedback">
                    {{ $message }}
                  </div>                         
                @enderror
              </div>

              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="confirm_new_password">New Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" value="{{ old('confirm_new_password') }}" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                @error('confirm_new_password')
                  <div class="d-block invalid-feedback">
                    {{ $message }}
                  </div>                         
                @enderror
              </div>

              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Change Password</button>
              </div>
            </form>

          </div>
        </div>
        <!-- /Login -->
      </div>
    </div>
  </div>
  @endsection