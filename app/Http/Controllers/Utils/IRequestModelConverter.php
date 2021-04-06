<?php
namespace App\Http\Controllers\Utils;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface IRequestModelConverter
{

    /**
     * Convert request to model
     *
     * @param Request $poRequest
     * @param Model $poModel
     * @return boolean
     */
    public static function requestToModel(Request $poRequest, Model &$poModel);

}