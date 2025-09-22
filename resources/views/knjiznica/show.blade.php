@extends('layouts.app')

@section('title', 'Detalji knjige')

@section('content')

  <h1>Detalji o knjizi</h1>
  <p>Autor: {{$knjiga->autor->ime}} {{$knjiga->autor->prezime}}</p>
  <p>Naziv knjige: {{ $knjiga->naziv}}</p>
  <p>Godina izdanja: {{ $knjiga->godine }}</p>
  <p>Žanr: {{$knjiga->zanr->naziv}}</p>

  <a href="{{route('knjige.index')}}" class="btn btn-primary">Nazad na sve knjige</a>

@endsection