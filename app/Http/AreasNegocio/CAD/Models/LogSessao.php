<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LGV_LOG_CODIGO
 * @property integer $LGV_LOG_TIPO
 * @property string $LGV_LOG_DT_INCLUSAO
 * @property integer $LGV_LOG_FUNCAO
 * @property string $LGV_LOG_COMANDO
 * @property LGVSESSAOPDV $lGVSESSAOPDV
 */
class LogSessao extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_LOG_SESSAO';

    /**
     * @var array
     */
    protected $fillable = ['LGV_LOG_FUNCAO', 'LGV_LOG_COMANDO'];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lGVSESSAOPDV()
    {
        return $this->belongsTo('App\Http\AreasNegocio\CAD\Models\LGVSESSAOPDV', 'LGV_LOG_CODIGO', 'LGV_CODIGO');
    }
}
