<!-- resources/views/evenements/evenements.blade.php -->

@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Evénements</h2>
</div>

<section id="section-evenements">

    @if($evenements->isEmpty())
    <div class="empty">
        <span>
            <p>Aucun évènement trouvé!</p>
        </span>
        <p>Revenez plus tard.</p>
        <!-- retour à la page d'accueil -->
        <div class="lien-retour">
            <a href="{{ route('accueil') }}">Retour à la page d'accueil</a>
        </div>
    </div>
    @else
    <div class="event">

        @foreach($evenements as $evenement)
        <div class="evenement-div">
            <div class="evenement-img">
                <img src="{{ asset('storage/evenement_images/' . $evenement->image) }}" alt="{{ $evenement->nom }}">
            </div>
            <div class="evenement-flex">
                <h3 class="event-nom">{{ $evenement->nom }}</h3>
                <p>Date de début : {{ \Carbon\Carbon::parse($evenement->date_debut)->isoFormat('D MMMM YYYY', 'Do MMMM YYYY') }}</p>
                <div class="btn-ensavoirplus-event">
                    <a href="{{ route('evenement.show', $evenement->id) }}">En savoir en plus</a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>


</section>
@endsection