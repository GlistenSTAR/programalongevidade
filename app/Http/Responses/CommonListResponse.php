<?php
namespace App\Http\Responses;

class CommonListResponse extends BaseResponse
{

    protected $objList;

    /**
     * CommonListResponse constructor.
     */
    public function __construct() {
    }

    /**
     * @return mixed
     */
    public function getObjList()
    {
        return $this->objList;
    }

    /**
     * @param mixed $objList
     */
    public function setObjList($objList): void
    {
        $this->objList = $objList;
    }

}