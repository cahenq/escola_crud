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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();  // ID auto-increment
            $table->string('nome');
            $table->integer('idade');
            $table->string('sexo'); 
            $table->string('cpf')->unique(); 
            $table->string('rg')->unique();
            $table->string('email')->unique();  
            $table->string('senha'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
