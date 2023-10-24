@extends('layouts.app')

@section('title', 'Mon profil')

@section('content')
<section id="profil">
    <h2>Joueur</h2>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    @if(auth()->user()->role_id == 3)
        <a href="{{ route('admin.gestion') }}">Accéder à la gestion</a>
    @endif

    <div class="flex-row">
        <form method="POST" action="{{ route('modifierimage') }}" enctype="multipart/form-data">
            @csrf
            <!-- ... (other form fields) -->
            <div id="image-profil">
                <div id="image-profil">
                    @if ($imageFileName)
                    <img src="{{ asset('storage/profile_images/' . $imageFileName) }}" alt="Profile Image">
                    @else
                    <img src="{{ asset('path_to_default_image/default.jpg') }}" alt="Default Image">
                    @endif
                </div>
                <p>Ajouter une photo</p>
                <input type="file" id="photo" name="photo" accept="image/*">
                <button type="submit">Enregistrer</button>
            </div>
        </form>


        <div id="info-profil">
            <form id="form-profil" method="POST" action="{{ route('modifierprofil') }}">
                @csrf
                <div class="form-gau-dro">
                    <label for="nom">Nom</label>
                    <input class="form_input" type="text" id="nom" name="nom" value="{{ $user->nom }}" required><br>
                </div>

                <div class="form-gau-dro">
                    <label for="prenom">Prénom</label>
                    <input class="form_input" type="text" id="prenom" name="prenom" value="{{ $user->prenom }}" required><br>
                </div>

                <div class="form-gau-dro">
                    <label for="email">E-mail</label>
                    <input class="form_input" type="email" id="email" name="email" value="{{ $user->email }}" required readonly><br>
                </div>

                <div class="form-gau-dro">
                    <label for="adresse">Adresse</label>
                    <input class="form_input" type="text" id="adresse" name="adresse" value="{{ $user->adresse }}"><br>
                </div>

                <div class="form-gau-dro">
                    <label for="date_de_naissance">Date de naissance</label>
                    <input class="form_input" type="date" id="date_de_naissance" name="date_de_naissance" value="{{ $user->date_de_naissance }}"><br>
                </div>

                <div class="form-gau-dro">
                    <label for="sexe">Sexe</label>
                    <select class="form_select" id="sexe" name="sexe" required>
                        <option value="homme" {{ $user->sexe === 'homme' ? 'selected' : '' }}>Homme</option>
                        <option value="femme" {{ $user->sexe === 'femme' ? 'selected' : '' }}>Femme</option>
                    </select><br>
                </div>

                <div class="form-gau-dro">
                    <label for="niveau">Niveau</label>
                    <select class="form_select" id="niveau" name="niveau" required>
                        <option value="débutant" {{ $user->niveau === 'débutant' ? 'selected' : '' }}>2.0</option>
                        <option value="intermédiaire" {{ $user->niveau === 'intermédiaire' ? 'selected' : '' }}>2.5</option>
                        <option value="avancé" {{ $user->niveau === 'avancé' ? 'selected' : '' }}>3.0</option>
                        <option value="avancé" {{ $user->niveau === 'avancé' ? 'selected' : '' }}>3.5</option>
                        <option value="avancé" {{ $user->niveau === 'avancé' ? 'selected' : '' }}>4.0</option>
                        <option value="avancé" {{ $user->niveau === 'avancé' ? 'selected' : '' }}>4.5</option>
                        <option value="avancé" {{ $user->niveau === 'avancé' ? 'selected' : '' }}>5.0</option>
                    </select><br>
                </div>


                <div class="button-center">
                    <button type="submit" class="button-submit">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection