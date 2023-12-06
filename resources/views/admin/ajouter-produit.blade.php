@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<section class="form-section">

    <h1>Ajouter un produit</h1>
    <div class="form-pbsport">
        <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
            </div>
            <div class="button-center">
                <button type="submit" class="bgvert">Ajouter</button>
            </div>
        </form>
    </div>
</section>

@endsection