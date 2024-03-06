@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="table-admin">
    <h1>Gestion de l'équipe</h1>

    <table class="table-element">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Prènom</th>
                <th>Poste</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <form action="{{ route('equipe.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="ajouter-produit">
                    <td><input type="file" class="form-control" id="image" name="image"></td>
                    <td><input type="text" class="form-control" id="nom" name="nom"></td>
                    <td><input type="text" class="form-control" id="prenom" name="prenom"></td>
                    <td><input type="text" class="form-control" id="poste" name="poste"></td>
                    <td><input type="number" min="1" class="form-control" id="position" name="position"></td>
                    <td><button type="submit" class="btn btn-primary">Ajouter membre</button></td>
                </div>
            </form>

        </tbody>
    </table>

    <h2>Liste des membres</h2>
    <table class="table-element">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Prènom</th>
                <th>Poste</th>
                <th>Position</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>

        <tbody>
            @foreach($membres as $membre)
            <tr>
                <form action="{{ route('equipe.modifier', ['id' => $membre->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <td>
                        <img src="{{ asset('storage/equipe_images/' . $membre->image) }}" alt="$membre->nom" width="80">
                        <input type="file" id="image" name="image">
                    </td>

                    <td><input type="text" id="nom" name="nom" value="{{ $membre->nom }}"></td>
                    <td><input type="text" id="prenom" name="prenom" value="{{ $membre->prenom }}"></td>
                    <td><input type="text" name="poste" value="{{ $membre->poste }}"></td>
                    <td><input type="number" name="position" value="{{ $membre->position }}"></td>
                    <td><button type="submit" class="btn btn-primary btn-modifier">Modifier</button></td>
                </form>
                <td>
                    <form action="{{ route('equipe.supprimer', $membre->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>
@endsection