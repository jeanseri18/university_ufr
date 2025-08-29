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
        Schema::create('parlons_ecos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status' ,['draft', 'published', 'archived'])->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->timestamp('archived_at')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            // $table->string('author')->nullable();
            // $table->string('category')->nullable();
            // $table->string('status')->default('draft'); // 'draft', 'published', 'archived'
            
            
            // $table->string('meta_title')->nullable();
            // $table->string('meta_description')->nullable();
            // $table->string('meta_keywords')->nullable();
            // $table->string('seo_image')->nullable();
            // $table->boolean('is_featured')->default(false);
            // $table->boolean('is_pinned')->default(false);
            // $table->unsignedBigInteger('category_id')->nullable();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            // $table->unsignedBigInteger('author_id')->nullable();
            // $table->foreign('author_id')->references('id')->on('users')->onDelete('set null');
            // $table->unsignedBigInteger('created_by')->nullable();
            // $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            // $table->unsignedBigInteger('updated_by')->nullable();
            // $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
            // $table->unsignedBigInteger('deleted_by')->nullable();
            // $table->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
            // $table->softDeletes(); // Pour gérer la suppression douce
            // $table->boolean('is_active')->default(true); // Pour gérer l'activation/désactivation
            // $table->boolean('is_public')->default(true); // Pour gérer la visibilité
            // $table->boolean('is_archived')->default(false); // Pour gérer l'archivage
            // $table->boolean('is_featured_on_homepage')->default(false); // Pour gérer la mise en avant sur la page d'accueil
            // $table->boolean('is_pinned_to_top')->default(false); // Pour gérer le maintien en haut de la liste
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parlons_ecos');
    }
};
