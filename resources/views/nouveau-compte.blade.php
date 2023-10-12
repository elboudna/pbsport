@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id="connexion">
    <div class="login-form">
        <h2 class="gris">Créer un compte</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf <!-- CSRF token -->

            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe:</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmer le mot de passe:</label>
                <input type="password" id="mot_de_passe_confirmation" name="mot_de_passe_confirmation" required>
            </div>
            <div class="submitbtn form-group">
                <input type="submit" value="Créer un compte">
            </div>
        </form>

        <p class="gris question-compte">Vous avez déja un compte ?</p>
        <a class="lien-compte" href="{{ route('showlogin') }}">Se connecter</a>
    </div>
</section>
@endsection