@extends('layouts.app')

@section('title', 'Panier')

@section('content')

<section class="margin-bottom margin-top" id="panier">
    <h2>Votre Panier</h2>

    @if($panierProduits->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($panierProduits as $panierProduit)
                    <tr>
                        <td>{{ $panierProduit->produit->nom }}</td>
                        <td>{{ $panierProduit->quantite }}</td>
                        <td>{{ $panierProduit->produit->prix }}$</td>
                        <td>{{ $panierProduit->quantite * $panierProduit->produit->prix }}$</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Total du panier : {{ $totalCartAmount }}$</p>

        <a href="{{ route('checkout') }}" class="btn-commander bgvert">Passer la commande</a>
    @else
        <p>Votre panier est vide.</p>
    @endif
</section>

@endsection
