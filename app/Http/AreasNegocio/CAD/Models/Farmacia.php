<?php

namespace App\Http\AreasNegocio\CAD\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LGV_FARMACIA_ID
 * @property string $LGV_FARMACIA_NOME
 * @property string $LGV_FARMACIA_UF
 * @property string $LGV_FARMACIA_CIDADE
 * @property string $LGV_FARMACIA_BAIRRO
 * @property string $LGV_FARMACIA_ENDERECO_LOGRADOURO
 * @property string $LGV_FARMACIA_ENDERECO
 * @property string $LGV_FARMACIA_ENDERECO_NUMERO
 * @property string $LGV_FARMACIA_ENDERECO_COMPLEMENTO
 * @property string $LGV_FARMACIA_ENDERECO_CEP
 * @property string $LGV_FARMACIA_TELEFONE
 * @property string $LGV_FARMACIA_EMAIL
 * @property boolean $LGV_STATUS
 */
class Farmacia extends Model
{
    use Cachable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_FARMACIAS';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'LGV_FARMACIA_ID';

    /**
     * @var array
     */
    protected $fillable = ['LGV_FARMACIA_NOME', 'LGV_FARMACIA_UF', 'LGV_FARMACIA_CIDADE', 'LGV_FARMACIA_BAIRRO', 'LGV_FARMACIA_ENDERECO_LOGRADOURO', 'LGV_FARMACIA_ENDERECO', 'LGV_FARMACIA_ENDERECO_NUMERO', 'LGV_FARMACIA_ENDERECO_COMPLEMENTO', 'LGV_FARMACIA_ENDERECO_CEP', 'LGV_FARMACIA_TELEFONE', 'LGV_FARMACIA_EMAIL', 'LGV_STATUS'];

    public $timestamps = false;

}
