<?php

namespace FloridaCampus\InfoBundle\Entity;

/**
 * Alumno
 */
class Alumno
{
    /**
     * @var int
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
     * @var int
     */
    private $numTelefono;

    /**
     * @var int
     */
    private $estudioCursado;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Alumno
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
     *
     * @return Alumno
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
     * Set numTelefono
     *
     * @param integer $numTelefono
     *
     * @return Alumno
     */
    public function setNumTelefono($numTelefono)
    {
        $this->numTelefono = $numTelefono;

        return $this;
    }

    /**
     * Get numTelefono
     *
     * @return int
     */
    public function getNumTelefono()
    {
        return $this->numTelefono;
    }

    /**
     * Set estudioCursado
     *
     * @param integer $estudioCursado
     *
     * @return Alumno
     */
    public function setEstudioCursado($estudioCursado)
    {
        $this->estudioCursado = $estudioCursado;

        return $this;
    }

    /**
     * Get estudioCursado
     *
     * @return int
     */
    public function getEstudioCursado()
    {
        return $this->estudioCursado;
    }
}
