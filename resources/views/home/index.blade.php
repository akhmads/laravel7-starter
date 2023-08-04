
@extends('layouts.main')

@section('title', 'Home')

@section('content')
  
  @livewire('alert')

  <h1>Home</h1>

  <div class="row">
    <div class="col-md-4">
      @livewire('auth.change-password')
    </div>
    <div class="col-md-4">
      @livewire('auth.change-avatar')
    </div>
  </div>
   
@endsection