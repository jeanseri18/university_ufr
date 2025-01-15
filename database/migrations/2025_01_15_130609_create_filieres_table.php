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
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('categorie');
            $table->string('titre');
            $table->string('domaine');
            $table->string('mention');
            $table->string('specialite');
            $table->string('grade');
            $table->integer('duree');
            $table->string('type_parcours');
            $table->string('type_formation');
            $table->text('objectifs');
            $table->text('competences');
            $table->text('debouches');
            $table->text('admission');
            $table->text('contenu_formation');
            $table->text('controle_connaissances');
            $table->text('poursuite_etudes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};
