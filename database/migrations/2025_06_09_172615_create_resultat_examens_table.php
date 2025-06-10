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
        Schema::create('resultat_examens', function (Blueprint $table) {
            $table->id();
            $table->string('titre'); // Titre du résultat de l'examen
            $table->string('sessions')->nullable(); // Session de l'examen (ex: Session 1, Session 2, etc.)
            $table->string('type'); // Type de résultat (examen, partiel, etc.)
            $table->string('pdf'); // URL du fichier PDF contenant les résultats
            $table->enum('niveau_etude', ['licence 1', 'licence 2', 'licence 3', 'master 1', 'master 2']); // Le niveau d'étude concerné (Licence, Master, etc.)
            $table->text('description')->nullable(); // Description facultative du résultat de l'examen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultat_examens');
    }
};
