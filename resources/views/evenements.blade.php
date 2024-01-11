<!-- resources/views/evenements/evenements.blade.php -->

@extends('layouts.app')

@section('content')

<section id="section-evenements">

    <h2>Liste des événements</h2>

    <div class="event">
    @foreach($evenements as $evenement)
        <div class="evenement-div">
            <div class="evenement-img">
                <img src="{{ asset('storage/evenement_images/' . $evenement->image) }}" alt="{{ $evenement->nom }}">
            </div>
            <div class="evenement-flex">
                <h3>{{ $evenement->nom }}</h3>
                <p>Date de début : {{ \Carbon\Carbon::parse($evenement->date_debut)->isoFormat('D MMMM YYYY', 'Do MMMM YYYY') }}</p>
                <div class="btn-ensavoirplus-event">
                    <a href="{{ route('evenement.show', $evenement->id) }}">En savoir en plus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>
@endsection