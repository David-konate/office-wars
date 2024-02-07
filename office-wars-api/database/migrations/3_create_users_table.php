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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('userPseudo', 50);
            $table->string('userLastName', 50);
            $table->string('userFirstName', 50);
            $table->string('mail',);
            $table->string('role',);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->text('bookingHistory');
            $table->string('userImage', 50)->nullable();
            $table->string('slug')->unique();

            $table->timestamps();
        });
    }

    /**
     * Revertit les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
