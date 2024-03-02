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
        Schema::create('Type_de_Problemes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Type_Problemes_id')->constrained();
            $table->enum('nom_de_problemes',['Carte Mere', 'Carte Graphique','Disque Dur','Windows', 'Office','Carte Reseaux', 'Prise Reseaux','Physique', 'Connexion']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Type_de_Problemes');

    }
};
