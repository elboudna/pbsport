@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Equipe</h2>
</div>

<section id="section-equipe">

    <h1 class="titre-page">Notre équipe</h1>
    <h4 class="sous-titre-page">PBSport plus dispose d’une équipe polyvalente possédant une connaissance et une experience dans le monde Pickleball.</h4>

    <div class="team">
        @foreach($membres as $membre)
        <div class="team-member">
            <img src="{{ asset('storage/equipe_images/' . $membre->image) }}" alt="$membre->nom">
            <h3>{{ $membre->nom }} {{ $membre->prenom }}</h3>
            <p>{{ $membre->poste }}</p>
        </div>
        @endforeach
    </div>

</section>

@endsection