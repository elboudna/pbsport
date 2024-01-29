@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Partenaires</h2>
</div>

<section id="section-partenaires">
    <div id="partenaire-majeur">
        <h2>Partenaire majeur</h2>
        <a target="_blank" href="https://tennis13.com/en/pickleball-2/"><img src="{{ asset('image/partenaires/tennis13.png') }}" alt=""></a>
    </div>

    <div id="partenaires">
        <h2>Autres partenaires</h2>
        <div>
            <a target="_blank" href="https://hudefsport.com/"><img src="{{ asset('image/partenaires/hudef.png') }}" alt=""></a>
            <a target="_blank" href="https://pbsport.ca/"><img src="{{ asset('image/partenaires/pbsport.png') }}" alt=""></a>
            <a target="_blank" href="https://www.onixpickleball.com/"><img src="{{ asset('image/partenaires/onix.png') }}" alt=""></a>
        </div>
    </div>
</section>

@endsection