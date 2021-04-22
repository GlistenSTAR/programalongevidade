<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LGV_PRODUTO_ID
 * @property string $LGV_PRODUTO_DESCRICAO
 * @property boolean $LGV_STATUS
 * @property string $LGV_DATA_CADASTRO
 * @property string $LGV_PRODUTO_EAN
 * @property string $LGV_PRODUTO_MARCA
 * @property string $LGV_PRODUTO_ADM
 * @property string $LGV_PRODUTO_CTL
 * @property string $LGV_PRODUTO_IDP
 */
class Produto extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_PRODUTOS';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'LGV_PRODUTO_ID';

    /**
     * @var array
     */
    protected $fillable = ['LGV_PRODUTO_DESCRICAO', 'LGV_STATUS', 'LGV_DATA_CADASTRO', 'LGV_PRODUTO_EAN', 'LGV_PRODUTO_MARCA', 'LGV_PRODUTO_ADM', 'LGV_PRODUTO_CTL', 'LGV_PRODUTO_IDP'];

    public $timestamps = false;

}
