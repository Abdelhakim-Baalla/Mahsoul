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
        Schema::table('documents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreignId('rendez_vous')->constrained('rendez_vous')->onDelete('cascade');
            $table->foreignId('expert')->constrained('utilisateurs')->onDelete('cascade');
            $table->foreignId('client')->constrained('utilisateurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropForeign(['rendez_vous']);
            $table->dropColumn('rendez_vous');

            $table->dropForeign(['expert']);
            $table->dropColumn('expert');

            $table->dropForeign(['client']);
            $table->dropColumn('client');
        });
    }
};
