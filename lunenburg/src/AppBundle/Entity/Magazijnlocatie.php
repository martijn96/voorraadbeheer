<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magazijnlocatie
 *
 * @ORM\Table(name="magazijnlocatie")
 * @ORM\Entity
 */
class Magazijnlocatie
{
    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255, nullable=false)
     */
    private $naam = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Magazijnlocatie
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
