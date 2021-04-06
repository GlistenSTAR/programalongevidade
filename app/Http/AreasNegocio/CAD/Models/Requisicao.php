<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LGV_REQUISICAO_ID
 * @property string $LGV_REQUISICAO_DATA
 * @property int $LGV_REQUISICAO_ID_MEDICO
 * @property int $LGV_REQUISICAO_ID_PRODUTO
 * @property int $LGV_REQUISICAO_ID_PACIENTE
 * @property integer $LGV_REQUISICAO_STATUS
 */
class Requisicao extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_REQUISICOES';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'LGV_REQUISICAO_ID';

    /**
     * @var array
     */
    protected $fillable = ['LGV_REQUISICAO_DATA', 'LGV_REQUISICAO_ID_MEDICO', 'LGV_REQUISICAO_ID_PRODUTO', 'LGV_REQUISICAO_ID_PACIENTE', 'LGV_REQUISICAO_STATUS'];

    public $timestamps = false;

}
