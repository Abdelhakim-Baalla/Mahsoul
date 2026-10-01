<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained('farms')->onDelete('cascade');
            $table->string('nom');
            $table->float('superficie')->nullable();
            $table->string('culture')->nullable();
            $table->string('variete')->nullable();
            $table->date('date_semis')->nullable();
            $table->string('statut')->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parcels');
    }
};
