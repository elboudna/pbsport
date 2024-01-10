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
            $table->enum('type', ['Tournoi', 'Bootcamp', 'Formation', 'Autre']);
            $table->string('nom');
            $table->text('description');
            $table->integer('nbr_joueur');
            $table->date('date_debut');
            $table->time('heure');
            $table->string('lieu');
            $table->string('adresse');
            $table->decimal('prix', 8, 2);
            $table->json('categorie');
            $table->enum('niveau', ['Débutant', 'Intermediaire', 'Avancé']);
            $table->string('image')->nullable();
            $table->string('lien')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('place_restante');
            $table->date('date_limite_inscription')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
