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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('ser_no')->nullable();
            $table->string('no')->nullable();
            $table->string('rank')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('son_daughter')->nullable();
            $table->string('unit')->nullable();
            $table->string('date_of_birth')->format('d/m/Y')->nullable();
            $table->string('group')->nullable();
            $table->string('ncc_directorate')->nullable();
            $table->string('year')->nullable();
            $table->string('grade')->nullable();
            $table->string('place')->nullable();
            $table->string('date')->format('d/m/Y')->nullable();
            $table->string('commanding_officer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
