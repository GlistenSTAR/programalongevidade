<?php
namespace App\Http\Controllers\Utils;


class StringUtils
{

    public static function clearSpecialCharacters($psString) {
        return preg_replace('/[^A-Za-z0-9]/', '', $psString);
    }

}