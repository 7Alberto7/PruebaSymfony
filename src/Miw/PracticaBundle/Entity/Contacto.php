<?php

namespace Miw\PracticaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacto
 */
class Contacto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $tlfFijo;

    /**
     * @var string
     */
    private $tlfMovil;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $nacimiento;

    /**
     * @var \Miw\PracticaBundle\Entity\User
     */
    private $usuarioFk;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Contacto
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Contacto
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set tlfFijo
     *
     * @param string $tlfFijo
     * @return Contacto
     */
    public function setTlfFijo($tlfFijo)
    {
        $this->tlfFijo = $tlfFijo;

        return $this;
    }

    /**
     * Get tlfFijo
     *
     * @return string 
     */
    public function getTlfFijo()
    {
        return $this->tlfFijo;
    }

    /**
     * Set tlfMovil
     *
     * @param string $tlfMovil
     * @return Contacto
     */
    public function setTlfMovil($tlfMovil)
    {
        $this->tlfMovil = $tlfMovil;

        return $this;
    }

    /**
     * Get tlfMovil
     *
     * @return string 
     */
    public function getTlfMovil()
    {
        return $this->tlfMovil;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contacto
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nacimiento
     *
     * @param \DateTime $nacimiento
     * @return Contacto
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;

        return $this;
    }

    /**
     * Get nacimiento
     *
     * @return \DateTime 
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * Set usuarioFk
     *
     * @param \Miw\PracticaBundle\Entity\User $usuarioFk
     * @return Contacto
     */
    public function setUsuarioFk(\Miw\PracticaBundle\Entity\User $usuarioFk = null)
    {
        $this->usuarioFk = $usuarioFk;

        return $this;
    }

    /**
     * Get usuarioFk
     *
     * @return \Miw\PracticaBundle\Entity\User 
     */
    public function getUsuarioFk()
    {
        return $this->usuarioFk;
    }
}
