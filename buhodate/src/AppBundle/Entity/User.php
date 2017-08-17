<?php
/**
 * Created by PhpStorm.
 * User: andrestaipe
 * Date: 3/8/17
 * Time: 22:43
 */

namespace AppBundle\Entity;

use AppBundle\Form\UserType;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * @ORM\OneToMany(targetEntity="cita", mappedBy="usuarios")
     */
    private $citas;

    /**
     * @ORM\OneToMany(targetEntity="galeria", mappedBy="usuarios")
     */
    private $galerias;



    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->citas = new ArrayCollection();
        $this->galerias = new ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return User
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
     * @return User
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
     * Set fono
     *
     * @param string $fono
     *
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * Add cita
     *
     * @param \AppBundle\Entity\cita $citas
     *
     * @return User
     */
    public function addCita(\AppBundle\Entity\cita $citas)
    {
        $this->citas[] = $citas;

        return $this;
    }

    /**
     * Remove cita
     *
     * @param \AppBundle\Entity\cita $citas
     */
    public function removeCita(\AppBundle\Entity\cita $citas)
    {
        $this->citas->removeElement($citas);
    }

    /**
     * Get citas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCita()
    {
        return $this->citas;
    }

    /**
     * Add galeria
     *
     * @param \AppBundle\Entity\galeria $galeria
     *
     * @return User
     */
    public function addGaleria(\AppBundle\Entity\galeria $galeria)
    {
        $this->galerias[] = $galeria;

        return $this;
    }

    /**
     * Remove galeria
     *
     * @param \AppBundle\Entity\galeria $galeria
     */
    public function removeGaleria(\AppBundle\Entity\galeria $galeria)
    {
        $this->galerias->removeElement($galeria);
    }

    /**
     * Get galerias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGalerias()
    {
        return $this->galerias;
    }
}
