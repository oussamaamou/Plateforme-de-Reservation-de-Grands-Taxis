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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->enum('role',['Chauffeur', 'Passager', 'Administrateur']);
            $table->string('email')->unique();
            $table->string('telephone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('statut',['normal', 'verifiee', 'bannie'])->default('normal');
            $table->string('photo')->nullable();
            $table->enum('etat',['Disponible', 'Indisponible'])->default('Disponible');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
