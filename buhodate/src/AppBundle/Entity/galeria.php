<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * galeria
 *
 * @ORM\Table(name="galeria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\galeriaRepository")
 */
class galeria
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
     * @ORM\Column(name="foto", type="string", length=255, nullable=true)
=======
     * @ORM\Column(name="foto", type="string", length=500, nullable=true)
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813
     */
    private $foto;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="descripcion", type="string", length=500, nullable=true)
     */
    private $descripcion;
=======
     * @ORM\Column(name="tipo", type="string", length=40, nullable=true)
     */
    private $tipo;
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="estado", type="string", length=30)
     */
    private $estado;
=======
     * @ORM\Column(name="descripcion", type="string", length=500, nullable=true)
     */
    private $descripcion;
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="tipo", type="string", length=30)
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="usuario", inversedBy="galeria")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;
=======
     * @ORM\Column(name="estado", type="string", length=20)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="galerias")
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
     * Set foto
     *
     * @param string $foto
     *
     * @return galeria
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
<<<<<<< HEAD
=======
     * Set tipo
     *
     * @param string $tipo
     *
     * @return galeria
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
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return galeria
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
     * @return galeria
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

<<<<<<< HEAD
    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return galeria
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
=======


    /**
     * Set usuarios
     *
     * @param \AppBundle\Entity\User $usuarios
     *
     * @return galeria
     */
    public function setUsuarios(\AppBundle\Entity\User $usuarios = null)
    {
        $this->usuarios = $usuarios;
>>>>>>> 0fc3177daa2b8bf49985945722d59de32fbd0813

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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
