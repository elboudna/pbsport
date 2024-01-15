@extends('layouts.app')

@section('content')
<div class="bande">
    <h2>Erreur 404!</h2>
</div>
<section>

    <p>La page que vous cherchez n'existe pas.</p>
    <!-- retour à la page d'accueil -->
    <a href="{{ route('accueil') }}">Retour à la page d'accueil</a>

</section>


@endsection