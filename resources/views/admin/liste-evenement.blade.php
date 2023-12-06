@extends('layouts.app')

@section('content')
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
                <th>Classification</th>
                <th>Niveau</th>

                <th>Action</th>
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
                <td>{{ $evenement->classification }}</td>
                <td>{{ $evenement->niveau }}</td>
                <td>
                    <a href="{{ route('admin.modifier-evenement', $evenement->id) }}" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection