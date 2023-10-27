@extends('layouts.app') {{-- Assuming you have a layout named 'app' --}}

@section('content')
<a href="{{ route('admin.liste-produit') }}">Retour à la liste des produits</a>
<div class="container">
    <h1>Stock of {{ $produit->nom }}</h1>

    <p>Product Type: {{ $produit->type->type }}</p>

    @if ($stocks)
    @if ($stocks->isNotEmpty())
    <form method="post" action="{{ route('stock.update') }}">
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th>Couleur</th>
                    <th>Taille</th>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stocks as $stock)
                <tr>
                    <td class="color-cell">{{ $stock->couleur }}</td>
                    <td>{{ $stock->taille }}</td>
                    <td>
                        <input type="number" name="quantite[]" value="{{ $stock->stock }}">
                        <input type="hidden" name="stock_id[]" value="{{ $stock->id }}">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Update Stock</button>
    </form>

    @else
    <p>No stock records found for this product.</p>
    @endif
    @else
    <p>No stock records found for this product.</p>
    @endif

    <form id="addstock-form" method="post" action="{{ route('stock.store') }}">
        <h2>Add New Stock</h2>
        @csrf
        <div class="form-group">
            <label for="couleur">Couleur:</label>
            <!-- select -->
            <select class="form-control" name="couleur">
                <option value="Rouge">Rouge</option>
                <option value="Bleu">Bleu</option>
                <option value="Vert">Vert</option>
                <option value="Jaune">Jaune</option>
                <option value="Noir">Noir</option>
                <option value="Blanc">Blanc</option>
                <option value="Gris">Gris</option>
                <option value="Rose">Rose</option>
                <option value="Violet">Violet</option>
                <option value="Orange">Orange</option>
                <option value="Marron">Marron</option>
            </select>

            <input type="hidden" name="type_id" value="{{ $produit->type_id }}">
            <input type="hidden" name="produit_id" value="{{ $produit->id }}">

        </div>
        <button type="submit" class="btn btn-primary">Add Stock</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the select element
        const couleurSelect = document.querySelector('select[name="couleur"]');

        // Find all the color cells in the table and collect their values
        const colorCells = document.querySelectorAll('.color-cell');
        const tableColors = Array.from(colorCells).map(cell => cell.textContent.trim());

        // Remove existing colors from the select options
        for (let i = 0; i < couleurSelect.options.length; i++) {
            const option = couleurSelect.options[i];
            if (tableColors.includes(option.value)) {
                couleurSelect.remove(i);
                i--; // Adjust the index since we removed an option
            }
        }

        const addStockForm = document.querySelector('#addstock-form');

        // Check if there are no options left in the select
        if (couleurSelect && couleurSelect.options.length === 0) {
            // Hide the form
            addStockForm.style.display = 'none';
        }
    });
</script>

@endsection