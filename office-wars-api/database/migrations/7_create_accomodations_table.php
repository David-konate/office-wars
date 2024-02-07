<?php

// Migration pour la table 'accomodations'
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
        Schema::create('accomodations', function (Blueprint $table) {
            $table->id();
            $table->string('accommodationName'); // Correction du nom de la colonne
            $table->string('accommodationType');
            $table->integer('numberOfRoom');
            $table->decimal('rates', 8, 2);
            $table->string('slug');
            $table->timestamps();

            // Ajoutez la colonne 'site_id' pour la relation
            $table->foreignId('site_id')->constrained('sites');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodations');
    }
};
