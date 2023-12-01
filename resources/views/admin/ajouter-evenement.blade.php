@extends('layouts.app')  
@section('content')

    <h2>Ajouter un événement</h2>

    <form action="{{ route('evenement.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Type -->
        <div class="form-group">
            <label for="type">Type d'événement</label>
            <select name="type" id="type" class="form-control">
                <option value="Tournoi">Tournoi</option>
                <option value="Bootcamp">Bootcamp</option>
                <option value="Formation">Formation</option>
            </select>
        </div>

        <!-- Nom -->
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <!-- Date -->
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date_debut" id="date_debut" class="form-control" required>
        </div>

        <!-- Heure -->
        <div class="form-group">
            <label for="heure">Heure</label>
            <input type="time" name="heure" id="heure" class="form-control" required>
        </div>

        <!-- Adresse -->
        <div class="form-group">
            <label for="adresse">Lieu</label>
            <input type="text" name="lieu" id="lieu" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control" required>
        </div>

        <!-- Nombre joueurs -->
        <div class="form-group">
            <label for="nombre_joueurs">Nombre de joueurs</label>
            <input type="number" name="nombre_joueurs" min="1" id="nombre_joueurs" class="form-control" required>
        </div>
        
        <!-- Prix -->
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix" min="1" class="form-control" required>
        </div>

        <!-- Classification -->
        <div class="form-group">
            <label for="classification">Classification</label>
            <input type="text" name="classification" id="classification" class="form-control" required>
        </div>

        <!-- Niveau -->
        <div class="form-group">
            <label for="niveau">Niveau</label>
            <select name="niveau" id="niveau" class="form-control">
                <option value="Débutant">Débutant</option>
                <option value="Intermédiaire">Intermédiaire</option>
                <option value="Avancé">Avancé</option>
            </select>
        </div>

        <!-- image -->
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Ajouter l'événement</button>
    </form>

@endsection
