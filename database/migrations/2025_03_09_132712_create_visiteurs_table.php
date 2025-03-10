<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable(); // Adresse IP du visiteur
            $table->string('user_agent')->nullable(); // Infos sur le navigateur
            $table->timestamps(); // Enregistrement de la date et l'heure
        });
    }

    public function down() {
        Schema::dropIfExists('visiteurs');
    }
};
