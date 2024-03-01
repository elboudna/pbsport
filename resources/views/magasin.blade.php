@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="bande">
    <h2>Produits</h2>
</div>

<section id="magasin">
    <div class="empty">
        <span>
            <p>Aucun produit trouvé!</p>
        </span>
        <p>Revenez plus tard.</p>
        <!-- retour à la page d'accueil -->
        <div class="lien-retour">
            <a href="{{ route('accueil') }}">Retour à la page d'accueil</a>
        </div>
    </div>

</section>
@endsection