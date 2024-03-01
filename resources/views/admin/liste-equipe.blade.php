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
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <form action="{{ route('galerie.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="ajouter-produit">
                    <td><input type="file" class="form-control" id="image" name="image"></td>
                    <td><input type="text" class="form-control" id="nom" name="nom"></td>
                    <td><input type="text" class="form-control" id="prenom" name="prenom"></td>
                    <td><input type="text" class="form-control" id="poste" name="poste"></td>
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
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($equipes as $equipe)
            <tr>
                <td><img src="{{ asset('storage/' . $equipe->image) }}" alt="image de l'équipe" width="100"></td>
                <td>{{ $equipe->nom }}</td>
                <td>{{ $equipe->prenom }}</td>
                <td>{{ $equipe->poste }}</td>
                <td>
                    <a href="{{ route('admin.modifier-coach', $equipe->id) }}">Modifier</a>
                    <a href="{{ route('admin.supprimer-coach', $equipe->id) }}">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    
</div>
@endsection