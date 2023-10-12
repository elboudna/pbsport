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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            // le type du modèle (coach, joueur, produit, etc.)
            // l'id du coach, joueur, produit, etc.
            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');
            $table->string('chemin');
            // Vous pouvez ajouter d'autres colonnes au besoin.

            $table->timestamps();

            $table->index(['imageable_id', 'imageable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
