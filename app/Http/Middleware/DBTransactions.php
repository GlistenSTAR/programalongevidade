<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class DBTransactions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        \DB::beginTransaction();

        if (\Config::get("app.debug") == "true") {
            Log::info("####Query log enabled");
            \DB::connection()->enableQueryLog();
        }

        Log::info("####Response init, Beginning transaction....");
        try {
            $response = $next($request);
        } catch (\Exception $e) {
            Log::error("####Exception in response, rolling back....");
            \DB::rollBack();
            throw $e;
        }

        if (\Config::get("app.debug") == "true") {
            Log::info("####Executed query -> ".json_encode(\DB::getQueryLog()));
        }

        if ($response instanceof Response && $response->getStatusCode() > 399) {
            Log::error("####Exception in response, rolling back....");
            \DB::rollBack();
        } else {
            Log::info("####Response ok, commit ok....");
            \DB::commit();
        }
        return $response;
    }
}