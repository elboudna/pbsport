@extends('layouts.app')  <!-- Assurez-vous d'étendre la mise en page appropriée -->

@section('content')
<div class="container">
    <h2>Liste des Produits</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nom du Produit</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
            <tr>
                <td>{{ $produit->nom }}</td>
                <td></td>
                <td>{{ $produit->prix }}</td>
                <td>
                    <a href="{{ route('admin.modifier-produit', $produit->id) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('admin.stock-produit', $produit->id) }}" class="btn btn-success">Stock</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
