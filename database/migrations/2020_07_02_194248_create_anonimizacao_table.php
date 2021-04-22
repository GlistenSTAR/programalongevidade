<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnonimizacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('LGV_ANONIMIZACAO', function (Blueprint $table) {
           $table->increments('id');
        //    * @property string $LGV_USER_NOME
        //    * @property string $LGV_USER_DATA_NASCIMENTO
        //    * @property string $LGV_USER_SEXO
        //    * @property string $LGV_USER_EMAIL
        //    * @property string $LGV_USER_TELEFONE_FIXO_DDD
        //    * @property string $LGV_USER_TELEFONE_FIXO_NUMERO
        //    * @property string $LGV_USER_TELEFONE_CELULAR_DDD
        //    * @property string $LGV_USER_TELEFONE_CELULAR_NUMERO
        //    IP
        //     MANDAR EMAIL APÓS O PROCESSO DE EXCLUSAO
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
//        Schema::dropIfExists('anonimizacao');
    }
}
