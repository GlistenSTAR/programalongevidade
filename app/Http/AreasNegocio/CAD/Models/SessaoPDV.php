<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LGV_CODIGO
 * @property string $LGV_SESSAO
 * @property boolean $LGV_ATIVO
 * @property integer $LGV_TEMPO
 * @property string $LGV_DT_INCLUSAO
 * @property string $LGV_DT_ALTERACAO
 * @property string $LGV_DT_INATIVACAO
 * @property LGVLOGSESSAO[] $lGVLOGSESSAOs
 */
class SessaoPDV extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_SESSAO_PDV';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'LGV_CODIGO';

    /**
     * @var array
     */
    protected $fillable = ['LGV_SESSAO', 'LGV_ATIVO', 'LGV_TEMPO', 'LGV_DT_INCLUSAO', 'LGV_DT_ALTERACAO', 'LGV_DT_INATIVACAO'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lGVLOGSESSAOs()
    {
        return $this->hasMany('App\Http\AreasNegocio\CAD\Models\LGVLOGSESSAO', 'LGV_LOG_CODIGO', 'LGV_CODIGO');
    }

    public $timestamps = false;
}
