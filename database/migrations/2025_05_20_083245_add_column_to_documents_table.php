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
        if (!Schema::hasColumn('documents', 'expert')) {
            Schema::table('documents', function (Blueprint $table) {
                $table->foreignId('expert')->constrained('utilisateurs')->onDelete('cascade');
            });
        }
        if (!Schema::hasColumn('documents', 'client')) {
            Schema::table('documents', function (Blueprint $table) {
                $table->foreignId('client')->constrained('utilisateurs')->onDelete('cascade');
            });
        }
        // 'rendez_vous' already exists from the create table migration, skip it to avoid duplicate column error.
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
