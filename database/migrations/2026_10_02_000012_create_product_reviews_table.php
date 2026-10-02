<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit')->constrained('produits')->onDelete('cascade');
            $table->foreignId('utilisateur')->constrained('utilisateurs')->onDelete('cascade');
            $table->unsignedTinyInteger('note');
            $table->text('commentaire')->nullable();
            $table->timestamps();
            $table->unique(['produit', 'utilisateur']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_reviews');
    }
};
