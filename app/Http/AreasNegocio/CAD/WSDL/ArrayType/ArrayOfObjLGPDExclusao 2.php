<?php
namespace App\Http\AreasNegocio\CAD\WSDL\ArrayType;


use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfObjLGPDExclusao ArrayType
 * @subpackage Arrays
 */
class ArrayOfObjLGPDExclusao extends AbstractStructArrayBase
{
    /**
     * The ObjLGPDExclusao
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ObjLGPDExclusao[]
     */
    public $ObjLGPDExclusao;
    /**
     * Constructor method for ArrayOfObjLGPDExclusao
     * @uses ArrayOfObjLGPDExclusao::setObjLGPDExclusao()
     * @param \StructType\ObjLGPDExclusao[] $objLGPDExclusao
     */
    public function __construct(array $objLGPDExclusao = array())
    {
        $this
            ->setObjLGPDExclusao($objLGPDExclusao);
    }
    /**
     * Get ObjLGPDExclusao value
     * @return \StructType\ObjLGPDExclusao[]|null
     */
    public function getObjLGPDExclusao()
    {
        return $this->ObjLGPDExclusao;
    }
    /**
     * This method is responsible for validating the values passed to the setObjLGPDExclusao method
     * This method is willingly generated in order to preserve the one-line inline validation within the setObjLGPDExclusao method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateObjLGPDExclusaoForArrayConstraintsFromSetObjLGPDExclusao(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfObjLGPDExclusaoObjLGPDExclusaoItem) {
            // validation for constraint: itemType
            if (!$arrayOfObjLGPDExclusaoObjLGPDExclusaoItem instanceof \StructType\ObjLGPDExclusao) {
                $invalidValues[] = is_object($arrayOfObjLGPDExclusaoObjLGPDExclusaoItem) ? get_class($arrayOfObjLGPDExclusaoObjLGPDExclusaoItem) : sprintf('%s(%s)', gettype($arrayOfObjLGPDExclusaoObjLGPDExclusaoItem), var_export($arrayOfObjLGPDExclusaoObjLGPDExclusaoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ObjLGPDExclusao property can only contain items of type \StructType\ObjLGPDExclusao, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ObjLGPDExclusao value
     * @throws \InvalidArgumentException
     * @param \StructType\ObjLGPDExclusao[] $objLGPDExclusao
     * @return \ArrayType\ArrayOfObjLGPDExclusao
     */
    public function setObjLGPDExclusao(array $objLGPDExclusao = array())
    {
        // validation for constraint: array
        if ('' !== ($objLGPDExclusaoArrayErrorMessage = self::validateObjLGPDExclusaoForArrayConstraintsFromSetObjLGPDExclusao($objLGPDExclusao))) {
            throw new \InvalidArgumentException($objLGPDExclusaoArrayErrorMessage, __LINE__);
        }
        $this->ObjLGPDExclusao = $objLGPDExclusao;
        return $this;
    }
    /**
     * Add item to ObjLGPDExclusao value
     * @throws \InvalidArgumentException
     * @param \StructType\ObjLGPDExclusao $item
     * @return \ArrayType\ArrayOfObjLGPDExclusao
     */
    public function addToObjLGPDExclusao(\StructType\ObjLGPDExclusao $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ObjLGPDExclusao) {
            throw new \InvalidArgumentException(sprintf('The ObjLGPDExclusao property can only contain items of type \StructType\ObjLGPDExclusao, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ObjLGPDExclusao[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ObjLGPDExclusao|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ObjLGPDExclusao|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ObjLGPDExclusao|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ObjLGPDExclusao|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ObjLGPDExclusao|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ObjLGPDExclusao
     */
    public function getAttributeName()
    {
        return 'ObjLGPDExclusao';
    }
}
