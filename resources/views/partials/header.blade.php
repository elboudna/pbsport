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
            <p>
                @auth
                {{ Auth::user()->prenom }}
                @else
                Bonjour
                @endauth
            </p>

            @auth
            <a href="{{ route('profil') }}">
                <img src="/icone/compte.png" alt="compte">
            </a>
            @else
            <a href="{{ route('showlogin') }}">
                <img src="/icone/compte.png" alt="compte">
            </a>
            @endauth
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
        <a href="#">Evenements</a>
        <a href="{{ route('magasin') }}">Produits</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
    </nav>
</section>