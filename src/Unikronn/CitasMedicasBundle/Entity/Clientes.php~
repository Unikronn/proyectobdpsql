<?php

namespace Unikronn\CitasMedicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes")
 * @ORM\Entity(repositoryClass="Unikronn\CitasMedicasBundle\Repository\ClientesRepository")
 */
class Clientes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cliente", type="integer", unique=true)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=120)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100)
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="Citas", inversedBy="clientes")
     * @ORM\JoinColumn(name="citas_id", referencedColumnName="id")
     */
    protected $citas;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Clientes
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Clientes
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Clientes
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set citas
     *
     * @param \Unikronn\CitasMedicasBundle\Entity\Clientes $citas
     * @return Clientes
     */
    public function setCitas(\Unikronn\CitasMedicasBundle\Entity\Clientes $citas = null)
    {
        $this->citas = $citas;

        return $this;
    }

    /**
     * Get citas
     *
     * @return \Unikronn\CitasMedicasBundle\Entity\Clientes 
     */
    public function getCitas()
    {
        return $this->citas;
    }
}
