<?php
namespace App\Http\Responses;

class BaseResponse
{

    protected $isOperationSuccess;
    protected $messages;

    /**
     * AbstractResponse constructor
     */
    public function __construct(){
    }

    /**
     * @return mixed
     */
    public function getisOperationSuccess()
    {
        return $this->isOperationSuccess;
    }

    /**
     * @param mixed $isOperationSuccess
     */
    public function setIsOperationSuccess($isOperationSuccess): void
    {
        $this->isOperationSuccess = $isOperationSuccess;
    }

    /**
     * @return mixed
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param mixed $messages
     */
    public function setMessages($messages): void
    {
        $this->messages = $messages;
    }

    /**
     * @return An array of class attributes
     */
    public function toArray()
    {
        return $this->processArray(get_object_vars($this));
    }


    /**
     * Process the object Attributes
     *
     * @param Array $array
     * @return An array of class attributes
     * TODO: Refactor this method to use the "gets" instead of accessing directly the attributes
     */
    private function processArray($array)
    {
        foreach($array as $key => $value)
        {
            if (is_object($value) && method_exists($value, 'toArray'))
            {
                $array[$key] = $value->toArray();
            }
            if (is_array($value) && method_exists($this, 'processArray'))
            {
                $array[$key] = $this->processArray($value);
            }
        }
        // If the property isn't an object or array, leave it untouched
        return $array;
    }


    /**
     * Class To String
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->toArray());
    }

}