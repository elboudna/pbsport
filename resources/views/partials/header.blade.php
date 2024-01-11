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
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <a href="{{ route('showregister') }}">Nouveau compte</a>
                    @endauth
                </div>
            </div>


            <a href="{{ route('panier') }}">
                <img src="/icone/panier.png" alt="panier">
            </a>
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
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se deconnecter</a>
                    </div>
                    @endauth

                    <div id="nav-mobile">
                        <nav>
                            <a href="/">Accueil</a>
                            <a href="{{ route('evenements') }}">Evenements</a>
                            <a href="{{ route('magasin') }}">Produits</a>
                            <a href="{{ route('coachs') }}">Coach</a>
                            <a href="#">Académie</a>
                            <a href="{{ route('galerie') }}">Galerie</a>
                            <a href="#">Partenaire</a>
                            <a href="#">Blog</a>
                            <a href="#">Contact</a>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <div id="burger-icon">&#9776;</div>
        <div id="logo-nav-mobile">
            <a href="/">
                <img src="/image/pbs.jpg" alt="logo">
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
            <img src="/image/pbs.jpg" alt="logo">
        </a>
    </div>

    <nav>
        <a href="/">Accueil</a>
        <a href="{{ route('evenements') }}">Evenements</a>
        <a href="{{ route('magasin') }}">Produits</a>
        <div class="dropdown">
            <a href="#">Académie</a>
            <div class="dropdown-content">
                <a href="{{ route('coachs') }}">Coach</a>
                <a href="{{ route('galerie') }}">Galerie</a>
                <a href="#">Partenaire</a>
                <a href="#">Blog</a>
            </div>
        </div>
        <a href="#">Contact</a>
    </nav>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var burgerIcon = document.getElementById("burger-icon");
        var burgerMenu = document.getElementById("burger-menu");

        burgerIcon.addEventListener("click", function() {
            if (burgerMenu.style.display == "block") {
                burgerMenu.style.display = "none";
                burgerIcon.style.zIndex = "1";
                burgerIcon.style.color = "black";
            } else {
                burgerMenu.style.display = "block";
                burgerIcon.style.color = "white";
                burgerIcon.style.zIndex = "1000";
            }
        });
    });
</script>