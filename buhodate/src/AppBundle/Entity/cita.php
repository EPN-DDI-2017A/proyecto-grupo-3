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
     * @ORM\Column(name="id_Receptor", type="integer")
     */
    private $idReceptor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=500, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=20)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="citas")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuarios;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return cita
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
     * Set usuarios
     *
     * @param \AppBundle\Entity\User $usuarios
     *
     * @return cita
     */
    public function setUsuarios(\AppBundle\Entity\User $usuarios = null)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    /**
     * Get usuarios
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }


}
