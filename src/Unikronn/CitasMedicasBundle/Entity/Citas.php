<?php

namespace Unikronn\CitasMedicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Citas
 *
 * @ORM\Table(name="citas")
 * @ORM\Entity(repositoryClass="Unikronn\CitasMedicasBundle\Repository\CitasRepository")
 */
class Citas
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
     * @ORM\Column(name="id_citas", type="integer", unique=true)
     */
    private $idCitas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @ORM\OneToMany(targetEntity="Clientes", mappedBy="citas")
     * @ORM\OneToMany(targetEntity="Tipo_cita", mappedBy="citas")
     */
    protected $clientes;
    protected $tipo_cita;

    public function __construct()
    {
        $this->clientes = new ArrayCollection();
        $this->tipo_cita = new ArrayCollection();
    }

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
     * Set idCitas
     *
     * @param integer $idCitas
     * @return Citas
     */
    public function setIdCitas($idCitas)
    {
        $this->idCitas = $idCitas;

        return $this;
    }

    /**
     * Get idCitas
     *
     * @return integer 
     */
    public function getIdCitas()
    {
        return $this->idCitas;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Citas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Add clientes
     *
     * @param \Unikronn\CitasMedicasBundle\Entity\Clientes $clientes
     * @return Citas
     */
    public function addCliente(\Unikronn\CitasMedicasBundle\Entity\Clientes $clientes)
    {
        $this->clientes[] = $clientes;

        return $this;
    }

    /**
     * Remove clientes
     *
     * @param \Unikronn\CitasMedicasBundle\Entity\Clientes $clientes
     */
    public function removeCliente(\Unikronn\CitasMedicasBundle\Entity\Clientes $clientes)
    {
        $this->clientes->removeElement($clientes);
    }

    /**
     * Get clientes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClientes()
    {
        return $this->clientes;
    }
}
