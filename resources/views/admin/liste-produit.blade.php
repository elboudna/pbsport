@extends('layouts.app') <!-- Assurez-vous d'étendre la mise en page appropriée -->

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="table-admin">
    <h1>Liste des Produits</h1>
    <table class="table-element">
        <thead>
            <tr>
                <th>Nom du Produit</th>
                <th>Prix</th>
                <th>Type</th>
                <th>Modifier</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
            <tr>
                <td>{{ $produit->nom }}</td>
                <td>{{ $produit->prix }}</td>
                <td>
                    @if ($produit->type)
                    {{ $produit->type->type }}
                    @else
                    Type Not Found
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.modifier-produit', $produit->id) }}" class="btn btn-primary">Modifier</a>
                </td>
                <td>
                    <a href="{{ route('admin.stock-produit', $produit->id) }}" class="btn btn-success">Stock</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection