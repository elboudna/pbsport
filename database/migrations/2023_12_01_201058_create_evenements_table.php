<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Tournoi', 'Bootcamp', 'Formation']);
            $table->string('nom');
            $table->text('description');
            $table->integer('nbr_joueur');
            $table->dateTime('date_debut');
            $table->time('heure');
            $table->string('lieu');
            $table->string('adresse');
            $table->decimal('prix', 8, 2);
            $table->enum('categorie', ['Double mixte', 'Double', 'Simple']);
            $table->enum('niveau', ['Débutant', 'Intermediaire', 'Avancé']);
            $table->string('image')->nullable();
            $table->string('lien')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
