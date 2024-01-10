@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="table-admin">
    <h1>Gestion de la galerie</h1>

    <table class="table-element">
        <thead>
            <tr>
                <th>Image(s)</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <form action="{{ route('galerie.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="ajouter-produit">
                    <td><input type="file" class="form-control" id="image" name="image"></td>
                    <td><input type="text" name="nom"></td>
                    <td><button type="submit" class="btn btn-primary">Ajouter image(s)</button></td>
                </div>
            </form>

        </tbody>
    </table>

    <h2>Photos</h2>


    <div id="galerie-admin">
        @foreach($images as $image)
        <div class="image-info">
            <img src="{{ asset('storage/galerie/' . $image->image) }}" alt="">
            <p>{{ $image->nom }}</p>
            <form action="{{ route('galerie.supprimer', $image->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection