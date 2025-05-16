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
        Schema::table('rendez_vous', function (Blueprint $table) {
            $table->datetime('date_reserver')->nullable();
            $table->string('sujet');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rendez_vous', function (Blueprint $table) {
            $table->dropColumn('date_reserver');
            $table->dropColumn('sujet');
            $table->dropColumn('adresse');
            $table->dropColumn('telephone');
            $table->dropColumn('total');
        });
    }
};
