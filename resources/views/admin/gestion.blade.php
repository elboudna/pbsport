@extends('layouts.app')

@section('content')
<div>
    <h1>Page d'administration</h1>
    <p>Vous pouvez gérer les produits ici</p>
    <a href="{{ route('admin.ajouter-produit') }}">Ajouter Produit</a>
    <a href="{{ route('admin.liste-produit') }}">Accéder à la liste des produits</a>

    <p>vous pouvez gerer les comptes ici</p>
    <!-- acceder a la liste des comptes -->
    <a href="{{ route('admin.liste-compte') }}">Accéder à la liste des comptes</a>

    <!-- acceder au tournoi et en créer -->
    <p>vous pouvez gerer les évènements ici</p>
    <a href="{{ route('admin.ajouter-evenement') }}">Ajouter un évènement</a>
    <a href="{{ route('admin.liste-evenement') }}">Accéder à la liste des évènements</a>
    
    <p>vous pouvez gerer les commandes ici</p>
    <!-- acceder a la liste des commandes -->
    <a href="{{ route('admin.liste-commande') }}">Accéder à la liste des commandes</a>

    <!-- acceder a la liste des coachs -->
    <p>vous pouvez gerer les coachs ici</p>
    <a href="{{ route('admin.ajouter-coach') }}">Ajouter un coach</a>
    <a href="{{ route('admin.liste-coach') }}">Accéder à la liste des coachs</a>



</div>
@endsection