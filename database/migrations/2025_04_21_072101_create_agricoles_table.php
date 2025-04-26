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
        Schema::create('agricoles', function (Blueprint $table) {
            $table->id();
            $table->string('ferme')->nullable();
            $table->string('produit')->nullable();
            $table->string('superficie_terrain')->nullable();
            $table->string('region')->nullable();
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
        Schema::dropIfExists('agricoles');
    }
};
