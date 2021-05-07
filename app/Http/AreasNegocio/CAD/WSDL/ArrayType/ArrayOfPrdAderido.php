<?php

namespace App\Http\AreasNegocio\CAD\WSDL\ArrayType;

use App\Http\AreasNegocio\CAD\WSDL\StructType\PrdAderido;
use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPrdAderido ArrayType
 * @subpackage Arrays
 */
class ArrayOfPrdAderido extends AbstractStructArrayBase
{
    /**
     * The PrdAderido
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var PrdAderido[]
     */
    public $PrdAderido;
    /**
     * Constructor method for ArrayOfPrdAderido
     * @uses ArrayOfPrdAderido::setPrdAderido()
     * @param PrdAderido[] $prdAderido
     */
    public function __construct(array $prdAderido = array())
    {
        $this
            ->setPrdAderido($prdAderido);
    }
    /**
     * Get PrdAderido value
     * @return PrdAderido[]|null
     */
    public function getPrdAderido()
    {
        return $this->PrdAderido;
    }
    /**
     * Set PrdAderido value
     * @throws \InvalidArgumentException
     * @param PrdAderido[] $prdAderido
     * @return ArrayOfPrdAderido
     */
    public function setPrdAderido(array $prdAderido = array())
    {
        foreach ($prdAderido as $arrayOfPrdAderidoPrdAderidoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPrdAderidoPrdAderidoItem instanceof PrdAderido) {
                throw new \InvalidArgumentException(sprintf('The PrdAderido property can only contain items of PrdAderido, "%s" given', is_object($arrayOfPrdAderidoPrdAderidoItem) ? get_class($arrayOfPrdAderidoPrdAderidoItem) : gettype($arrayOfPrdAderidoPrdAderidoItem)), __LINE__);
            }
        }
        $this->PrdAderido = $prdAderido;
        return $this;
    }
    /**
     * Add item to PrdAderido value
     * @throws \InvalidArgumentException
     * @param PrdAderido $item
     * @return ArrayOfPrdAderido
     */
    public function addToPrdAderido(PrdAderido $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof PrdAderido) {
            throw new \InvalidArgumentException(sprintf('The PrdAderido property can only contain items of PrdAderido, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PrdAderido[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return PrdAderido|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return PrdAderido|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return PrdAderido|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return PrdAderido|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return PrdAderido|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PrdAderido
     */
    public function getAttributeName()
    {
        return 'PrdAderido';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return ArrayOfPrdAderido
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
