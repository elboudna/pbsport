<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;


class StockController extends Controller
{

    public function store(Request $request)
    {
        $color = $request->input('couleur');
        $typeId = $request->input('type_id');
        $produitId = $request->input('produit_id');


        // Define an array of sizes based on the product type_id
        $sizes = [];

        if ($typeId == 1) {
            $sizes = ['S', 'M', 'L', 'XL', 'XXL'];
        } elseif ($typeId == 2) {
            // Generate sizes from 4 to 13 going half by half
            for ($size = 4; $size <= 13; $size += 0.5) {
                $sizes[] = $size; // Format the size as needed
            }
        } elseif ($typeId == 3) {
            $sizes = ['14mm', '16mm'];
        } elseif ($typeId == 4) {
            $sizes = [3, 6, 12];
        } else {
            $sizes = ['unique'];
        }

        // Insert rows into the stock table
        foreach ($sizes as $size) {
            Stock::create([
                'produit_id' => $produitId,
                'couleur' => $color,
                'taille' => $size,
                'stock' => 0, // You can set the initial quantity as needed
            ]);
        }

        return redirect()->back()->with('success', 'Stock added successfully');
    }

    public function update(Request $request)
    {
        $stockIds = $request->input('stock_id');
        $quantities = $request->input('quantite');

        // Loop through the submitted data and update the stock records
        for ($i = 0; $i < count($stockIds); $i++) {
            $stock = Stock::find($stockIds[$i]);
            if ($stock) {
                $stock->stock = $quantities[$i];
                $stock->save();
            }
        }

        return redirect()->back()->with('success', 'Stock updated successfully');
    }
}
