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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->decimal('prix', 10, 2);
            // vedette : 1 si le produit est en vedette, 0 sinon
            $table->boolean('vedette')->default(0);
            $table->unsignedBigInteger('type_id'); // Add the 'type_id' column to the 'produits' table
            $table->foreign('type_id')->references('id')->on('produit_types')->default(1); // Define the foreign key relationship

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
