<!-- resources/views/partials/header.blade.php -->

<header class="bgvert">
    <div id="desktop-nav">
        <div>
            <p>514-865-1102</p>
        </div>
        <div>
            <p>info@pbsportplus.com</p>
        </div>
        <div>
            <div class="user-menu">
                <p>
                    @auth
                    <a href="{{ route('profil') }}">{{ Auth::user()->prenom }}</a>
                    @else
                    <a href="{{ route('showlogin') }}">Se connecter</a>
                    @endauth
                </p>

                <div class="menu-options">
                    @auth
                    @if(auth()->user()->role_id == 3)
                    <a href="{{ route('admin.gestion') }}">Gestion</a>
                    @endif <a href="{{ route('profil') }}">Profil</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <a href="{{ route('showregister') }}">Nouveau compte</a>
                    @endauth
                </div>
            </div>

            <div id="panier-desktop">
                <a href="{{ route('panier') }}">
                    <img src="/icone/panierblanc.png" alt="panier">
                </a>
            </div>
        </div>
    </div>

    <div id="mobile-nav">
        <div id="burger-menu">
            <div id="burger-menu-content">
                <div class="user-menu">
                    <div>
                        @auth
                        <p class="compte-mobile-head">{{ Auth::user()->prenom }}</p>
                        @else
                        <p class="compte-mobile-head">Compte</p>
                        <a href="{{ route('showlogin') }}">Se connecter</a>
                        <a href="{{ route('showregister') }}">Nouveau compte</a>
                        @endauth
                    </div>
                    @auth
                    <div>
                        @if(auth()->user()->role_id == 3)
                        <a href="{{ route('admin.gestion') }}">Gestion</a>
                        @endif
                        <a href="{{ route('profil') }}">Profil</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
                    </div>
                    @endauth

                    <div id="nav-mobile">
                        <nav>
                            <a href="/">Accueil</a>
                            <a href="{{ route('evenements') }}">Évènements</a>
                            <a href="{{ route('magasin') }}">Produits</a>
                            <a href="#">Académie</a>
                            <a href="{{ route('coachs') }}">Coachs</a>
                            <a href="{{ route('equipe') }}">Équipe</a>
                            <a href="{{ route('partenaires') }}">Partenaires</a>
                            <a href="{{ route('galerie') }}">Galerie</a>
                            <a href="#">Blog</a>
                            <a href="{{ route('contact') }}">Contact</a>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <div id="burger-icon">&#9776;</div>
        <div id="logo-nav-mobile">
            <a href="/">
                <img src="/image/pbsportlogoVert.png" alt="logo">
            </a>
        </div>
        <div class="panier-icone">
            <a href="{{ route('panier') }}">
                <img src="/icone/panier.png" alt="panier">
            </a>
        </div>
    </div>
</header>

<section id="navigation">
    <div id="logo-nav">
        <a href="/">
            <img src="/image/pbsportlogo.png" alt="logo">
        </a>
    </div>

    <nav>
        <a href="/">Accueil</a>
        <a href="{{ route('evenements') }}">Évènements</a>
        <a href="{{ route('magasin') }}">Produits</a>
        <div class="dropdown">
            <a href="#">Académie</a>
            <div class="dropdown-content">
                <a href="{{ route('coachs') }}">Coachs</a>
                <a href="{{ route('equipe') }}">Équipe</a>
                <a href="{{ route('partenaires') }}">Partenaires</a>
                <a href="{{ route('galerie') }}">Galerie</a>
                <a href="#">Blog</a>
            </div>
        </div>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</section>

<div class="divBande">
    <div id="bande1" class="bandeDef">
        <p>Dernière nouveauté.</p>
        <p><a href="">En savoir plus</a></p>
    </div>
    <div id="bande2" class="bandeDef" style="display: none;">
        <p>Decouvrez notre selection de produits</p>
        <p><a href="">Cliquez ici</a></p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var burgerIcon = document.getElementById("burger-icon");
        var burgerMenu = document.getElementById("burger-menu");

        burgerIcon.addEventListener("click", function() {
            if (burgerMenu.style.display == "block") {
                burgerIcon.innerHTML = "&#9776;";
                burgerMenu.style.display = "none";
                burgerIcon.style.zIndex = "1";
                burgerIcon.style.color = "black";
            } else {
                burgerMenu.style.display = "block";
                // changer le burgerIcon en croix avec le code &#x2715
                burgerIcon.innerHTML = "&#x2715;";
                burgerIcon.style.zIndex = "1000";
                burgerIcon.style.color = "white";
            }
        });


        let bande1 = document.querySelector('#bande1');
        let bande2 = document.querySelector('#bande2');
        bande1.style.display = 'inline';
        setInterval(function() {
            if (bande1.style.display == 'inline') {
                setTimeout(function() {
                    bande2.style.animation = 'entrer 2s normal forwards ease-in-out';
                    bande1.style.animation = 'sortir 2s normal forwards ease-in-out';
                }, 5000)
                setTimeout(function() {
                    bande2.style.display = 'inline';
                    bande1.style.display = 'none';
                }, 6000)
            } else {
                setTimeout(function() {
                    bande1.style.animation = 'entrer 2s normal forwards ease-in-out';
                    bande2.style.animation = 'sortir 2s normal forwards ease-in-out';
                }, 5000)
                setTimeout(function() {
                    bande1.style.display = 'inline';
                    bande2.style.display = 'none';
                }, 6000)
            }
        }, 0)

    });

</script>