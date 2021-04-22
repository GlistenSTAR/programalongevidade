<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LGV_MEDICO_ID
 * @property string $LGV_MEDICO_NOME
 * @property string $LGV_MEDICO_CRM_NUMERO
 * @property string $LGV_MEDICO_CRM_UF
 * @property boolean $LGV_MEDICO_STATUS
 * @property string $LGV_MEDICO_DT_INCLUSAO
 */
class Medico extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_MEDICO';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'LGV_MEDICO_ID';

    /**
     * @var array
     */
    protected $fillable = ['LGV_MEDICO_NOME', 'LGV_MEDICO_CRM_NUMERO', 'LGV_MEDICO_CRM_UF', 'LGV_MEDICO_STATUS', 'LGV_MEDICO_DT_INCLUSAO'];

    public $timestamps = false;
}
