<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->constrained('workers')->onDelete('cascade');
            $table->date('date');
            $table->boolean('present')->default(true);
            $table->float('heures')->default(8);
            $table->float('prime')->default(0);
            $table->string('note')->nullable();
            $table->timestamps();
            $table->unique(['worker_id', 'date']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendances');
    }
};
