@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section id="connexion">
    <div class="login-form">
        <h2 class="gris">Connexion</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf <!-- CSRF token -->

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <div class="submitbtn form-group">
                <input type="submit" value="Se connecter">
            </div>
        </form>

        <p class="gris question-compte">Vous n'avez pas de compte ?</p>
        <a class="lien-compte" href="{{ route('showregister') }}">Créer un compte</a>
    </div>
</section>

@endsection