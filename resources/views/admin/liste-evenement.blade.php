@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="table-admin">

    <h1>Liste des événements</h1>

    <table class="table-element">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>Nombre de joueurs</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th>Niveau</th>

                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evenements as $evenement)
            <tr>
                <td>{{ $evenement->id }}</td>
                <td>{{ $evenement->type }}</td>
                <td>{{ $evenement->nom }}</td>
                <td>{{ \Carbon\Carbon::parse($evenement->date_debut)->isoFormat('D MMMM YYYY', 'Do MMMM YYYY') }}</td>
                <td>{{ $evenement->lieu }}</td>
                <td>{{ $evenement->nbr_joueur }}</td>
                <td>{{ $evenement->prix }}$</td>
                <td>{{ implode(', ', json_decode($evenement->categorie)) }}</td>
                <td>{{ $evenement->niveau }}</td>
                <td>
                    <a href="{{ route('admin.modifier-evenement', $evenement->id) }}" class="btn btn-primary">Modifier</a>
                </td>
                <td>
                    <form action="{{ route('evenement.supprimer', $evenement->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection