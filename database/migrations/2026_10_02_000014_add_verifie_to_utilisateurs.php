<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('utilisateurs', 'verifie')) {
            Schema::table('utilisateurs', function (Blueprint $table) {
                $table->boolean('verifie')->default(false);
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('utilisateurs', 'verifie')) {
            Schema::table('utilisateurs', function (Blueprint $table) {
                $table->dropColumn('verifie');
            });
        }
    }
};
