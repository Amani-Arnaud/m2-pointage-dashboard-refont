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
        Schema::create('parametres', function (Blueprint $table) {
            $table->id('id_parametre');
            $table->string('nom_entreprise')->nullable();
            $table->time('heure_arrivee')->nullable();
            $table->time('heure_depart')->nullable();
            $table->integer('marge_arrivee');
            $table->decimal('latitude_entreprise', 10, 0)->nullable();
            $table->decimal('longitude_entreprise', 10, 0)->nullable();
            $table->integer('rayon');
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametres');
    }
};
