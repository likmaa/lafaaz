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
        Schema::create('grejoindres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('postal');
            $table->string('ville');
            $table->string('tel');
            $table->string('email');
            $table->string('adresse');
            $table->string('pays');
            $table->string('birth');
            $table->string('profession');
            $table->text('cin');
            $table->text('casier');
            $table->text('motive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grejoindres');
    }
};
