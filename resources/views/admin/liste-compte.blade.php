<!-- resources/views/liste-compte.blade.php -->

@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="table-admin">
<h1>Liste compte</h1>

<table class="table-element">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Niveau</th>
            <th>Rôle</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->email }}</td>
            <form action="{{ route('modifier-utilisateur', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <td>
                    <select name="niveau">
                        <!-- Populate the dropdown with your niveau options -->
                        <option value="2.0" {{ $user->niveau === '2.0' ? 'selected' : '' }}>2.0</option>
                        <option value="2.5" {{ $user->niveau === '2.5' ? 'selected' : '' }}>2.5</option>
                        <option value="3.0" {{ $user->niveau === '3.0' ? 'selected' : '' }}>3.0</option>
                        <option value="3.5" {{ $user->niveau === '3.5' ? 'selected' : '' }}>3.5</option>
                        <option value="4.0" {{ $user->niveau === '4.0' ? 'selected' : '' }}>4.0</option>
                        <option value="4.5" {{ $user->niveau === '4.5' ? 'selected' : '' }}>4.5</option>
                        <option value="5.0" {{ $user->niveau === '5.0' ? 'selected' : '' }}>5.0</option>
                    </select>
                </td>
                <td>
                    <select name="role">
                        <!-- Populate the dropdown with your role options -->
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->role->id === $role->id ? 'selected' : '' }}>
                                {{ $role->role }}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <button class="bgvert btnpbsport" type="submit">Modifier</button>
                </td>
                </form>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
