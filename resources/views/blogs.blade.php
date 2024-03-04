<!-- resources/views/evenements/evenements.blade.php -->

@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Blog</h2>
</div>

<section id="section-blogs">

    @if($blogs->isEmpty())
    <div class="empty">
        <span>
            <p>Aucun blog trouvé!</p>
        </span>
        <p>Revenez plus tard.</p>
        <!-- retour à la page d'accueil -->
        <div class="lien-retour">
            <a href="{{ route('accueil') }}">Retour à la page d'accueil</a>
        </div>
    </div>
    @else
    <div class="blogs">

        @foreach($blogs as $blog)
        
        @endforeach
        @endif
    </div>


</section>
@endsection