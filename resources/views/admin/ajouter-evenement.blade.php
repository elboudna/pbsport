@extends('layouts.app')
@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<section class="form-section">

    <h1>Ajouter un événement</h1>

    <div class="form-pbsport">

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

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control" required>
            </div>
            
            <!-- Heure -->
            <div class="form-group">
                <label for="heure">Heure</label>
                <input type="time" name="heure" id="heure" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="date">Date limite d'inscription</label>
                <input type="date" name="date_limite_inscription" id="date_limite_inscription" class="form-control" required>
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

            <!-- Contact -->
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" name="telephone" id="telephone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <!-- Categorie -->
            
            <div class="form-group">
                <label>Catégorie</label>
                <div class="checkbox-group">
                    <label for="double_mixte">
                        <input type="checkbox" id="double_mixte" name="categorie[]" value="Double mixte"> Double mixte
                    </label>
                    <label for="double">
                        <input type="checkbox" id="double" name="categorie[]" value="Double"> Double
                    </label>
                    <label for="simple">
                        <input type="checkbox" id="simple" name="categorie[]" value="Simple"> Simple
                    </label>
                </div>
            </div>

            <!-- lien -->
            <div class="form-group">
                <label for="lien">Lien</label>
                <input type="text" name="lien" id="lien" class="form-control">
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

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="button-center">
                <button type="submit" class="bgvert btn btn-primary">Ajouter l'événement</button>
            </div>
        </form>
    </div>
</section>

@endsection