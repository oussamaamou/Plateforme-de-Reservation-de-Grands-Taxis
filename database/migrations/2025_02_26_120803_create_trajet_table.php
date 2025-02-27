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
        Schema::create('trajet', function (Blueprint $table) {
            $table->id();
            $table->timestamp('dateDepart');
            $table->timestamp('dateArrivee');
            $table->string('lieuDepart');
            $table->string('lieuArrivee');
            $table->enum('statut',['En preparation', 'En route', 'Arrivee'])->default('En preparation');
            $table->unsignedBigInteger('passager_id')->after('id'); 
            $table->unsignedBigInteger('chauffeur_id')->after('id'); 
            $table->foreign('passager_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('chauffeur_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajet');
    }
};
