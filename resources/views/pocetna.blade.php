@extends('layouts.app')

@section('title', 'Početna')

@section('content')

       <h1>Dobrodošli u knjižnicu</h1>

        <p>Nadamo se da će te uživati i pronaći knjigu po vašem izboru</p>

        <p>
        Za pomoć pri pronalasku knjige upiši naziv knjige u našu tražilicu gore desno 
        </p>

        <a href="{{route('knjige.index')}}" class="btn btn-primary">Pogledaj sve knjige</a>


@endsection
