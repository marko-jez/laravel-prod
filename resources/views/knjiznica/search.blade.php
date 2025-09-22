@extends('layouts.app')

@section('title', 'Pretraga')

@section('content')

<h1>Rezultati pretrage za: {{$query}}</h1>

@forelse ($knjige as $knjiga)
  <a href="{{route('knjige.show', $knjiga->id)}}">
    {{$knjiga->naziv}} - {{$knjiga->godine}} <br>
  </a>
@empty
  <p>Nema rezultata za: <strong>{{$query}}</strong></p>
@endforelse

@endsection