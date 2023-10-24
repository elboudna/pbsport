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
            <label for="type">Type de produit</label>
            <select class="form-control" id="type_id" name="type_id" required>
                @foreach($produitTypes as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection