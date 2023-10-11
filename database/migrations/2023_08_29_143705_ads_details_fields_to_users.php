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
        Schema::table('users', function (Blueprint $table) {
            $table->string('contact')->unique()->nullable(  );
            $table->string('adresse')->default('N/A');
            $table->string('ville')->default('N/A');
            $table->string('pays')->default('N/A');
            $table->string('lieu')->default('N/A');
            $table->string('birth')->nullable('');
            $table->string('profession')->default('N/A');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropColumns('contact');
            Schema::dropColumns('adresse');
            Schema::dropColumns('ville');
            Schema::dropColumns('lieu');
            Schema::dropColumns('pays');
            Schema::dropColumns('birth');
            Schema::dropColumns('profession');
        });
    }
};
