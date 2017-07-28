<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cita
 *
 * @ORM\Table(name="cita")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\citaRepository")
 */
class cita
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
     * @ORM\Column(name="id_Emisor", type="integer")
     */
    private $idEmisor;

    /**
     * @var int
     *
     * @ORM\Column(name="id_Receptor", type="integer")
     */
    private $idReceptor;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=30)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_inicio", type="datetime")
     */
    private $fInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="f_fin", type="datetime", nullable=true)
     */
    private $fFin;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var int
     *
     * @ORM\Column(name="calificacion", type="integer", nullable=true)
     */
    private $calificacion;

    /**
     * @ORM\ManyToOne(targetEntity="usuario", inversedBy="cita")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEmisor
     *
     * @param integer $idEmisor
     *
     * @return cita
     */
    public function setIdEmisor($idEmisor)
    {
        $this->idEmisor = $idEmisor;

        return $this;
    }

    /**
     * Get idEmisor
     *
     * @return int
     */
    public function getIdEmisor()
    {
        return $this->idEmisor;
    }

    /**
     * Set idReceptor
     *
     * @param integer $idReceptor
     *
     * @return cita
     */
    public function setIdReceptor($idReceptor)
    {
        $this->idReceptor = $idReceptor;

        return $this;
    }

    /**
     * Get idReceptor
     *
     * @return int
     */
    public function getIdReceptor()
    {
        return $this->idReceptor;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return cita
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fInicio
     *
     * @param \DateTime $fInicio
     *
     * @return cita
     */
    public function setFInicio($fInicio)
    {
        $this->fInicio = $fInicio;

        return $this;
    }

    /**
     * Get fInicio
     *
     * @return \DateTime
     */
    public function getFInicio()
    {
        return $this->fInicio;
    }

    /**
     * Set fFin
     *
     * @param \DateTime $fFin
     *
     * @return cita
     */
    public function setFFin($fFin)
    {
        $this->fFin = $fFin;

        return $this;
    }

    /**
     * Get fFin
     *
     * @return \DateTime
     */
    public function getFFin()
    {
        return $this->fFin;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return cita
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
     * Set calificacion
     *
     * @param integer $calificacion
     *
     * @return cita
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return int
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }
}

