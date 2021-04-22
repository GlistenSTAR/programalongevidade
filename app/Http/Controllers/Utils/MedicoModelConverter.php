<?php
namespace App\Http\Controllers\Utils;

use App\Http\AreasNegocio\CAD\Models\Medico;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MedicoModelConverter implements IRequestModelConverter
{
    /**
     * @inheritDoc
     */
    public static function requestToModel(Request $poRequest, Model &$poModel)
    {

        if ($poModel instanceof Medico) {

            try {

                $poModel->LGV_MEDICO_NOME = $poRequest->input('NomeMedico');
                $poModel->LGV_MEDICO_CRM_NUMERO = $poRequest->input('Crm');
                $poModel->LGV_MEDICO_CRM_UF = $poRequest->input('UfCrm');
                $poModel->LGV_MEDICO_STATUS = true;
                $poModel->LGV_MEDICO_DT_INCLUSAO = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
                
                return true;

            } catch (\Exception $e) {

                Log::error("#####MedicoModelConverter->requestToModel ------ \r\n" . $e->getMessage());
                return false;
            }

        }

        return false;
    }
}