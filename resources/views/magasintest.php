<div class="flex-row">
        <div id="magasin-gauche">
            <div>
                <h3>Categorie</h3>
                <p>Raquettes</p>
                <p>Balles</p>
                <p>Vetements</p>
                <p>Accessoires</p>
            </div>
            <div>
                <h3>Couleur</h3>
                <p>Noir</p>
                <p>Rouge</p>
                <p>Vert</p>
                <p>Blanc</p>
            </div>
        </div>
        <div id="magasin-droite">

            <div id="tri-magasin">
                <select name="tri">
                    <option value="">Trier par</option>
                    <option value="">Dernier arrivage</option>
                    <option value="">Prix croissant</option>
                    <option value="">Prix décroissant</option>
                </select>
            </div>

            <div id="produits-magasin">
                @foreach ($produits as $produit)
                <a href="{{ route('produit.show', ['id' => $produit->id]) }}">
                    <div class="produit-magasin">
                        @if ($produit->images->isNotEmpty())
                        <img src="{{ asset('storage/produit_images/' . $produit->images->first()->chemin) }}" alt="{{ $produit->nom }}">
                        @else
                        <img src="{{ asset('placeholder.jpg') }}" alt="{{ $produit->nom }}">
                        @endif
                        <p class="nom-produit-accueil">{{ $produit->nom }}</p>
                        <p class="prix-produit-accueil vert">{{ $produit->prix }}$</p>
                    </div>
                </a>
                @endforeach
            </div>

        </div>
    </div>