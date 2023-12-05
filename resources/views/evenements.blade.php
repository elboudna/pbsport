<!-- resources/views/evenements/evenements.blade.php -->

@extends('layouts.app')

@section('content')

<h2>Liste des événements</h2>

@foreach($evenements as $evenement)
<div class="event-preview">
    <a href="{{ route('evenement.show', $evenement->id) }}">
        <img src="{{ asset('storage/evenement_images/' . $evenement->image) }}" alt="{{ $evenement->nom }}">
        <h3>{{ $evenement->nom }}</h3>
    </a>

    <p>{{ $evenement->date_debut }}</p>
</div>
@endforeach

@endsection