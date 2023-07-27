
@extends('layouts.app')

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
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img src="{{ url('assets/img/logo.svg') }}" alt="Logo" style="height:50px;" />
                </span>
                {{-- <span class="app-brand-text demo text-body fw-bolder">Hypercode</span> --}}
                
              </a>
            </div>
            <!-- /Logo -->
           
            @if(session('success'))
            <div class="bg-white shadow-sm p-5 border-l-4 border-green-500">
                <span class="font-medium text-green-500 text-base">{{ session('success') }}</span>
            </div>
            @endif
            @if(session('error'))
            <div class="bg-white shadow-sm p-5 border-l-4 border-red-500">
                <span class="font-medium text-red-500 text-base">{{ session('error') }}</span>
            </div>
            @endif

            <form class="mb-3" action="{{ url('/login') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email" autofocus />
                @error('email')
                  <div class="d-block invalid-feedback">
                    {{ $message }}
                  </div>                         
                @enderror
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  {{-- <a href="auth-forgot-password-basic.html"><small>Forgot Password?</small></a> --}}
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control" name="password" id="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                @error('password')
                  <div class="d-block invalid-feedback">
                    {{ $message }}
                  </div>                         
                @enderror
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember-me" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>

            {{-- <p class="text-center">
              <span>New on our platform?</span>
              <a href="auth-register-basic.html">
                <span>Create an account</span>
              </a>
            </p> --}}

          </div>
        </div>
        <!-- /Login -->
      </div>
    </div>
  </div>
  @endsection