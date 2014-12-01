<?php

namespace imovel\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietario
 *
 * @ORM\Table(name="PROPRIETARIO")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="imovel\Entity\ProprietarioRepository")
 */
class Proprietario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROPRIETARIO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProprietario;

    /**
     * @var string
     *
     * @ORM\Column(name="CPF", type="decimal", precision=11, scale=0, nullable=false)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="RG", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_NASCIMENTO", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="CADASTRO", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $cadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="CIDADE", type="string", length=80, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="BAIRRO", type="string", length=80, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="ENDERECO", type="string", length=120, nullable=true)
     */
    private $endereco;



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
     * Set cpf
     *
     * @param string $cpf
     *
     * @return Proprietario
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    
        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Proprietario
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set rg
     *
     * @param string $rg
     *
     * @return Proprietario
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    
        return $this;
    }

    /**
     * Get rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set dataNascimento
     *
     * @param string $dataNascimento
     *
     * @return Proprietario
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    
        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return string
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set cadastro
     *
     * @param string $cadastro
     *
     * @return Proprietario
     */
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;
    
        return $this;
    }

    /**
     * Get cadastro
     *
     * @return string
     */
    public function getCadastro()
    {
        return $this->cadastro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     *
     * @return Proprietario
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
     * Set bairro
     *
     * @param string $bairro
     *
     * @return Proprietario
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
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Proprietario
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
}
