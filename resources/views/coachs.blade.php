@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Coachs</h2>
</div>
<section id="section-coachs">

    <div id="coachs">

        @foreach($coachs as $coach)
        <div class="coach">
            <div>
                <img src="{{ asset('storage/coach_images/' . $coach->photo) }}" alt="{{ $coach->prenom }}">
            </div>
            <div class="coach-info">
                <div>
                    <p class="coach-prenom">{{ $coach->prenom }}</p>
                    <p class="coach-nom">{{ $coach->nom }}</p>
                </div>
                <p class="coach-poste">Coach</p>
                <p class="coach-description">{{ $coach->description }}</p>
                <div class="coach-contact">
                    <a href="{{ $coach->mail }}">Contacter <span>&#10148;</span> </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>
@endsection