@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="event-div">
    <h1>Modifier Evenement: {{ $evenement->type }} - {{ $evenement->nom }}</h1>
    
    <form method="POST" action="{{ route('evenement.modifier', ['id' => $evenement->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div id="event-banner">
            <label for="image">Image:</label>
            <input type="file" name="image">
            <img class="img-modifier" src="{{ asset('storage/evenement_images/' . $evenement->image) }}" alt="{{ $evenement->nom }}">

            <label for="description">Description:</label>
            <textarea name="description">{{ $evenement->description }}</textarea>
        </div>
        <!-- Event Details -->
        <div class="event-details">
            <h3>Details</h3>
            <div class="event-details-flex">
                <div class="event-details-gauche">
                    <label for="date_debut" class="detail-titre">Date:</label>
                    <input type="date" name="date_debut" class="detail-data" value="{{ \Carbon\Carbon::parse($evenement->date_debut)->format('Y-m-d') }}">

                    <label for="heure" class="detail-titre">Heure:</label>
                    <input type="time" name="heure" class="detail-data" value="{{ \Carbon\Carbon::parse($evenement->heure)->format('H:i') }}">

                    <label for="prix" class="detail-titre">Prix:</label>
                    <input type="number" name="prix" class="detail-data" value="{{ $evenement->prix }}">
                </div>
                <div class="event-details-droite">
                    <label for="niveau" class="detail-titre">Niveau:</label>
                    <select name="niveau" class="form-control">
                        <option value="Débutant" @if($evenement->niveau === 'Debutant') selected @endif>Débutant</option>
                        <option value="Intermédiaire" @if($evenement->niveau === 'Intermediaire') selected @endif>Intermédiaire</option>
                        <option value="Avancé" @if($evenement->niveau === 'Avance') selected @endif>Avancé</option>
                    </select>


                    <label for="nbr_joueur" class="detail-titre">Nombre de joueurs:</label>
                    <input type="number" name="nbr_joueur" class="detail-data" value="{{ $evenement->nbr_joueur }}">

                    <label for="categorie" class="detail-titre">Catégorie:</label>
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" id="double_mixte" name="categorie[]" value="Double mixte" @if(in_array('Double mixte', json_decode($evenement->categorie))) checked @endif> Double mixte
                        </label>
                        <label>
                            <input type="checkbox" id="double" name="categorie[]" value="Double" @if(in_array('Double', json_decode($evenement->categorie))) checked @endif> Double
                        </label>
                        <label>
                            <input type="checkbox" id="simple" name="categorie[]" value="Simple" @if(in_array('Simple', json_decode($evenement->categorie))) checked @endif> Simple
                        </label>
                    </div>


                </div>
            </div>
        </div>

        <!-- Location Details -->
        <div class="event-details">
            <h3>Lieu</h3>
            <div class="event-details-flex">
                <div class="event-details-gauche">
                    <label for="lieu" class="detail-titre">Terrain:</label>
                    <input type="text" name="lieu" class="detail-data" value="{{ $evenement->lieu }}">
                </div>
                <div class="event-details-droite">
                    <label for="adresse" class="detail-titre">Adresse:</label>
                    <input type="text" name="adresse" class="detail-data" value="{{ $evenement->adresse }}">
                </div>
            </div>
        </div>

        <!-- Contact Details -->
        <div class="event-details">
            <h3>Contact</h3>
            <div class="event-details-flex">
                <div class="event-details-gauche">
                    <label for="telephone" class="detail-titre">Téléphone:</label>
                    <input type="text" name="telephone" class="detail-data" value="{{ $evenement->telephone }}">
                </div>
                <div class="event-details-droite">
                    <label for="email" class="detail-titre">Email:</label>
                    <input type="text" name="email" class="detail-data" value="{{ $evenement->email }}">
                </div>
            </div>
        </div>

        <div class="button-center margin-top margin-bottom">
            <button type="submit" class="btnpbsport">Mettre à jour</button>
        </div>
    </form>
</div>

@endsection