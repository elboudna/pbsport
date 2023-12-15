<!-- resources/views/liste-compte.blade.php -->

@extends('layouts.app')

@section('content')
<div class="table-admin">

<h1>Liste coachs</h1>

<table class="table-element">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Niveau</th>
        </tr>
    </thead>
    <tbody>
        @foreach($coachs as $coach)
        <tr>
            <td>{{ $coach->id }}</td>
            <td>{{ $coach->nom }}</td>
            <td>{{ $coach->prenom }}</td>
            <td>{{ $coach->email }}</td>
            <form action="{{ route('modifier-coach', $coach->id) }}" method="POST">
                @csrf
                @method('PUT')
                <td>
                    <select name="niveau">
                        <!-- Populate the dropdown with your niveau options -->
                        <option value="2.0" {{ $coach->niveau === '2.0' ? 'selected' : '' }}>2.0</option>
                        <option value="2.5" {{ $coach->niveau === '2.5' ? 'selected' : '' }}>2.5</option>
                        <option value="3.0" {{ $coach->niveau === '3.0' ? 'selected' : '' }}>3.0</option>
                        <option value="3.5" {{ $coach->niveau === '3.5' ? 'selected' : '' }}>3.5</option>
                        <option value="4.0" {{ $coach->niveau === '4.0' ? 'selected' : '' }}>4.0</option>
                        <option value="4.5" {{ $coach->niveau === '4.5' ? 'selected' : '' }}>4.5</option>
                        <option value="5.0" {{ $coach->niveau === '5.0' ? 'selected' : '' }}>5.0</option>
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
