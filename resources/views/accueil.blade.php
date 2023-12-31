@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id="section-banniere-accueil">
    <div class="slide">
        <img src="{{ asset('image/ban1.jpg') }}" alt="Image 1">
        <div class="text">
            <p>Text for Image 1</p>
            <a href="">En savoir plus!</a>
        </div>
    </div>
    <div class="slide">
        <img src="{{ asset('image/ban2.jpg') }}" alt="Image 2">
        <div class="text">
            <p>Text for Image 2</p>
            <a href="">En savoir plus!</a>
        </div>
    </div>
    <div class="slide">
        <img src="{{ asset('image/ban3.jpg') }}" alt="Image 3">
        <div class="text">
            <p>Text for Image 3</p>
            <a href="">En savoir plus!</a>
        </div>
    </div>
</section>

<section id="section-bienvenue">
    <div id="bienvenue-gauche">
        <img src="" alt="">
    </div>
    <div id="bienvenue-droite" class="bggris">
        <p>Bienvenue</p>
        <p class="vert">à notre academie de pickelball</p>
        <p>Founded in 1964 by a team of professional tennis players our club is based in one of the most picturesque
            areas of the country and is ideal for family membership.</p>
        <div class="button-center">
            <a class="bgvert" href="#">En savoir plus!</a>
        </div>
    </div>
</section>

<section id="section-evenement-accueil" class="bggris margin-bottom">
    <p>Prochain évènement</p>
    <p class="vert">evenement nom</p>
    <div id="produits-accueil">
        <div class="produit-accueil">
            <img src="" alt="IMAGE">
            <p class="nom-produit-accueil">Date</p>
        </div>
    </div>
    <div class="button-center btn-accueil">
        <a class="bgvert gris" href="#">En savoir plus</a>
    </div>
</section>

<section id="section-galerie-accueil">
    <p>Dernières photos</p>
    <p class="vert">Notre belle galerie de photos</p>
    <p>Notre Academie est fier de la réussite de ses membres et veut partager leurs meilleurs moments</p>
    <div id="galerie-images-accueil">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div class="btn-accueil button-center">
        <a class="bggris vert" href="#">Voir plus</a>
    </div>
</section>

<section id="section-produit-accueil" class="bggris margin-bottom">
    <p>Produits vedette</p>
    <p class="vert">Nouvel arrivage/Meilleur vente</p>
    <div id="produits-accueil">
        <div class="produit-accueil">
            <img src="" alt="">
            <p class="nom-produit-accueil">Nom produit</p>
            <p class="prix-produit-accueil vert">90$</p>
        </div>
        <div class="produit-accueil">
            <img src="" alt="">
            <p class="nom-produit-accueil">Nom produit</p>
            <p class="prix-produit-accueil vert">90$</p>
        </div>
        <div class="produit-accueil">
            <img src="" alt="">
            <p class="nom-produit-accueil">Nom produit</p>
            <p class="prix-produit-accueil vert">90$</p>
        </div>
        <div class="produit-accueil">
            <img src="" alt="">
            <p class="nom-produit-accueil">Nom produit</p>
            <p class="prix-produit-accueil vert">90$</p>
        </div>
    </div>
    <div class="button-center btn-accueil">
        <a class="bgvert gris" href="#">Voir plus</a>
    </div>
</section>

<section id="section-coach-accueil">
    <p>Nos Coachs</p>
    <p class="vert">Notre équipe</p>
    <p>Notre académie est honoré de travailler avec les meilleurs joueurs de pickelball de la région du grand Montréal, qui peuvent maintenant devenir votre coach personnel et vous aider à progresser</p>
    <div id="coachs-accueil">
        <div class="coach-accueil">
            <div class="image-contact-coach-accueil">
                <div class="image-coach-accueil">
                    <img src="" alt="">
                </div>
                <div class="contact-coach-accueil">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
            </div>
            <div class="info-coach-accueil">
                <p class="nom-coach-accueil">Auristella</p>
                <p class="titre-coach-accueil">Coach</p>
                <p class="description-coach-accueil">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt incidunt cum, similique vitae odio velit ea totam.</p>
            </div>
        </div>
        <div class="coach-accueil">
            <div class="image-contact-coach-accueil">
                <div class="image-coach-accueil">
                    <img src="" alt="">
                </div>
                <div class="contact-coach-accueil">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
            </div>
            <div class="info-coach-accueil">
                <p class="nom-coach-accueil">Mehdi</p>
                <p class="titre-coach-accueil">Coach</p>
                <p class="description-coach-accueil">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt incidunt cum, similique vitae odio velit ea totam.</p>
            </div>
        </div>

    </div>
    <div class="button-center btn-accueil">
        <a class="bggris vert" href="#">Voir plus</a>
    </div>
</section> 

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide(slideIndex) {
            slides.forEach((slide, index) => {
                slide.classList.toggle('active-slide', index === slideIndex);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Initial delay to make sure the images are loaded
        setTimeout(function() {
            showSlide(currentSlide);
            setInterval(nextSlide, 4000);
        }, 0); // Adjust the delay as needed
    });
</script>
@endsection