<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('harvest_lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained('farms')->onDelete('cascade');
            $table->foreignId('parcel_id')->constrained('parcels')->onDelete('cascade');
            $table->string('code')->unique();
            $table->string('produit');
            $table->float('quantite');
            $table->string('unite')->default('kg');
            $table->date('date_recolte');
            $table->string('calibrage')->nullable();
            $table->string('destination')->default('local');
            $table->string('client_nom')->nullable();
            $table->string('statut')->default('recolte');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('harvest_lots');
    }
};
