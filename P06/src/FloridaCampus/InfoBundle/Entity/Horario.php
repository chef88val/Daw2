<?php

namespace FloridaCampus\InfoBundle\Entity;

/**
 * Horario
 */
class Horario
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $horaSalida;

    /**
     * @var string
     */
    private $lugarDeSalida;

    /**
     * @var \DateTime
     */
    private $horaLlegada;

    /**
     * @var string
     */
    private $lugarDeLlegada;


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
     * Set horaSalida
     *
     * @param \DateTime $horaSalida
     *
     * @return Horario
     */
    public function setHoraSalida($horaSalida)
    {
        $this->horaSalida = $horaSalida;

        return $this;
    }

    /**
     * Get horaSalida
     *
     * @return \DateTime
     */
    public function getHoraSalida()
    {
        return $this->horaSalida;
    }

    /**
     * Set lugarDeSalida
     *
     * @param string $lugarDeSalida
     *
     * @return Horario
     */
    public function setLugarDeSalida($lugarDeSalida)
    {
        $this->lugarDeSalida = $lugarDeSalida;

        return $this;
    }

    /**
     * Get lugarDeSalida
     *
     * @return string
     */
    public function getLugarDeSalida()
    {
        return $this->lugarDeSalida;
    }

    /**
     * Set horaLlegada
     *
     * @param \DateTime $horaLlegada
     *
     * @return Horario
     */
    public function setHoraLlegada($horaLlegada)
    {
        $this->horaLlegada = $horaLlegada;

        return $this;
    }

    /**
     * Get horaLlegada
     *
     * @return \DateTime
     */
    public function getHoraLlegada()
    {
        return $this->horaLlegada;
    }

    /**
     * Set lugarDeLlegada
     *
     * @param string $lugarDeLlegada
     *
     * @return Horario
     */
    public function setLugarDeLlegada($lugarDeLlegada)
    {
        $this->lugarDeLlegada = $lugarDeLlegada;

        return $this;
    }

    /**
     * Get lugarDeLlegada
     *
     * @return string
     */
    public function getLugarDeLlegada()
    {
        return $this->lugarDeLlegada;
    }
}

