<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\usuarioRepository")
 */
class usuario
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
     * @ORM\Column(name="mail", type="string", length=50, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=256)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=50, nullable=true, unique=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="fono", type="string", length=15, nullable=true)
     */
    private $fono;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=20, nullable=true)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnaci", type="date", nullable=true)
     */
    private $fnaci;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=50, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=50, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="carrera", type="string", length=100, nullable=true)
     */
    private $carrera;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=30)
     */
    private $estado;

    /**
     * @ORM\OneToMany(targetEntity="cita", mappedBy="usuario")
     */
    private $cita;

    /**
     * @ORM\OneToMany(targetEntity="galeria", mappedBy="usuario")
     */
    private $galeria;

    public function __construct()
    {
        $this->cita = new ArrayCollection();
        $this->galeria = new ArrayCollection();
    }

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
     * Set mail
     *
     * @param string $mail
     *
     * @return usuario
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return usuario
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return usuario
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return usuario
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set fono
     *
     * @param string $fono
     *
     * @return usuario
     */
    public function setFono($fono)
    {
        $this->fono = $fono;

        return $this;
    }

    /**
     * Get fono
     *
     * @return string
     */
    public function getFono()
    {
        return $this->fono;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return usuario
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fnaci
     *
     * @param \DateTime $fnaci
     *
     * @return usuario
     */
    public function setFnaci($fnaci)
    {
        $this->fnaci = $fnaci;

        return $this;
    }

    /**
     * Get fnaci
     *
     * @return \DateTime
     */
    public function getFnaci()
    {
        return $this->fnaci;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return usuario
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return usuario
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return usuario
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return usuario
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
     * Set carrera
     *
     * @param string $carrera
     *
     * @return usuario
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return string
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return usuario
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
     * @return usuario
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
