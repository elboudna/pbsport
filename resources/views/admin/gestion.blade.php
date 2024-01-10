@extends('layouts.app')

@section('content')
<div id="section-admin">
    <h1>Page d'administration</h1>

    <div class="flex-divs-admin">


        <div class="div-admin">
            <h3>Produits</h3>
            <a href="{{ route('admin.ajouter-produit') }}">Ajouter Produit</a>
            <a href="{{ route('admin.liste-produit') }}">Liste des produits</a>
        </div>

        <div class="div-admin">
            <h3>Evènements</h3>
            <a href="{{ route('admin.ajouter-evenement') }}">Ajouter un évènement</a>
            <a href="{{ route('admin.liste-evenement') }}">Liste des évènements</a>
        </div>

        <div class="div-admin">
            <h3>Coach</h3>
            <a href="{{ route('admin.ajouter-coach') }}">Ajouter un coach</a>
            <a href="{{ route('admin.liste-coach') }}">Liste des coachs</a>
        </div>

        <div class="div-admin">
            <h3>Galerie</h3>
            <a href="{{ route('admin.liste-commande') }}">Ajouter des images</a>
            <a href="{{ route('admin.liste-commande') }}">Liste des images</a>
        </div>

        <div class="div-admin">
            <h3>Page d'accueil</h3>
            <a href="{{ route('admin.bannieres') }}">Gestion des bannières</a>
            <a href="{{ route('admin.liste-commande') }}">Produits vedettes</a>
        </div>

        <div class="div-admin">
            <h3>Comptes</h3>
            <a href="{{ route('admin.liste-compte') }}">Liste des comptes</a>
        </div>


        <div class="div-admin">
            <h3>Commandes</h3>
            <a href="{{ route('admin.liste-commande') }}">Liste des commandes</a>
        </div>

        <div class="div-admin">
            <h3>Abonnement</h3>
            <a href="{{ route('admin.liste-commande') }}">Liste des abonnés</a>
        </div>


    </div>

</div>
@endsection