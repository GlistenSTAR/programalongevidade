<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $LGV_CONTROLE_TABELA_ID
 * @property integer $LGV_VERSAO
 * @property integer $LGV_INTERFACE
 * @property string $LGV_DT_ALTERACAO
 */
class ControleTabela extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_CONTROLE_TABELA';

    protected $primaryKey = 'LGV_CONTROLE_TABELA_ID';

    /**
     * @var array
     */
    protected $fillable = ['LGV_VERSAO', 'LGV_INTERFACE', 'LGV_DT_ALTERACAO'];

    public $timestamps = false;

}
