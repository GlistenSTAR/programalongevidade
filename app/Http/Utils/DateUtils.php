<?php
namespace App\Http\Utils;

use Carbon\Carbon;

class DateUtils
{

    public static function convertDateTimeToFormat($poDateTime, $psDateTimeFormat) {

        return Carbon::createFromFormat(env('DEFAULT_DB_DATE_TIME_FORMAT'), $poDateTime)->format($psDateTimeFormat);

    }

}