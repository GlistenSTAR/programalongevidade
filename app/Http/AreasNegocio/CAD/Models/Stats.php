<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $STATS_ID
 * @property string $STATS_DATA
 * @property string $STATS_BROWSER
 * @property string $STATS_IP
 * @property string $STATS_PAGINA_ACESSADA
 * @property int $STATS_ID_USUARIO_LOGADO
 * @property int $STATIS_ID_CONTEUDO_ACESSADO
 * @property string $STATS_TIPO_ACESSO
 */
class Stats extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'STATS';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'STATS_ID';

    /**
     * @var array
     */
    protected $fillable = ['STATS_DATA', 'STATS_BROWSER', 'STATS_IP', 'STATS_PAGINA_ACESSADA', 'STATS_ID_USUARIO_LOGADO', 'STATIS_ID_CONTEUDO_ACESSADO', 'STATS_TIPO_ACESSO'];

    public $timestamps = false;

}
