@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un produit</h2>
        <form action="{{ route('produit.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom du produit</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" step="0.01" class="form-control" id="prix" name="prix" required>
            </div>
            <div class="form-group">
                <label for="couleur">Couleur (optionnel)</label>
                <input type="text" class="form-control" id="couleur" name="couleur">
            </div>
            <div class="form-group">
                <label for="dimension">Dimension (optionnel)</label>
                <input type="text" class="form-control" id="dimension" name="dimension">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
