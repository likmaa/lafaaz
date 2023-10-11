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
        Schema::create('grecrutements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('typeoff');
            $table->string('reference');
            $table->string('niveaue');
            $table->string('experience');
            $table->string('contrat');
            $table->date('expire');
            $table->longText('description');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grecrutements');
    }
};
