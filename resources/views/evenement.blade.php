@extends('layouts.app')

@section('content')


<div class="event-div">
    <h1>{{ $evenement->type }} : {{ $evenement->nom }}</h1>
    <h3>{{ \Carbon\Carbon::parse($evenement->date_debut)->isoFormat('D MMMM YYYY', 'Do MMMM YYYY') }} à partir de {{ \Carbon\Carbon::parse($evenement->heure)->format('H:i') }}</h3>


    <div id="event-banner">
        <img src="{{ asset('storage/evenement_images/' . $evenement->image) }}" alt="{{ $evenement->nom }}">
        <p>{{ $evenement->description }}</p>
    </div>

    <div class="event-details">
        <h3>Details</h3>
        <div class="event-details-flex">
            <div class="event-details-gauche">
                <p class="detail-titre">Date:</p>
                <p class="detail-data">{{ \Carbon\Carbon::parse($evenement->date_debut)->isoFormat('D MMMM YYYY', 'Do MMMM YYYY') }}</p>
                <p class="detail-titre">Heure: </p>
                <p class="detail-data">{{ \Carbon\Carbon::parse($evenement->heure)->format('H:i') }}</p>
                <p class="detail-titre">Prix: </p>
                <p class="detail-data">{{ $evenement->prix }} $</p>
            </div>
            <div class="event-details-droite">
                <p class="detail-titre">Niveau:</p>
                <p class="detail-data"> {{ $evenement->niveau }}</p>
                <p class="detail-titre">Catégorie:</p>
                <p class="detail-data"> {{ implode(', ', $evenement->categorie) }}</p>

                <p class="detail-titre">Nombre de joueurs:</p>
                <p class="detail-data">{{ $evenement->nbr_joueur }}</p>
            </div>
        </div>
    </div>

    <div class="event-details">
        <h3>Lieu</h3>
        <div class="event-details-flex">
            <div class="event-details-gauche">
                <p class="detail-titre">Terrain:</p>
                <p class="detail-data">{{ $evenement->lieu }}</p>
            </div>
            <div class="event-details-droite">
                <p class="detail-titre">Adresse:</p>
                <p class="detail-data">{{ $evenement->adresse }}</p>
            </div>
        </div>
    </div>

    <div class="event-details">
        <h3>Contact</h3>
        <div class="event-details-flex">
            <div class="event-details-gauche">
                <p class="detail-titre">Téléphone:</p>
                <p class="detail-data">{{ $evenement->telephone }}</p>
            </div>
            <div class="event-details-droite">
                <p class="detail-titre">Email:</p>
                <p class="detail-data">{{ $evenement->email }}</p>
            </div>
        </div>
    </div>

    <div class="button-center margin-top margin-bottom">
        <a class="bgvert" href="{{ $evenement->lien }}" target="_blank">S'inscrire</a>
    </div>
</div>

@endsection