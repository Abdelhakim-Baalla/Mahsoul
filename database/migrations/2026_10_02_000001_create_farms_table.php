<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('region')->nullable();
            $table->float('superficie_totale')->nullable();
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->foreignId('proprietaire')->constrained('utilisateurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('farms');
    }
};
