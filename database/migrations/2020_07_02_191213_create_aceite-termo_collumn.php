<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAceiteTermoCollumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('LGV_PACIENTES', function (Blueprint $table) {
            $table->boolean('LGV_USER_LGPD')->default(false);
            $table->dateTime('LGV_USER_LGPD_DATA')->nullable(true);
            $table->dateTime('LGV_USER_LGPD_ANONIMIZACAO_DATA')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('LGV_PACIENTES', function (Blueprint $table) {
            $table->dropColumn('LGV_USER_LGPD');
            $table->dropColumn('LGV_USER_LGPD_DATA');
            $table->dropColumn('LGV_USER_LGPD_ANONIMIZACAO_DATA');
        });
    }
}
