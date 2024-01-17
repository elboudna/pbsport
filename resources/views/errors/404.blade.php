@extends('layouts.app')

@section('content')
<div class="bande">
    <h2>Page introuvable</h2>
</div>
<section class="section-error">
    <span> 
        <img src="{{ asset('icone/raquetteG.png') }}" alt="">
        <p>404!</p> 
        <img src="{{ asset('icone/raquetteD.png') }}" alt="">
    </span>
    <p>La page que vous cherchez n'existe pas.</p>
    <!-- retour à la page d'accueil -->
    <div class="lien-retour">
        <a href="{{ route('accueil') }}">Retour à la page d'accueil</a>
    </div>

</section>


@endsection