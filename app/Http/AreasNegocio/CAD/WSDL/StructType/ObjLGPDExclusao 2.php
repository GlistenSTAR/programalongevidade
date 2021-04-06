<?php

namespace App\Http\AreasNegocio\CAD\WSDL\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ObjLGPDExclusao StructType
 * @subpackage Structs
 */
class ObjLGPDExclusao extends AbstractStructBase
{
    /**
     * The DataExclusao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DataExclusao;
    /**
     * The DataSolicitacao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DataSolicitacao;
    /**
     * The OrigemSolicitacao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrigemSolicitacao;
    /**
     * The VersaoTermo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VersaoTermo;
    /**
     * Constructor method for ObjLGPDExclusao
     * @uses ObjLGPDExclusao::setDataExclusao()
     * @uses ObjLGPDExclusao::setDataSolicitacao()
     * @uses ObjLGPDExclusao::setOrigemSolicitacao()
     * @uses ObjLGPDExclusao::setVersaoTermo()
     * @param string $dataExclusao
     * @param string $dataSolicitacao
     * @param string $origemSolicitacao
     * @param string $versaoTermo
     */
    public function __construct($dataExclusao = null, $dataSolicitacao = null, $origemSolicitacao = null, $versaoTermo = null)
    {
        $this
            ->setDataExclusao($dataExclusao)
            ->setDataSolicitacao($dataSolicitacao)
            ->setOrigemSolicitacao($origemSolicitacao)
            ->setVersaoTermo($versaoTermo);
    }
    /**
     * Get DataExclusao value
     * @return string
     */
    public function getDataExclusao()
    {
        return $this->DataExclusao;
    }
    /**
     * Set DataExclusao value
     * @param string $dataExclusao
     * @return \StructType\ObjLGPDExclusao
     */
    public function setDataExclusao($dataExclusao = null)
    {
        // validation for constraint: string
        if (!is_null($dataExclusao) && !is_string($dataExclusao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataExclusao, true), gettype($dataExclusao)), __LINE__);
        }
        $this->DataExclusao = $dataExclusao;
        return $this;
    }
    /**
     * Get DataSolicitacao value
     * @return string
     */
    public function getDataSolicitacao()
    {
        return $this->DataSolicitacao;
    }
    /**
     * Set DataSolicitacao value
     * @param string $dataSolicitacao
     * @return \StructType\ObjLGPDExclusao
     */
    public function setDataSolicitacao($dataSolicitacao = null)
    {
        // validation for constraint: string
        if (!is_null($dataSolicitacao) && !is_string($dataSolicitacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataSolicitacao, true), gettype($dataSolicitacao)), __LINE__);
        }
        $this->DataSolicitacao = $dataSolicitacao;
        return $this;
    }
    /**
     * Get OrigemSolicitacao value
     * @return string|null
     */
    public function getOrigemSolicitacao()
    {
        return $this->OrigemSolicitacao;
    }
    /**
     * Set OrigemSolicitacao value
     * @param string $origemSolicitacao
     * @return \StructType\ObjLGPDExclusao
     */
    public function setOrigemSolicitacao($origemSolicitacao = null)
    {
        // validation for constraint: string
        if (!is_null($origemSolicitacao) && !is_string($origemSolicitacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origemSolicitacao, true), gettype($origemSolicitacao)), __LINE__);
        }
        $this->OrigemSolicitacao = $origemSolicitacao;
        return $this;
    }
    /**
     * Get VersaoTermo value
     * @return string|null
     */
    public function getVersaoTermo()
    {
        return $this->VersaoTermo;
    }
    /**
     * Set VersaoTermo value
     * @param string $versaoTermo
     * @return \StructType\ObjLGPDExclusao
     */
    public function setVersaoTermo($versaoTermo = null)
    {
        // validation for constraint: string
        if (!is_null($versaoTermo) && !is_string($versaoTermo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versaoTermo, true), gettype($versaoTermo)), __LINE__);
        }
        $this->VersaoTermo = $versaoTermo;
        return $this;
    }
}
