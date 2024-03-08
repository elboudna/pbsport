@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<section class="form-admin">

    <h1>Modifier le produit</h1>

    <div class="form-pbsport">
        <form method="POST" action="{{ route('coach.modifier', ['id' => $coach->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $coach->nom }}">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $coach->prenom }}">
            </div>

            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $coach->facebook }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $coach->email }}">
            </div>

            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $coach->telephone }}">
            </div>

            <div class="form-groupe">
                <label for="niveau">Niveau</label>
                <select class="form_select" id="niveau" name="niveau">
                    <option value="oui" {{ $coach->niveau == 'oui' ? 'selected' : '' }}>Oui</option>
                    <option value="non" {{ $coach->niveau == 'non' ? 'selected' : '' }}>Non</option>
                </select><br><br>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $coach->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <img src="{{ asset('storage/coach_images/' . $coach->photo) }}" alt="{{ $coach->nom }}">
                <input type="file" class="form-control" id="photo" name="photo">
            </div>

            <div class="button-center">
                <button type="submit" class="bgvert">Modifier</button>
            </div>
        </form>
    </div>
</section>

@endsection