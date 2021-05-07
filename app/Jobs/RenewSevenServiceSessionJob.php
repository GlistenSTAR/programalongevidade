<?php
namespace App\Jobs;

use App\Http\AreasNegocio\CAD\Models\SessaoPDV;
use App\Http\AreasNegocio\CAN\IProdutoCAN;
use App\Http\AreasNegocio\CAN\IServiceLogsCAN;
use App\Http\Controllers\Utils\ServiceUtils;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class RenewSevenServiceSessionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(IServiceLogsCAN $poServiceLogsCAN, IProdutoCAN $poProdutoCAN)
    {

        Log::info("####RenewSevenServiceSessionJob handle - ".Carbon::now());


        $serviceUtils = new ServiceUtils($poServiceLogsCAN, $poProdutoCAN);

        $loSessaoPDV = $poServiceLogsCAN->fetchLastSessaoPDV()->getObject();

        if (empty($loSessaoPDV)) {
            $loSessaoPDV = new SessaoPDV();
        }

        $lbRenewSessionResult = $serviceUtils->logOnServiceAction($loSessaoPDV, true);

        Log::info("###RenewSevenServiceSessionJob->handle() result -> ".($lbRenewSessionResult ? "SUCCESS!!!" : "ERROR!!!"));


    }
}
