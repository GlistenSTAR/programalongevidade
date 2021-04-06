<?php
namespace App\Http\AreasNegocio\CAD\WSDL\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfObjLGPDAceite ArrayType
 * @subpackage Arrays
 */
class ArrayOfObjLGPDAceite extends AbstractStructArrayBase
{
    /**
     * The ObjLGPDAceite
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ObjLGPDAceite[]
     */
    public $ObjLGPDAceite;
    /**
     * Constructor method for ArrayOfObjLGPDAceite
     * @uses ArrayOfObjLGPDAceite::setObjLGPDAceite()
     * @param \StructType\ObjLGPDAceite[] $objLGPDAceite
     */
    public function __construct(array $objLGPDAceite = array())
    {
        $this
            ->setObjLGPDAceite($objLGPDAceite);
    }
    /**
     * Get ObjLGPDAceite value
     * @return \StructType\ObjLGPDAceite[]|null
     */
    public function getObjLGPDAceite()
    {
        return $this->ObjLGPDAceite;
    }
    /**
     * This method is responsible for validating the values passed to the setObjLGPDAceite method
     * This method is willingly generated in order to preserve the one-line inline validation within the setObjLGPDAceite method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateObjLGPDAceiteForArrayConstraintsFromSetObjLGPDAceite(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfObjLGPDAceiteObjLGPDAceiteItem) {
            // validation for constraint: itemType
            if (!$arrayOfObjLGPDAceiteObjLGPDAceiteItem instanceof \StructType\ObjLGPDAceite) {
                $invalidValues[] = is_object($arrayOfObjLGPDAceiteObjLGPDAceiteItem) ? get_class($arrayOfObjLGPDAceiteObjLGPDAceiteItem) : sprintf('%s(%s)', gettype($arrayOfObjLGPDAceiteObjLGPDAceiteItem), var_export($arrayOfObjLGPDAceiteObjLGPDAceiteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ObjLGPDAceite property can only contain items of type \StructType\ObjLGPDAceite, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ObjLGPDAceite value
     * @throws \InvalidArgumentException
     * @param \StructType\ObjLGPDAceite[] $objLGPDAceite
     * @return \ArrayType\ArrayOfObjLGPDAceite
     */
    public function setObjLGPDAceite(array $objLGPDAceite = array())
    {
        // validation for constraint: array
        if ('' !== ($objLGPDAceiteArrayErrorMessage = self::validateObjLGPDAceiteForArrayConstraintsFromSetObjLGPDAceite($objLGPDAceite))) {
            throw new \InvalidArgumentException($objLGPDAceiteArrayErrorMessage, __LINE__);
        }
        $this->ObjLGPDAceite = $objLGPDAceite;
        return $this;
    }
    /**
     * Add item to ObjLGPDAceite value
     * @throws \InvalidArgumentException
     * @param \StructType\ObjLGPDAceite $item
     * @return \ArrayType\ArrayOfObjLGPDAceite
     */
    public function addToObjLGPDAceite(\StructType\ObjLGPDAceite $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ObjLGPDAceite) {
            throw new \InvalidArgumentException(sprintf('The ObjLGPDAceite property can only contain items of type \StructType\ObjLGPDAceite, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ObjLGPDAceite[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ObjLGPDAceite|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ObjLGPDAceite|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ObjLGPDAceite|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ObjLGPDAceite|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ObjLGPDAceite|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ObjLGPDAceite
     */
    public function getAttributeName()
    {
        return 'ObjLGPDAceite';
    }
}
