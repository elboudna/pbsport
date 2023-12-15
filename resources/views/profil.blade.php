@extends('layouts.app')

@section('title', 'Mon profil')

@section('content')
<section id="profil">
    <h2>Profil</h2>

    <div class="flex-row">
        <div id="image-profil">
            <form method="POST" action="{{ route('modifierimage') }}" enctype="multipart/form-data">
                @csrf
                <!-- ... (other form fields) -->
                @if ($imageFileName)
                <img src="{{ asset('storage/profile_images/' . $imageFileName) }}" alt="Profile Image">
                @else
                <img src="{{ asset('image/no-profil-pic.jpg') }}" alt="Default Image">
                @endif
                <p>Photo de profil</p>
                <div class="flex-row center-flex">
                    <label for="file-input" class="button-submit">Choisir fichier</label>
                    <input type="file" id="file-input" name="photo" accept="image/*" style="display: none;">
                    <button type="submit" class="button-enregistrer">Enregistrer</button>
                </div>

            </form>
        </div>

        <div id="info-profil">
            <form id="form-profil" method="POST" action="{{ route('modifierprofil') }}">
                @csrf
                <div class="infoprofil">
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
                            <option value="2.0" {{ $user->niveau === '2.0' ? 'selected' : '' }}>2.0</option>
                            <option value="2.5" {{ $user->niveau === '2.5' ? 'selected' : '' }}>2.5</option>
                            <option value="3.0" {{ $user->niveau === '3.0' ? 'selected' : '' }}>3.0</option>
                            <option value="3.5" {{ $user->niveau === '3.5' ? 'selected' : '' }}>3.5</option>
                            <option value="4.0" {{ $user->niveau === '4.0' ? 'selected' : '' }}>4.0</option>
                            <option value="4.5" {{ $user->niveau === '4.5' ? 'selected' : '' }}>4.5</option>
                            <option value="5.0" {{ $user->niveau === '5.0' ? 'selected' : '' }}>5.0</option>
                        </select><br>
                    </div>
                </div>
                <div class="btnprofil">
                    <button type="submit" class="button-submit">Sauvegarder infos</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection