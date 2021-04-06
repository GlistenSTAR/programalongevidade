<?php
namespace App\Http\Controllers\Utils;


use App\Http\AreasNegocio\CAD\Models\FaleConosco;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class FaleConoscoModelConverter implements IRequestModelConverter
{
    /**
     * @inheritDoc
     */
    public static function requestToModel(Request $poRequest, Model &$poModel)
    {

        if ($poModel instanceof FaleConosco) {

            try {
                $poModel->LGV_FALE_CONOSCO_ID_PACIENTE = empty($poRequest->input('IdPaciente')) ? 0 : $poRequest->input('IdPaciente');
                $poModel->LGV_FALE_CONOSCO_NOME = $poRequest->input('Nome');
                $poModel->LGV_FALE_CONOSCO_EMAIL = $poRequest->input('Email');
                $poModel->LGV_FALE_CONOSCO_COMENTARIO = $poRequest->input('Mensagem');
                $poModel->LGV_FALE_CONOSCO_UF = $poRequest->input('Estado');
                $poModel->LGV_FALE_CONOSCO_CIDADE = $poRequest->input('Cidade');
                $poModel->LGV_FALE_CONOSCO_MOTIVO = $poRequest->input('Motivo');
                $poModel->LGV_FALE_CONOSCO_PRODUTO = $poRequest->input('Produto');
                $poModel->LGV_FALE_CONOSCO_DATA = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));

                return true;

            } catch (\Exception $e) {

                Log::error("#####FaleConoscoModelConverter->requestToModel ------ \r\n" . $e->getMessage());
                return false;
            }

        }

        return false;

    }


}