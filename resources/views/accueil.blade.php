@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id="section-banniere-accueil">
    @foreach($bannieres as $banniere)
    <div class="slide">
        <img src="{{ asset('storage/bannieres/' . $banniere->image) }}" alt="{{ $banniere->titre }}">
        <div class="text">
            <p>{{ $banniere->titre }}</p>
            <a href="{{ $banniere->url }}">En savoir plus!</a>
        </div>
    </div>
    @endforeach
</section>


<section id="section-bienvenue">
    <div id="bienvenue-gauche">
        <img src="{{ asset('image/accueil.png') }}" alt="Bienvenue">
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

<section id="section-evenement-accueil" class="bggris">
    <p id="titre-event-accueil-resp">Prochain évènement</p>
    <p class="vert">Venez participer!</p>
    <div class="event">
        @foreach($evenements as $evenement)
        <div class="evenement-div-accueil">
            <div class="evenement-img">
                <img src="{{ asset('storage/evenement_images/' . $evenement->image) }}" alt="{{ $evenement->nom }}">
            </div>
            <div class="evenement-flex">
                <h3>{{ $evenement->nom }}</h3>
                <p>Date de début : {{ \Carbon\Carbon::parse($evenement->date_debut)->isoFormat('D MMMM YYYY', 'Do MMMM YYYY') }}</p>
                <div class="btn-ensavoirplus-event">
                    <a href="{{ route('evenement.show', $evenement->id) }}">En savoir en plus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="button-center btn-accueil">
        <a class="bgvert blanc" href="{{ route('evenements') }}">Nos évènements</a>
    </div>
</section>

<section id="section-galerie-accueil">
    <p>Dernières photos</p>
    <p class="vert">Notre belle galerie de photos</p>
    <p>Notre Academie est fier de la réussite de ses membres et veut partager leurs meilleurs moments</p>
    <div id="galerie-images-accueil" class="image-slider">
        <img src="" alt="Hello">
        <img src="" alt="You">
        <img src="" alt="World">
        <img src="" alt="!">
    </div>
    <div class="btn-accueil button-center">
        <a class="bggris vert" href="{{ route('galerie') }}">Notre galerie</a>
    </div>
</section>

<section id="section-produit-accueil" class="bggris">
    <p>Produits vedettes</p>
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
            <p class="prix-produit-accueil vert">100$</p>
        </div>
        <div class="produit-accueil">
            <img src="" alt="">
            <p class="nom-produit-accueil">Nom produit</p>
            <p class="prix-produit-accueil vert">200$</p>
        </div>
        <div class="produit-accueil">
            <img src="" alt="">
            <p class="nom-produit-accueil">Nom produit</p>
            <p class="prix-produit-accueil vert">30$</p>
        </div>
    </div>
    <div class="button-center btn-accueil">
        <a class="bgvert blanc" href="{{ route('magasin') }} ">Nos produits</a>
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
        <a class="bggris vert" href="{{ route('coachs') }}">Nos coachs</a>
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


        function initializeSlider(slides, containerId) {
            const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            if (screenWidth <= 425) {
                let currentSlide = 0;
                const dotsContainer = document.createElement('div');
                dotsContainer.classList.add('slider-dots');
                document.getElementById(containerId).insertAdjacentElement('afterend', dotsContainer);

                // Create dots based on the number of slides
                slides.forEach((slide, index) => {
                    const dot = document.createElement('span');
                    dot.classList.add('slider-dot');
                    dot.addEventListener('click', () => showSlide(index));
                    dotsContainer.appendChild(dot);
                });

                // Show the initial dot as active
                dotsContainer.children[currentSlide].classList.add('active');

                function showSlide(index) {
                    slides.forEach((slide) => (slide.style.display = 'none'));
                    dotsContainer.children[currentSlide].classList.remove('active');

                    currentSlide = index;

                    slides[currentSlide].style.display = 'block';
                    dotsContainer.children[currentSlide].classList.add('active');
                }

                // Auto-advance slides every 3 seconds
                setInterval(() => {
                    const nextSlide = (currentSlide + 1) % slides.length;
                    showSlide(nextSlide);
                }, 3000);
            }
        }

        // Usage
        const galerieSlides = document.querySelectorAll('.image-slider img');
        initializeSlider(galerieSlides, 'galerie-images-accueil');

        const produitSlides = document.querySelectorAll('.produit-accueil');
        initializeSlider(produitSlides, 'produits-accueil');


    });
</script>
@endsection