@extends('layouts.app')

@section('title', 'Sve knjige')

@section('content')

<h1>Sve knjige iz baze</h1>

  @forelse ($knjige as $knjiga)
    <p>{{$knjiga->autor->ime}} {{$knjiga->autor->prezime}}: {{$knjiga->naziv}}</p>
    <a href="{{route('knjige.show', $knjiga->id)}}">Detaljnije</a>
    <hr>   
  @empty
    <p>Nema knjiga</p>    
  @endforelse

@endsection
