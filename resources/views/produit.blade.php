@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="margin-bottom margin-top" id="produit">
        <div class="flex-row">
            <div id="produit-image">
                <img src="" alt="">
            </div>
            <div id="produit-info">
                <p class="nom-produit">Raquette Carbon - PB Academie</p>
                <p class="prix-produit vert">180.00$</p>
                <p class="description-produit">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dignissimos quo numquam, nostrum eaque rem esse optio nulla qui modi reprehenderit, itaque aliquid architecto, quisquam quidem fuga tempora iste. Quibusdam!</p>
                <div class="quant-ajouter">
                    <input class="quantite" value="1" min="1" step="1" type="number" name="quantite">
                    <a class="btn-ajouter bgvert">Ajouter</a>
                </div>
                <div class="flex-column">
                    <p>Note</p>
                    <p>Etoiles</p>
                </div>
            </div>
        </div>

    </section>

    <!-- <section id="produit-detail">

        <div class="flex-column">
            <p>details</p>
        </div>
    </section> -->
@endsection