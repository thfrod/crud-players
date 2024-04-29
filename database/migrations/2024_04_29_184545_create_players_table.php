<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->integer('age');
            $table->date('birthdate');
            $table->unsignedBigInteger('current_team_id')->nullable();
            $table->unsignedBigInteger('revealed_team_id')->nullable();
            $table->timestamps();

            // Definindo as chaves estrangeiras
            $table->foreign('current_team_id')->references('id')->on('teams')->onDelete('set null');
            $table->foreign('revealed_team_id')->references('id')->on('teams')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
