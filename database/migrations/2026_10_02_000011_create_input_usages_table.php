<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('input_usages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('input_id')->constrained('farm_inputs')->onDelete('cascade');
            $table->foreignId('parcel_id')->nullable()->constrained('parcels')->onDelete('set null');
            $table->foreignId('lot_id')->nullable()->constrained('harvest_lots')->onDelete('set null');
            $table->float('quantite');
            $table->date('date');
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('input_usages');
    }
};
