<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('farm_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farm_id')->constrained('farms')->onDelete('cascade');
            $table->foreignId('parcel_id')->nullable()->constrained('parcels')->onDelete('set null');
            $table->foreignId('worker_id')->nullable()->constrained('workers')->onDelete('set null');
            $table->string('titre');
            $table->text('description')->nullable();
            $table->date('date_prevue')->nullable();
            $table->date('date_realisee')->nullable();
            $table->string('statut')->default('todo');
            $table->string('priorite')->default('normale');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('farm_tasks');
    }
};
