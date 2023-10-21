@extends('layouts.app')
  
@section('title', 'Dashboard')
  
@section('contents')
<div class="card">
    <div class="card-header">
      welcome, {{ auth()->user()->name }}
    </div>
    <div class="card-body">
      <div class="card-title">
        Have a nice day
      </div>
    </div>
</div>
@endsection