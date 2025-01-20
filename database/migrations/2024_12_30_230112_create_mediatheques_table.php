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
        Schema::create('mediatheques', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->enum('type', ['image', 'video', 'audio']);
            $table->string('fichier')->nullable();
            $table->timestamp('date_ajoute')->useCurrent();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediatheques');
    }
};
