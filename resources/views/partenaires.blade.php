@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Partenaires</h2>
</div>

<section id="section-partenaires">
    <div id="partenaire-majeur">
        <h2>Partenaire majeur</h2>
        <img src="{{ asset('image/tennis13.png') }}" alt="">
    </div>

    <div id="partenaires">
        <h2>Autres partenaires</h2>
        <div>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </div>
</section>

@endsection