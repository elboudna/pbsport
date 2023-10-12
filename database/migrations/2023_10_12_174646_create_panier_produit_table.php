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
        Schema::create('panier_produit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panier_id');
            $table->unsignedBigInteger('produit_id');
            $table->integer('quantite');
            $table->string('taille'); // Ajoutez la colonne pour la taille ici

            $table->timestamps();

            $table->foreign('panier_id')->references('id')->on('panier');
            $table->foreign('produit_id')->references('id')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panier_produit');
    }
};
