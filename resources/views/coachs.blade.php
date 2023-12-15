@extends('layouts.app')

@section('content')

<section id="section-coachs">

    <h2>Nos Coachs</h2>
    
    @foreach($evenements as $evenement)
    <div class="coach">
            <div class="coach-div">
                <div class="coach-img">
                    <img src="{{ asset('storage/evenement_images/' . $evenement->image) }}" alt="{{ $evenement->nom }}">
                </div>
                <div class="coach-flex">
                    <div>
                        <h3>{{ $evenement->nom }}</h3>
                        <p>Date de début : {{ \Carbon\Carbon::parse($evenement->date_debut)->isoFormat('D MMMM YYYY', 'Do MMMM YYYY') }}</p>
                        <p>{{ $evenement->description }}</p>
                    </div>
                    <div class="btn-ensavoirplus">
                        <a href="{{ route('evenement.show', $evenement->id) }}">En savoir en plus</a>
                    </div>
                </div>
            </div>    
    </div>
    @endforeach
    
</section>
@endsection