@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Equipe</h2>
</div>

<section id="section-equipe">

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