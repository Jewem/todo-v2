@extends('layout')



@section('title','Pondérateur {{ $ponderator->id }} - TODOLIST Organizer')



@section('content')
<!-- ponderator.show.content -->

    <h1>Pondérateur {{ $ponderator->id }}</h1>

    @include('parts.menu')

    <p>{{ $ponderator->name }} ({{ $ponderator->coefficient }})</p>

    <a href="/ponderators/{{ $ponderator->id }}/edit">Éditer</a>

<!-- /ponderator.show.content -->
@endsection
