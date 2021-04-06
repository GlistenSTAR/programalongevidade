<?php

namespace App\Http\AreasNegocio\CAD\WSDL\ArrayType;

use App\Http\AreasNegocio\CAD\WSDL\StructType\Questao;
use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuestao ArrayType
 * @subpackage Arrays
 */
class ArrayOfQuestao extends AbstractStructArrayBase
{
    /**
     * The Questao
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var Questao[]
     */
    public $Questao;
    /**
     * Constructor method for ArrayOfQuestao
     * @uses ArrayOfQuestao::setQuestao()
     * @param Questao[] $questao
     */
    public function __construct(array $questao = array())
    {
        $this
            ->setQuestao($questao);
    }
    /**
     * Get Questao value
     * @return Questao[]|null
     */
    public function getQuestao()
    {
        return $this->Questao;
    }
    /**
     * Set Questao value
     * @throws \InvalidArgumentException
     * @param Questao[] $questao
     * @return \App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao
     */
    public function setQuestao(array $questao = array())
    {
        foreach ($questao as $arrayOfQuestaoQuestaoItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuestaoQuestaoItem instanceof Questao) {
                throw new \InvalidArgumentException(sprintf('The Questao property can only contain items of Questao, "%s" given', is_object($arrayOfQuestaoQuestaoItem) ? get_class($arrayOfQuestaoQuestaoItem) : gettype($arrayOfQuestaoQuestaoItem)), __LINE__);
            }
        }
        $this->Questao = $questao;
        return $this;
    }
    /**
     * Add item to Questao value
     * @throws \InvalidArgumentException
     * @param Questao $item
     * @return \App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao
     */
    public function addToQuestao(Questao $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof Questao) {
            throw new \InvalidArgumentException(sprintf('The Questao property can only contain items of Questao, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Questao[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return Questao|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return Questao|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return Questao|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return Questao|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return Questao|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Questao
     */
    public function getAttributeName()
    {
        return 'Questao';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \App\Http\AreasNegocio\CAD\WSDL\ArrayType\ArrayOfQuestao
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
