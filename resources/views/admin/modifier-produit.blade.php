@extends('layouts.app')

@section('content')
<section class="form-section">

    <h1>Modifier le produit</h1>

    <div class="form-pbsport">
        <form action="{{  route('produit.modifier') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{ isset($produit) ? $produit->id : '' }}">
                <label for="nom">Nom du produit</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ isset($produit) ? $produit->nom : '' }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ isset($produit) ? $produit->description : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" step="1" min="1" class="form-control" id="prix" name="prix" value="{{ isset($produit) ? $produit->prix : '' }}" required>
            </div>
            <div class="form-group">
                <label for="type">Type de produit</label>
                <select class="form-control" id="type_id" name="type_id" required>
                    @foreach($produitTypes as $type)
                    <option value="{{ $type->id }}" {{ isset($produit) && $produit->type_id == $type->id ? 'selected' : '' }}>
                        {{ $type->type }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
            </div>
            <div class="button-center">
                <button type="submit" class="btn btn-primary">{{ isset($produit) ? 'Modifier' : 'Ajouter' }}</button>
            </div>
        </form>
    </div>
</section>

@endsection