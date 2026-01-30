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
        Schema::create('agents', function (Blueprint $table) {
            $table->id('id_agent');
            $table->string('Nom', 100)->nullable();
            $table->string('Prenom', 45)->nullable();
            $table->string('Matricule', 255)->unique();
            $table->date('date_naissance')->nullable();
            $table->enum('sexe', ['M', 'F'])->nullable();
            $table->string('nationalite', 100)->nullable();
            $table->string('parcours', 100)->nullable();
            $table->string('grade', 10)->nullable();
            $table->string('mot_de_passe', 255)->nullable();
            $table->string('categorie', 1)->nullable();
            $table->string('email', 100)->nullable();
            $table->dateTime('date_entree')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
