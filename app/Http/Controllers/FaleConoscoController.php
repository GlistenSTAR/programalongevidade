<?php
namespace App\Http\Controllers;

use App\Http\AreasNegocio\CAD\Models\FaleConosco;
use App\Http\AreasNegocio\CAN\IServiceLogsCAN;
use App\Http\Controllers\Utils\FaleConoscoModelConverter;
use App\Http\Requests\ServiceLogsRequest;
use App\Mail\FaleConoscoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class FaleConoscoController extends Controller
{

    private $serviceLogsCAN;

    /**
     * FaleConoscoController constructor.
     */
    public function __construct(IServiceLogsCAN $poServiceLogsCAN)
    {
        $this->serviceLogsCAN = $poServiceLogsCAN;

    }

    public function faleConoscoPostAction(Request $poRequest) {

        $loFaleConosco = new FaleConosco();

        if (FaleConoscoModelConverter::requestToModel($poRequest, $loFaleConosco)) {

            $loRequest = new ServiceLogsRequest();
            $loRequest->setFaleConosco($loFaleConosco);

            $loResponse = $this->serviceLogsCAN->insertFaleConoscoLog($loRequest);

            if ($loResponse->getisOperationSuccess()) {

                $loRequest->getFaleConosco()->LGV_FALE_CONOSCO_DATA = $loRequest->getFaleConosco()->LGV_FALE_CONOSCO_DATA->format("d/m/Y H:i");
                if (!empty(trim($loRequest->getFaleConosco()->LGV_FALE_CONOSCO_EMAIL))) {
                    Mail::to($loRequest->getFaleConosco()->LGV_FALE_CONOSCO_EMAIL)->bcc(Config::get("app.MAIL_DEFAULT_BCC"))->send(new FaleConoscoMail($loRequest));
                }

            }
        }

        return redirect()->route('fale_conosco_ok');


    }


}
