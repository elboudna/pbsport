@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="margin-bottom margin-top" id="produit">
    <form method="POST" action="{{ route('panier.ajouter') }}">
        @csrf
        <input type="hidden" name="produit_id" value="{{ $produit->id }}">
        <div class="flex-row">
            <div id="produit-image">
                <img src="{{ asset('storage/produit_images/' . $produit->images->first()->chemin) }}" alt="{{ $produit->nom }}">
            </div>
            <div id="produit-info">
                <p class="nom-produit">{{ $produit->nom }}</p>
                <p class="prix-produit vert">{{ $produit->prix }}$</p>
                <p class="description-produit">{{ $produit->description }}</p>
                <div class="quant-ajouter">
                    <input class="quantite" value="1" min="1" step="1" type="number" name="quantite">
                    <button type="submit" class="btn-ajouter bgvert">Ajouter</button>
                </div>
                <div class="flex-column">
                    <p>Note</p>
                    <p>Etoiles</p>
                </div>
            </div>
        </div>
    </form>
</section>

<!-- <section id="produit-detail">

        <div class="flex-column">
            <p>details</p>
        </div>
    </section> -->
@endsection