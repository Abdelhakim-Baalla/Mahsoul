<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('farm_inputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained('farms')->onDelete('cascade');
            $table->string('nom');
            $table->string('type')->default('autre');
            $table->string('unite')->default('kg');
            $table->float('quantite_stock')->default(0);
            $table->float('seuil_alerte')->default(0);
            $table->float('prix_unitaire')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('farm_inputs');
    }
};
