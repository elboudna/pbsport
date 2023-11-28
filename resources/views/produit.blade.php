@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="margin-bottom margin-top" id="produit">
    <form method="POST" action="{{ route('panier.ajouter') }}">
        @csrf
        <input type="hidden" name="produit_id" value="{{ $produit->id }}">

        <div class="flex-row">
            <div id="produit-image">
                <img src="{{ asset('storage/produit_images/' . $produit->images->first()->chemin) }}" alt="{{ $produit->nom }}">
            </div>

            <div id="produit-info">
                <p class="nom-produit">{{ $produit->nom }}</p>
                <p class="prix-produit vert">{{ $produit->prix }}$</p>
                <p class="description-produit">{{ $produit->description }}</p>

                <div class="quant-ajouter">
                    <label for="color">Couleur:</label>
                    <select name="couleur" id="color">
                        <!-- Loop through available colors in stock -->
                        <option value="" disabled selected>Select a color</option>
                        @foreach($produit->stocks->unique('couleur') as $stock)
                        <option value="{{ $stock->couleur }}">{{ $stock->couleur }}</option>
                        @endforeach
                    </select>

                    <label for="size">Taille:</label>
                    <select name="taille" id="size">
                        <!-- Placeholder option -->
                        <option value="" disabled selected>Select a color first</option>

                        <!-- Loop through available sizes and dynamically add options with data-color attribute -->
                        @foreach($produit->stocks as $stock)
                        <option data-color="{{ $stock->couleur }}" data-stock="{{ $stock->stock }}" value="{{ $stock->taille }}" style="display: none">{{ $stock->taille }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn-ajouter bgvert">Ajouter</button>
                </div>
                <p id="stock-info">Stock: Please select a color and size</p>

                <div class="flex-column">
                    <p>Note</p>
                    <p>Etoiles</p>
                </div>
            </div>
        </div>
    </form>

    <script>
    // Function to update stock information
    function updateStockInfo() {
        var selectedSize = document.getElementById('size').value;
        var selectedColor = document.getElementById('color').value;

        // Find the selected size option
        var selectedSizeOption = document.querySelector('#size option[data-color="' + selectedColor + '"][value="' + selectedSize + '"]');

        // Update the stock information
        var stockInfo = document.getElementById('stock-info');
        stockInfo.textContent = 'Stock: ' + selectedColor + ' ' + selectedSize + ' - ' + selectedSizeOption.getAttribute('data-stock') + ' in stock';
    }

    // Listen for changes in the color dropdown
    document.getElementById('color').addEventListener('change', function () {
        // Get the selected size
        var selectedSize = document.getElementById('size').value;

        // Get the selected color
        var selectedColor = this.value;

        var defaultOption = document.querySelector('#color option[value=""]');
        if (defaultOption) {
            defaultOption.remove();
        }

        // Hide all size options
        var sizeOptions = document.querySelectorAll('#size option');
        sizeOptions.forEach(function (option) {
            option.style.display = 'none';
        });

        // Show size options for the selected color with stock greater than 0
        var selectedSizeFound = false;
        var selectedSizeOptions = document.querySelectorAll('#size option[data-color="' + selectedColor + '"]');
        selectedSizeOptions.forEach(function (option) {
            // Check if the stock for the size is greater than 0
            if (parseInt(option.getAttribute('data-stock')) > 0) {
                option.style.display = 'block';

                // If the selected size is available for the new color, keep it selected
                if (option.value === selectedSize) {
                    option.selected = true;
                    selectedSizeFound = true;
                }
            }
        });

        // If the selected size is not available, select the first available size
        if (!selectedSizeFound) {
            selectedSizeOptions.forEach(function (option) {
                if (parseInt(option.getAttribute('data-stock')) > 0) {
                    option.selected = true;
                    return false; // Exit the loop after selecting the first available size
                }
            });
        }

        // Update the stock information
        updateStockInfo();
    });

    // Listen for changes in the size dropdown
    document.getElementById('size').addEventListener('change', function () {
        // Update the stock information
        updateStockInfo();
    });
</script>



</section>

<!-- <section id="produit-detail">

        <div class="flex-column">
            <p>details</p>
        </div>
    </section> -->
@endsection