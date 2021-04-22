<?php
namespace App\Http\AreasNegocio\CAD\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ESTADO_ID
 * @property string $ESTADO_NOME
 * @property string $ESTADO_UF
 */
class Estado extends Model
{
    use Cachable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'BRASIL_ESTADOS';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ESTADO_ID';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ESTADO_NOME', 'ESTADO_UF'];

    public $timestamps = false;

}
