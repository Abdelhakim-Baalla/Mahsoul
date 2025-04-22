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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client')->constrained('clients')->onDelete('cascade');
            $table->date('date_commande');
            $table->float('total');
            $table->string('statut');
            $table->string('methode_paiement');
            $table->string('reference_paiement');
            $table->string('adresse_livraison');
            $table->float('frais_livraison')->default(0);
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
        Schema::dropIfExists('commandes');
    }
};
