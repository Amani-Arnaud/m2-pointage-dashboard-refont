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
        Schema::create('statistiques', function (Blueprint $table) {
            $table->id('id_statistique');
            $table->date('periode')->nullable();
            $table->integer('total_jours')->nullable();
            $table->integer('jours_present')->nullable();
            $table->integer('jours_absent')->nullable();

            $table->foreignId('agents_id_agent')
                ->constrained('agents', 'id_agent')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistiques');
    }
};
