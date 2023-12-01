@extends('layouts.app')

@section('content')

    <h2>Liste des événements</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Lieu</th>
                <th>Adresse</th>
                <th>Nombre de joueurs</th>
                <th>Prix</th>
                <th>Classification</th>
                <th>Niveau</th>
                <th>Image</th>

                <!-- Add other columns as needed -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evenements as $evenement)
            <tr>
                <td>{{ $evenement->id }}</td>
                <td>{{ $evenement->type }}</td>
                <td>{{ $evenement->nom }}</td>
                <td>{{ $evenement->description }}</td>
                <td>{{ $evenement->date_debut }}</td>
                <td>{{ $evenement->heure }}</td>
                <td>{{ $evenement->lieu }}</td>
                <td>{{ $evenement->adresse }}</td>
                <td>{{ $evenement->nbr_joueur }}</td>
                <td>{{ $evenement->prix }}</td>
                <td>{{ $evenement->classification }}</td>
                <td>{{ $evenement->niveau }}</td>
                <td>{{ $evenement->image }}</td>
                <!-- Add other columns as needed -->
                <td>
                    <a href="{{ route('admin.modifier-evenement', $evenement->id) }}" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection