<?php

namespace imovel\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contratacao
 *
 * @ORM\Table(name="CONTRATACAO")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="imovel\Entity\ContratacaoRepository")
 */
class Contratacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTRATACAO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContratacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_IMOVEL", type="integer", nullable=false)
     */
    private $idImovel;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $data;



    /**
     * Get idContratacao
     *
     * @return integer
     */
    public function getIdContratacao()
    {
        return $this->idContratacao;
    }

    /**
     * Set idImovel
     *
     * @param integer $idImovel
     *
     * @return Contratacao
     */
    public function setIdImovel($idImovel)
    {
        $this->idImovel = $idImovel;
    
        return $this;
    }

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
     * Set data
     *
     * @param string $data
     *
     * @return Contratacao
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
}
