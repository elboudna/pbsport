@extends('layouts.app')

@section('content')
<div>
    <a href="{{ route('admin.ajouter-produit') }}">Ajouter Produit</a>
    <a href="{{ route('admin.liste-produit') }}">Accéder à la liste des produits</a>
</div>
@endsection