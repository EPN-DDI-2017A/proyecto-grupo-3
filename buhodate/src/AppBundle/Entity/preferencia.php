<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
=======
use Doctrine\Common\Collections\ArrayCollection;
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

/**
 * preferencia
 *
 * @ORM\Table(name="preferencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\preferenciaRepository")
 */
class preferencia
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
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="tipo", type="string", length=50, nullable=true)
=======
     * @ORM\Column(name="tipo", type="string", length=255, nullable=true)
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="estado", type="string", length=50)
=======
     * @ORM\Column(name="estado", type="string", length=20)
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813
     */
    private $estado;


<<<<<<< HEAD
=======

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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return preferencia
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return preferencia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return preferencia
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
}

