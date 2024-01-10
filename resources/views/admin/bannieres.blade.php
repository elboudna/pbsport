@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="table-admin">
    <h1>Bannières</h1>

    <table class="table-element">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Sous-titre</th>
                <th>Url</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <form action="{{ route('banniere.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="ajouter-produit">
                    <td><input type="file" class="form-control" id="image" name="image"></td>
                    <td><input type="text" name="titre"></td>
                    <td><input type="text" name="sous_titre"></td>
                    <td><input type="text" name="url"></td>
                    <td><button type="submit" class="btn btn-primary">Ajouter une bannière</button></td>
                </div>
            </form>

            @foreach($bannieres as $banniere)
            <tr>
                <td class="image-ban"><img src="{{ asset('storage/bannieres/' . $banniere->image) }}" alt=""></td>
                <td>{{ $banniere->titre }}</td>
                <td>{{ $banniere->sous_titre }}</td>
                <td>{{ $banniere->url }}</td>
                <td>
                    <form action="{{ route('banniere.supprimer', $banniere->id) }}" method="POST">
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