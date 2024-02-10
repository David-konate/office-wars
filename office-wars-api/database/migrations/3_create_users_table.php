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
            $table->string('email',);
            $table->string('role')->default('user');
            $table->string('password');
            $table->text('bookingHistory')->nullable();
            $table->string('userImage', 50)->nullable();
            $table->string('slug')->unique();

            $table->timestamp('eemail_verified_at')->nullable();


            $table->rememberToken();

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
