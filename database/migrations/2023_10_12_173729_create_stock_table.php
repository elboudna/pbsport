<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produit_id');
            $table->integer('stock');
            $table->string('taille');
            $table->timestamps();

            $table->foreign('produit_id')->references('id')->on('produit')->onDelete('cascade');

            // Ajoutez d'autres colonnes au besoin.

            // Exemple d'index si nécessaire
            $table->index(['produit_id', 'taille']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock');
    }
};
