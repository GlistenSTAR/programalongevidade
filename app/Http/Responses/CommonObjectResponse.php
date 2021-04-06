<?php
namespace App\Http\Responses;

class CommonObjectResponse extends BaseResponse
{

    private $object;

    /**
     * CommonObjectResponse constructor.
     */
    public function __construct() {
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object): void
    {
        $this->object = $object;
    }

}