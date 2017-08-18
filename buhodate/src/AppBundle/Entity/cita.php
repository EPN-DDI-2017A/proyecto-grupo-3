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
<<<<<<< HEAD
     * @ORM\Column(name="id_Emisor", type="integer")
     */
    private $idEmisor;

    /**
     * @var int
     *
=======
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813
     * @ORM\Column(name="id_Receptor", type="integer")
     */
    private $idReceptor;

    /**
<<<<<<< HEAD
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
=======
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="direccion", type="string", length=100, nullable=true)
=======
     * @ORM\Column(name="direccion", type="string", length=500, nullable=true)
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813
     */
    private $direccion;

    /**
<<<<<<< HEAD
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
=======
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

>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

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
<<<<<<< HEAD
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
=======
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813
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
<<<<<<< HEAD
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
=======
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return cita
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

        return $this;
    }

    /**
<<<<<<< HEAD
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
=======
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
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

        return $this;
    }

    /**
<<<<<<< HEAD
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
=======
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
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

        return $this;
    }

    /**
<<<<<<< HEAD
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
=======
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
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get calificacion
     *
     * @return int
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }
}

=======
     * Get usuarios
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }


}
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813
