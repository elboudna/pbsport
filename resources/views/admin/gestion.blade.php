@extends('layouts.app')

@section('content')
<div class="bande">
    <h2>Page d'administration</h2>
</div>

<div id="section-admin">

    <div class="flex-divs-admin">

        <div class="div-admin">
            <h3>Produits</h3>
            <div>
                <a href="{{ route('admin.ajouter-produit') }}">Ajouter Produit</a>
                <a href="{{ route('admin.liste-produit') }}">Liste des produits</a>
            </div>
        </div>

        <div class="div-admin">
            <h3>Evènements</h3>
            <div>
                <a href="{{ route('admin.ajouter-evenement') }}">Ajouter un évènement</a>
                <a href="{{ route('admin.liste-evenement') }}">Liste des évènements</a>
            </div>
        </div>

        <div class="div-admin">
            <h3>Coach</h3>
            <div>
                <a href="{{ route('admin.ajouter-coach') }}">Ajouter un coach</a>
                <a href="{{ route('admin.liste-coach') }}">Liste des coachs</a>
            </div>
        </div>

        <div class="div-admin">
            <h3>Equipe</h3>
            <div>
                <a href="{{ route('admin.equipe') }}">Liste des membres d'équipe</a>
            </div>
        </div>

        <div class="div-admin">
            <h3>Galerie</h3>
            <div>
                <a href="{{ route('admin.galerie') }}">Gestion de la galerie</a>
            </div>
        </div>

        <div class="div-admin">
            <h3>Page d'accueil</h3>
            <div>
                <a href="{{ route('admin.bannieres') }}">Gestion des bannières</a>
                <a href="{{ route('admin.liste-commande') }}">Produits vedettes</a>
            </div>
        </div>

        <div class="div-admin">
            <h3>Comptes et abonnement</h3>
            <div>
                <a href="{{ route('admin.liste-compte') }}">Liste des comptes</a>
                <a href="{{ route('admin.liste-commande') }}">Liste des abonnés</a>
            </div>
        </div>

        <div class="div-admin">
            <h3>Commandes</h3>
            <div>
                <a href="{{ route('admin.liste-commande') }}">Liste des commandes</a>
            </div>
        </div>

        


    </div>

</div>
@endsection