<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained('farms')->onDelete('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone')->nullable();
            $table->string('cin')->nullable();
            $table->string('poste')->default('ouvrier');
            $table->float('salaire_journalier')->default(0);
            $table->date('date_embauche')->nullable();
            $table->boolean('actif')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('workers');
    }
};
