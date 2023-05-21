@extends('layouts.main')
@section('content')

@foreach ($furnitures as $furniture)
<div class="card mb-3">
  <img src="{{ $furniture['img'] }}" class="card-img-top" height="400" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $furniture['title'] }}</h5>
    <p class="card-text">{{ $furniture['desc'] }}</p>
    <p class="card-text"><small class="text-body-secondary">{{ $furniture['price'] }}</small></p>
  </div>  
@endforeach

@endsection
