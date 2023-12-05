@extends('layouts.app')

@section('content')

<div class="event-banner">
    <img src="{{ asset('storage/evenement_images/' . $evenement->image) }}" alt="{{ $evenement->nom }}">
</div>

<div class="event-details">
    <h2>{{ $evenement->nom }}</h2>
    <p>{{ $evenement->description }}</p>

    <ul>
        <li><strong>Type:</strong> {{ $evenement->type }}</li>
        <li><strong>Date:</strong> {{ $evenement->date_debut->format('Y-m-d') }}</li>
        <li><strong>Heure:</strong> {{ $evenement->heure }}</li>
        <li><strong>Lieu:</strong> {{ $evenement->lieu }}</li>
        <li><strong>Adresse:</strong> {{ $evenement->adresse }}</li>
        <li><strong>Nombre de joueurs:</strong> {{ $evenement->nbr_joueur }}</li>
        <li><strong>Prix:</strong> {{ $evenement->prix }}</li>
        <li><strong>Classification:</strong> {{ $evenement->classification }}</li>
        <li><strong>Niveau:</strong> {{ $evenement->niveau }}</li>
    </ul>
</div>

@endsection