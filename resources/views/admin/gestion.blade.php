@extends('layouts.app')

@section('content')
<div>
    <h1>Page d'administration</h1>
    <p>Vous pouvez gérer les produits ici</p>
    <a href="{{ route('admin.ajouter-produit') }}">Ajouter Produit</a>
    <a href="{{ route('admin.liste-produit') }}">Accéder à la liste des produits</a>

    <p>vous pouvez gerer les comptes   ici</p>
    <!-- acceder a la liste des comptes -->
    <a href="{{ route('admin.liste-compte') }}">Accéder à la liste des comptes</a>

    <p>vous pouvez gerer les commandes ici</p>
    <!-- acceder a la liste des commandes -->
    <a href="{{ route('admin.liste-commande') }}">Accéder à la liste des commandes</a>

    <!-- acceder a la liste des coachs -->
    <p>vous pouvez gerer les coachs ici</p>
    <a href="{{ route('admin.ajouter-coach') }}">Ajouter un coach</a>
    <a href="{{ route('admin.liste-coach') }}">Accéder à la liste des coachs</a>

    <!-- acceder au tournoi et en créer -->
    <p>vous pouvez gerer les tournois ici</p>
    <a href="{{ route('admin.ajouter-tournoi') }}">Ajouter un tournoi</a>
    <a href="{{ route('admin.liste-tournoi') }}">Accéder à la liste des tournois</a>


</div>
@endsection