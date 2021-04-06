<?php
namespace App\Http\AreasNegocio\CAD\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $CIDADE_ID
 * @property string $CIDADE_NOME
 * @property string $CIDADE_ESTADO
 */
class Cidade extends Model
{

    use Cachable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'BRASIL_CIDADES';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'CIDADE_ID';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['CIDADE_NOME', 'CIDADE_ESTADO'];

    public $timestamps = false;

}
