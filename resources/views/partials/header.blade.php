<!-- resources/views/partials/header.blade.php -->

<header class="bgvert">
    <div>
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
        <a href="#">Blog</a>
        <a href="#">Contact</a>
    </nav>
</section>