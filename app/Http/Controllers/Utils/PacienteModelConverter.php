<?php
namespace App\Http\Controllers\Utils;

use App\Http\AreasNegocio\CAD\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class PacienteModelConverter implements IRequestModelConverter
{
    /**
     * @inheritDoc
     */
    public static function requestToModel(Request $poRequest, Model &$poModel)
    {

        if ($poModel instanceof Paciente) {

            try {

                $loTelDDD = " ";
                $loTel = "0";
                $laOutputArray = [];

                if (!empty($poRequest->input('TelComercial'))) {

                    preg_match("/(\d+)/", $poRequest->input('TelComercial'), $laOutputArray);

                    $loTelDDD = $laOutputArray[0];

                    preg_match("/(\d+-\d+)/", $poRequest->input('TelComercial'), $laOutputArray);

                    $loTel = $laOutputArray[0];

                }

                $loCelDDD = " ";
                $loCel = "0";

                if (!empty($poRequest->input('TelCelular'))) {

                    preg_match("/(\d+)/", $poRequest->input('TelCelular'), $laOutputArray);

                    $loCelDDD = $laOutputArray[0];

                    preg_match("/(\d+-\d+)/", $poRequest->input('TelCelular'), $laOutputArray);

                    $loCel = $laOutputArray[0];

                }


                $poModel->LGV_USER_NOME = $poRequest->input('Nome');
                if (!empty($poRequest->input('dtNascimento'))) {
                    $poModel->LGV_USER_DATA_NASCIMENTO = Carbon::createFromFormat("d/m/Y", $poRequest->input('dtNascimento'), Config::get("app.DEFAULT_TIMEZONE"));
                }
                $poModel->LGV_USER_SEXO = Config::get('app.DEFAULT_SEVEN_GENDER');

                $poModel->LGV_USER_EMAIL = "";
                if (!empty($poRequest->input('Email'))) {
                    $poModel->LGV_USER_EMAIL = $poRequest->input('Email');
                }
                $poModel->LGV_USER_SENHA = Config::get('app.DEFAULT_SEVEN_PASSWORD');
                $poModel->LGV_USER_ENDERECO = Config::get('app.DEFAULT_SEVEN_ADDRESS');
                $poModel->LGV_USER_ENDERECO_NUMERO = Config::get('app.DEFAULT_SEVEN_ADDRESS_NUMBER');
                $poModel->LGV_USER_ENDERECO_COMPLEMENTO = Config::get('app.DEFAULT_SEVEN_COMPLEMENT');
                $poModel->LGV_USER_ENDERECO_BAIRRO = Config::get('app.DEFAULT_SEVEN_NEIGHBORHOOD');
                $poModel->LGV_USER_ENDERECO_CIDADE = Config::get('app.DEFAULT_SEVEN_CITY');
                $poModel->LGV_USER_ENDERECO_ESTADO = Config::get('app.DEFAULT_SEVEN_STATE');
                $poModel->LGV_USER_ENDERECO_CEP = Config::get('app.DEFAULT_SEVEN_ZIPCODE');
                $poModel->LGV_USER_TELEFONE_FIXO_DDD = $loTelDDD;
                $poModel->LGV_USER_TELEFONE_FIXO_NUMERO = StringUtils::clearSpecialCharacters($loTel);
                $poModel->LGV_USER_TELEFONE_CELULAR_DDD = $loCelDDD;
                $poModel->LGV_USER_TELEFONE_CELULAR_NUMERO = StringUtils::clearSpecialCharacters($loCel);
                $poModel->LGV_USER_DATA_CADASTRO = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
                $poModel->LGV_USER_DATA_ULTIMA_ALTERACAO = Carbon::now()->setTimezone(Config::get("app.DEFAULT_TIMEZONE"));
                $poModel->LGV_USER_STATUS = true;
                if (!empty($poRequest->input('Cpf'))) {
                    $poModel->LGV_USER_CPF = StringUtils::clearSpecialCharacters($poRequest->input('Cpf'));
                }

                return true;

            } catch (\Exception $e) {

                Log::error("#####PacienteModelConverter->requestToModel ------ \r\n" . $e->getMessage());
                return false;
            }

        }

        return false;
    }
}