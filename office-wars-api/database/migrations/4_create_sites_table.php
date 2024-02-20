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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('siteName', 50);
            $table->text('siteDescription');
            // $table->text('touristActivities');
            // $table->string('attractionType', 50);
            $table->string('slug')->unique();
            // $table->string('shops', 50);
            $table->timestamps();


            $table->foreignId('planet_id')->constrained('planets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
