<!-- resources/views/liste-compte.blade.php -->

@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="table-admin">
    <h1>Liste coachs</h1>

    <table class="table-element">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Pro</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coachs as $coach)
            <tr>
                <td>{{ $coach->id }}</td>
                <td>{{ $coach->nom }}</td>
                <td>{{ $coach->prenom }}</td>
                <td>{{ $coach->email }}</td>
                <td>{{ $coach->niveau}} </td>
                <td>
                <a href="{{ route('admin.modifier-coach', $coach->id) }}" class="btn btn-primary">Modifier</a>
                </td>
                <td>
                <form action="{{ route('coach.supprimer', $coach->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection