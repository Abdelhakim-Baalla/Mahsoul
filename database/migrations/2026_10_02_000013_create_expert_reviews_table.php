<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('expert_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expert')->constrained('utilisateurs')->onDelete('cascade');
            $table->foreignId('client')->constrained('utilisateurs')->onDelete('cascade');
            $table->unsignedTinyInteger('note');
            $table->text('commentaire')->nullable();
            $table->timestamps();
            $table->unique(['expert', 'client']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('expert_reviews');
    }
};
