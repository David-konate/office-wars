<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exécute les migrations.
     */
    public function up(): void
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->id('Id_Ranking');
            $table->decimal('resultQuizz', 5, 2);
            $table->decimal('timeQuizz', 20, 2);
            $table->unsignedBigInteger('level');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            // Ajoutez d'autres colonnes ou contraintes si nécessaire
        });
    }

    /**
     * Revertit les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rankings');
    }
};
