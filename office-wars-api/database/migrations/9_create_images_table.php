<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('imageName', 50)->nullable();
            $table->string('image_path',);


            $table->timestamps();

            $table->foreignId('planet_id')->nullable()->constrained('planets');
            $table->foreignId('site_id')->nullable()->constrained('sites');
            $table->foreignId('event_id')->nullable()->constrained('events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
