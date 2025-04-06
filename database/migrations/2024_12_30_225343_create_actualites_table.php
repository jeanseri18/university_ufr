<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('titre');
            $table->text('detail')->nullable();
            $table->timestamp('date_ajoute')->useCurrent();
            
            $table->string('foruser')->nullable(); // Utilisateur associé à l'actualité
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actualites');
    }
};
