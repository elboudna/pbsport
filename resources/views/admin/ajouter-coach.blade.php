@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<section class="form-admin">

    <h1>Ajouter un coach</h1>
    <div class="form-pbsport">
        <form action="{{ route('coach.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
            </div>

            <div class="form-groupe">
                <label for="niveau">Pro</label>
                <select class="form_select" id="niveau" name="niveau" required>
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                </select><br><br>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>

            <div class="button-center">
                <button type="submit" class="bgvert">Ajouter</button>
            </div>
        </form>
    </div>
</section>

@endsection