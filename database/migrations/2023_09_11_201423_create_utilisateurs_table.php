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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('mot_de_passe');
            $table->string('email')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse')->nullable();
            $table->string('sexe')->nullable();
            $table->date('date_de_naissance')->nullable();
            $table->string('niveau')->nullable();
            $table->unsignedBigInteger('role_id')->default(1); // Default role ID is 1 for 'user'
            $table->unsignedBigInteger('image_id')->nullable();
            $table->timestamps();
            
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};
