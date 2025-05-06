<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterinaires', function (Blueprint $table) {
            $table->id();
            $table->string('specialite')->nullable();
            $table->string('diplome')->nullable();
            $table->string('annee_experience')->nullable();
            $table->float('prix_deplacement')->nullable();
            $table->foreignId('compte')->constrained('utilisateurs')->onDelete('cascade');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veterinaires');
    }
};
