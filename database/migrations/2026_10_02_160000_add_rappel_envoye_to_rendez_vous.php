<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('rendez_vous', 'rappel_envoye')) {
            Schema::table('rendez_vous', function (Blueprint $table) {
                $table->boolean('rappel_envoye')->default(false);
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('rendez_vous', 'rappel_envoye')) {
            Schema::table('rendez_vous', function (Blueprint $table) {
                $table->dropColumn('rappel_envoye');
            });
        }
    }
};
