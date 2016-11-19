<?php

namespace Unikronn\CitasMedicasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipo_cita
 *
 * @ORM\Table(name="tipo_cita")
 * @ORM\Entity(repositoryClass="Unikronn\CitasMedicasBundle\Repository\Tipo_citaRepository")
 */
class Tipo_cita
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
     * @ORM\Column(name="id_tipo", type="integer", unique=true)
     */
    private $idTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=120)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Citas", inversedBy="tipo_cita")
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
     * Set idTipo
     *
     * @param integer $idTipo
     * @return Tipo_cita
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;

        return $this;
    }

    /**
     * Get idTipo
     *
     * @return integer 
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Tipo_cita
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set citas
     *
     * @param \Unikronn\CitasMedicasBundle\Entity\Citas $citas
     * @return Tipo_cita
     */
    public function setCitas(\Unikronn\CitasMedicasBundle\Entity\Citas $citas = null)
    {
        $this->citas = $citas;

        return $this;
    }

    /**
     * Get citas
     *
     * @return \Unikronn\CitasMedicasBundle\Entity\Citas 
     */
    public function getCitas()
    {
        return $this->citas;
    }
}
