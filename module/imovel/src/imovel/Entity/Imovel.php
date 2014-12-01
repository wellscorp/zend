<?php

namespace imovel\Entity;

use Doctrine\ORM\Mapping as ORM;
use imovel\Entity\AbstractEntity;

/**
 * Imovel
 *
 * @ORM\Table(name="IMOVEL")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="imovel\Entity\ImovelRepository")
 */
class Imovel extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_IMOVEL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImovel;

    /**
     * @var string
     *
     * @ORM\Column(name="ENDERECO", type="string", length=150, nullable=false)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="BAIRRO", type="string", length=60, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="CIDADE", type="string", length=60, nullable=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="CEP", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $cep;

    /**
     * @var float
     *
     * @ORM\Column(name="CORDENADA_X", type="float", precision=24, scale=0, nullable=true)
     */
    private $cordenadaX;

    /**
     * @var float
     *
     * @ORM\Column(name="CORDENADA_Y", type="float", precision=24, scale=0, nullable=true)
     */
    private $cordenadaY;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACAO", type="string", length=200, nullable=true)
     */
    private $observacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROPRIETARIO", type="integer", nullable=false)
     */
    private $idProprietario;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_INQUILINO", type="integer", nullable=false)
     */
    private $idInquilino;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRICAO", type="string", length=200, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRATO_INICIO", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $contratoInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRATO_FIM", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $contratoFim;

    /**
     * @var string
     *
     * @ORM\Column(name="LINK_CONTRATO", type="string", length=200, nullable=true)
     */
    private $linkContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMERO", type="decimal", precision=5, scale=0, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="LAJE", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $laje;

    /**
     * @var string
     *
     * @ORM\Column(name="ALTURA", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $altura;

    /**
     * @var string
     *
     * @ORM\Column(name="LARGURA", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $largura;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLEMENTO", type="string", length=120, nullable=true)
     */
    private $complemento;



    /**
     * Get idImovel
     *
     * @return integer
     */
    public function getIdImovel()
    {
        return $this->idImovel;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Imovel
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    
        return $this;
    }

    /**
     * Get endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     *
     * @return Imovel
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    
        return $this;
    }

    /**
     * Get bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     *
     * @return Imovel
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    
        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return Imovel
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    
        return $this;
    }

    /**
     * Get cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set cordenadaX
     *
     * @param float $cordenadaX
     *
     * @return Imovel
     */
    public function setCordenadaX($cordenadaX)
    {
        $this->cordenadaX = $cordenadaX;
    
        return $this;
    }

    /**
     * Get cordenadaX
     *
     * @return float
     */
    public function getCordenadaX()
    {
        return $this->cordenadaX;
    }

    /**
     * Set cordenadaY
     *
     * @param float $cordenadaY
     *
     * @return Imovel
     */
    public function setCordenadaY($cordenadaY)
    {
        $this->cordenadaY = $cordenadaY;
    
        return $this;
    }

    /**
     * Get cordenadaY
     *
     * @return float
     */
    public function getCordenadaY()
    {
        return $this->cordenadaY;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return Imovel
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    
        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set idProprietario
     *
     * @param integer $idProprietario
     *
     * @return Imovel
     */
    public function setIdProprietario($idProprietario)
    {
        $this->idProprietario = $idProprietario;
    
        return $this;
    }

    /**
     * Get idProprietario
     *
     * @return integer
     */
    public function getIdProprietario()
    {
        return $this->idProprietario;
    }

    /**
     * Set idInquilino
     *
     * @param integer $idInquilino
     *
     * @return Imovel
     */
    public function setIdInquilino($idInquilino)
    {
        $this->idInquilino = $idInquilino;
    
        return $this;
    }

    /**
     * Get idInquilino
     *
     * @return integer
     */
    public function getIdInquilino()
    {
        return $this->idInquilino;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Imovel
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    
        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Imovel
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set contratoInicio
     *
     * @param string $contratoInicio
     *
     * @return Imovel
     */
    public function setContratoInicio($contratoInicio)
    {
        $this->contratoInicio = $contratoInicio;
    
        return $this;
    }

    /**
     * Get contratoInicio
     *
     * @return string
     */
    public function getContratoInicio()
    {
        return $this->contratoInicio;
    }

    /**
     * Set contratoFim
     *
     * @param string $contratoFim
     *
     * @return Imovel
     */
    public function setContratoFim($contratoFim)
    {
        $this->contratoFim = $contratoFim;
    
        return $this;
    }

    /**
     * Get contratoFim
     *
     * @return string
     */
    public function getContratoFim()
    {
        return $this->contratoFim;
    }

    /**
     * Set linkContrato
     *
     * @param string $linkContrato
     *
     * @return Imovel
     */
    public function setLinkContrato($linkContrato)
    {
        $this->linkContrato = $linkContrato;
    
        return $this;
    }

    /**
     * Get linkContrato
     *
     * @return string
     */
    public function getLinkContrato()
    {
        return $this->linkContrato;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Imovel
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set area
     *
     * @param string $area
     *
     * @return Imovel
     */
    public function setArea($area)
    {
        $this->area = $area;
    
        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set laje
     *
     * @param string $laje
     *
     * @return Imovel
     */
    public function setLaje($laje)
    {
        $this->laje = $laje;
    
        return $this;
    }

    /**
     * Get laje
     *
     * @return string
     */
    public function getLaje()
    {
        return $this->laje;
    }

    /**
     * Set altura
     *
     * @param string $altura
     *
     * @return Imovel
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    
        return $this;
    }

    /**
     * Get altura
     *
     * @return string
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set largura
     *
     * @param string $largura
     *
     * @return Imovel
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;
    
        return $this;
    }

    /**
     * Get largura
     *
     * @return string
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     *
     * @return Imovel
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    
        return $this;
    }

    /**
     * Get complemento
     *
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }
}
