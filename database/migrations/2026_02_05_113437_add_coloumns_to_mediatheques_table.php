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
        Schema::table('mediatheques', function (Blueprint $table) {
            $table->string('page_type')->after('type')->nullable(); // ajouter la page d'affichage de la médiathèque
            $table->text('description')->nullable(); // ajouter une description pour chaque média
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mediatheques', function (Blueprint $table) {
            $table->dropColumn('page_type'); // Supprimer la colonne 'page_type'
            $table->dropColumn('description'); // Supprimer la colonne 'description'
        });
    }
};
