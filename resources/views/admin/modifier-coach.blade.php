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
                    <option value="2.0" @if($coach->niveau === '2.0') selected @endif>2.0</option>
                    <option value="2.5" @if($coach->niveau === '2.5') selected @endif>2.5</option>
                    <option value="3.0" @if($coach->niveau === '3.0') selected @endif>3.0</option>
                    <option value="3.5" @if($coach->niveau === '3.5') selected @endif>3.5</option>
                    <option value="4.0" @if($coach->niveau === '4.0') selected @endif>4.0</option>
                    <option value="4.5" @if($coach->niveau === '4.5') selected @endif>4.5</option>
                    <option value="5.0" @if($coach->niveau === '5.0') selected @endif>5.0</option>
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