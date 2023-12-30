@extends('layouts.app')

@section('title', 'Panier')

@section('content')

<section class="margin-bottom margin-top" id="panier">
    <h2>Panier</h2>

    <section>
        @if($panierProduits)
        @foreach($panierProduits as $cartProduit)
        <div class="product-item">
            <div class="product-image">
                <img src="{{ asset('storage/produit_images/' . $cartProduit['image']) }}" alt="{{ $cartProduit['nom'] }}">
            </div>
            <div class="product-details">
                <p>Nom: {{ $cartProduit['nom'] }}</p>
                <p>Couleur: {{ $cartProduit['couleur'] }}</p>
                <p>Taille: {{ $cartProduit['taille'] }}</p>
                <p>Quantité: {{ $cartProduit['quantity'] }}</p>
            </div>
            <div class="product-price">
                <p>{{ $cartProduit['prix'] }}$</p>
            </div>
        </div>
        @endforeach

    </section>

    <section>
        <p>Récapitulatif</p>
        <div>
            <p>Sous-total </p>
            <p>{{ $totalCartAmount }}$</p>
        </div>
        <div>
            <p>Taxes</p>
            <p>{{ $totalCartAmount * 0.15 }}$</p>
        </div>

        <div>
            <p>Total</p>
            <p>{{ $totalCartAmount * 1.15 }}$</p>
        </div>

        <a href="{{-- Add your checkout route here --}}" class="btn-commander bgvert">Passer la commande</a>
    </section>
    @else
    <p>Votre panier est vide.</p>
    @endif
</section>

@endsection