<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LGV_USER_ID
 * @property string $LGV_USER_NOME
 * @property string $LGV_USER_DATA_NASCIMENTO
 * @property string $LGV_USER_SEXO
 * @property string $LGV_USER_EMAIL
 * @property string $LGV_USER_SENHA
 * @property string $LGV_USER_ENDERECO
 * @property string $LGV_USER_ENDERECO_NUMERO
 * @property string $LGV_USER_ENDERECO_COMPLEMENTO
 * @property string $LGV_USER_ENDERECO_BAIRRO
 * @property string $LGV_USER_ENDERECO_CIDADE
 * @property string $LGV_USER_ENDERECO_ESTADO
 * @property string $LGV_USER_ENDERECO_CEP
 * @property string $LGV_USER_TELEFONE_FIXO_DDD
 * @property string $LGV_USER_TELEFONE_FIXO_NUMERO
 * @property string $LGV_USER_TELEFONE_CELULAR_DDD
 * @property string $LGV_USER_TELEFONE_CELULAR_NUMERO
 * @property string $LGV_USER_DATA_CADASTRO
 * @property string $LGV_USER_DATA_ULTIMA_ALTERACAO
 * @property boolean $LGV_USER_STATUS
 * @property string $LGV_USER_CPF
 * @property boolean $LGV_USER_LGPD
 * @property string $LGV_USER_LGPD_DATA
 * @property string $LGV_USER_LGPD_ANONIMIZACAO_DATA
 */
class Paciente extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_PACIENTES';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'LGV_USER_ID';

    /**
     * @var array
     */
    protected $fillable = ['LGV_USER_NOME', 'LGV_USER_DATA_NASCIMENTO', 'LGV_USER_SEXO', 'LGV_USER_EMAIL', 'LGV_USER_SENHA', 'LGV_USER_ENDERECO', 'LGV_USER_ENDERECO_NUMERO', 'LGV_USER_ENDERECO_COMPLEMENTO', 'LGV_USER_ENDERECO_BAIRRO', 'LGV_USER_ENDERECO_CIDADE', 'LGV_USER_ENDERECO_ESTADO', 'LGV_USER_ENDERECO_CEP', 'LGV_USER_TELEFONE_FIXO_DDD', 'LGV_USER_TELEFONE_FIXO_NUMERO', 'LGV_USER_TELEFONE_CELULAR_DDD', 'LGV_USER_TELEFONE_CELULAR_NUMERO', 'LGV_USER_DATA_CADASTRO', 'LGV_USER_DATA_ULTIMA_ALTERACAO', 'LGV_USER_STATUS', 'LGV_USER_CPF', 'LGV_USER_LGPD', 'LGV_USER_LGPD_DATA', 'LGV_USER_LGPD_ANONIMIZACAO_DATA'];

    public $timestamps = false;

    protected $dates = [
        'LGV_USER_DATA_NASCIMENTO',
    ];

    protected $casts = [
        'LGV_USER_DATA_NASCIMENTO' => 'date',
    ];

}
