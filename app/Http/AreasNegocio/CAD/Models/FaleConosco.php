<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $LGV_FALE_CONOSCO_ID
 * @property int $LGV_FALE_CONOSCO_ID_PACIENTE
 * @property string $LGV_FALE_CONOSCO_NOME
 * @property string $LGV_FALE_CONOSCO_EMAIL
 * @property string $LGV_FALE_CONOSCO_COMENTARIO
 * @property string $LGV_FALE_CONOSCO_DATA
 * @property string $LGV_FALE_CONOSCO_UF
 * @property string $LGV_FALE_CONOSCO_CIDADE
 * @property string $LGV_FALE_CONOSCO_MOTIVO
 * @property string $LGV_FALE_CONOSCO_PRODUTO
 */
class FaleConosco extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_FALE_CONOSCO';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'LGV_FALE_CONOSCO_ID';

    /**
     * @var array
     */
    protected $fillable = ['LGV_FALE_CONOSCO_ID_PACIENTE', 'LGV_FALE_CONOSCO_NOME', 'LGV_FALE_CONOSCO_EMAIL', 'LGV_FALE_CONOSCO_COMENTARIO', 'LGV_FALE_CONOSCO_DATA', 'LGV_FALE_CONOSCO_UF', 'LGV_FALE_CONOSCO_CIDADE', 'LGV_FALE_CONOSCO_MOTIVO', 'LGV_FALE_CONOSCO_PRODUTO'];

    public $timestamps = false;

}
