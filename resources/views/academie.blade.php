@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Académie</h2>
</div>

<main id="section-academie">
    
    <h1 id="academie-heading">Bienvenue à l'Académie de pickleball PBSport Plus</h1>
    <img class="img-heading" src="{{ asset('image/academie/academie3.png') }}" alt="Bienvenue">
    <p class="academie-description">Notre Académie est un lieu de formation et de perfectionnement pour les joueurs de tous les niveaux. Que vous soyez débutant ou avancé, notre équipe de professionnels est là pour vous aider à atteindre vos objectifs. Nous offrons des cours privés, des cliniques, des camps d'entraînement et des programmes de développement pour les joueurs de tous âges. Notre mission est de vous aider à devenir le meilleur joueur possible tout en vous amusant. Venez nous voir et découvrez pourquoi PBSport Plus est le meilleur endroit pour jouer au pickleball.</p>

    <h2>l'Académie</h2>
    <section id="pourquoi">
        <div id="img-flex-academie">
            <div>
                <img src="{{ asset('image/academie/pourquoi.JPG') }}" alt="Pourquoi">
                <img src="{{ asset('image/academie/pourquoi2.JPEG') }}" alt="Pourquoi">
            </div>
            <div>
                <img src="{{ asset('image/academie/pourquoi3.JPG') }}" alt="Pourquoi">
            </div>
        </div>
        <div>
            <h3>Un environnement stimulant pour votre progression</h3>
            <p class="academie-description">L'académie PBSportPlus est un lieu dédié à l'apprentissage et à la pratique du pickleball, animé par une équipe d'entraîneurs expérimentés et passionnés. Nous avons créé un environnement stimulant où vous pourrez progresser, vous dépasser et découvrir le plaisir de ce sport en plein essor.</p>

            <h3>Adapté à tous les niveaux</h3>
            <p class="academie-description">Nous offrons une variété de programmes adaptés à tous les niveaux. Que vous soyez un débutant souhaitant acquérir les bases du jeu ou un joueur avancé cherchant à perfectionner vos compétences techniques, nous avons des cours sur mesure pour répondre à vos besoins.</p>
        </div>
    </section>

    <h2>Nos programmes</h2>
    <section id="programme">
        <div>
            <h3>Entraînement complet et personnalisé</h3>
            <p class="academie-description">Nos programmes comprennent des sessions d'entraînement individuelles et en groupe, des ateliers tactiques, des exercices de conditionnement physique spécifiques au pickleball, ainsi que des séances de jeu supervisées par nos entraîneurs experts. Notre approche pédagogique met l'accent sur la technique, la stratégie et la compréhension du jeu, afin de vous aider à progresser rapidement et efficacement.</p>
            <h3>Ressources pour exceller</h3>
            <p class="academie-description">En plus de l'entraînement sur le terrain, nous offrons également des ressources complémentaires pour améliorer votre performance. Vous aurez accès à des vidéos d'entraînement en ligne, des conseils de professionnels, des analyses vidéo personnalisées et des séminaires sur des sujets clés du pickleball. Nous sommes déterminés à vous aider à atteindre vos objectifs et à vous accompagner tout au long de votre parcours.</p>
        </div>
        <div>
            <img src="{{ asset('image/academie/programme.jpg') }}" alt="Programme">
        </div>
    </section>

    <h2>Notre équipe</h2>
    <section id="equipe">
        <div>
            <img src="{{ asset('image/academie/equipe.jpg') }}" alt="Equipe">
        </div>
        <div>
            <h3>Passion et Expertise</h3>
            <p class="academie-description">Notre équipe est composée d'entraîneurs certifiés et expérimentés, qui partagent une passion commune pour le pickleball. Ils sont dévoués à votre réussite et mettront tout en œuvre pour vous aider à progresser et à atteindre vos objectifs. Ils sont à l'écoute de vos besoins, vous encourageront à repousser vos limites et vous transmettront leur savoir-faire avec enthousiasme et bienveillance.</p>

            <h3>Fair-play et Développement Personnel</h3>
            <p class="academie-description">En plus de leur expertise technique, nos entraîneurs sont des modèles de fair-play et d'éthique sportive. Ils vous aideront à développer des compétences essentielles telles que la concentration, la persévérance, la gestion du stress et la coopération. Ils vous accompagneront dans votre progression, vous motiveront à donner le meilleur de vous-même et vous aideront à développer une attitude positive sur et en dehors du terrain.</p>
        </div>
    </section>

    <h2>Joignez-vous à nous!</h2>
    <section id="joignez-nous">
        <div>
            <img src="{{ asset('image/academie/PBTeam.jpg') }}" alt="Joignez-nous">
        </div>
        <div>
            <div>
                <h3>Explorez de Nouvelles Possibilités</h3>
                <p class="academie-description">Rejoignez l'Académie de pickleball PBSport Plus et découvrez une nouvelle dimension de votre jeu. Que vous souhaitiez jouer en compétition, vous entraîner en vue de tournois ou simplement vous amuser et rester actif, notre équipe dévouée est là pour vous soutenir et vous guider. Ne manquez pas cette opportunité unique de devenir un joueur de pickleball accompli !</p>
            </div>

            <div>
                <h3>Inscrivez-vous dès Aujourd'hui</h3>
                <p class="academie-description">Pour vous inscrire à l'Académie de pickleball PBSport Plus ou pour obtenir plus d'informations sur nos programmes, contactez nous via le formulaire ci-dessous ou appelez notre équipe d'accueil au 5140202020. N'hésitez pas à nous contacter pour discuter de vos besoins spécifiques et trouver le programme qui vous convient le mieux.</p>
            </div>
        </div>

    </section>

    <h2>Contactez-nous</h2>
    <section id="contact" class="form-contact">

        <div class="form-pbsport">

            <form action="{{ route('contact.send') }}" method="POST">
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
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" required></textarea>
                </div>

                <div class="button-center">
                    <button type="submit" class="bgvert">Envoyer</button>
                </div>

            </form>
        </div>

    </section>

    <h2>À bientôt sur les terrains</h2>

</main>

@endsection