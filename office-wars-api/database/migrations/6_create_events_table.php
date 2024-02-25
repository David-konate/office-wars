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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventName', 50)->nullable();
            $table->text('eventDescription');
            $table->date('dateTime')->default(now());
            $table->string('eventImage')->nullable();
            $table->timestamps();
            $table->string('slug')->unique();


            $table->foreignId('planet_id')->constrained('planets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
