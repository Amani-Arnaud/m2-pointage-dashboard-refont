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
        Schema::create('pointages', function (Blueprint $table) {
            $table->id('id_pointage');
            $table->dateTime('date_pointage')->nullable();
            $table->enum('type_pointage', ['arrivée', 'départ', 'absence'])->nullable();
            $table->enum('status', ['présent', 'absent'])->nullable();
            $table->text('latitude');
            $table->text('longitude');
            $table->date('created_date');

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
        Schema::dropIfExists('pointages');
    }
};
