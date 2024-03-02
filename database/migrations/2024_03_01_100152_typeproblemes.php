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
        Schema::create('Type_Problemes', function (Blueprint $table) {
            $table->id();
            $table->enum('type_de_problemes',['SurPc', 'Soft','Reseaux','Imprimant']);
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Type_Problemes');
    }
};
