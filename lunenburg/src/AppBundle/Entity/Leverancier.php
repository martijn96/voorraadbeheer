<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leverancier
 *
 * @ORM\Table(name="leverancier")
 * @ORM\Entity
 */
class Leverancier
{
    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255, nullable=false)
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=255, nullable=false)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=6, nullable=false)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="plaats", type="string", length=255, nullable=false)
     */
    private $plaats;

    /**
     * @var integer
     *
     * @ORM\Column(name="telnummer", type="integer", nullable=false)
     */
    private $telnummer;

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
     * @return Leverancier
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
     * Set adres
     *
     * @param string $adres
     *
     * @return Leverancier
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Leverancier
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set plaats
     *
     * @param string $plaats
     *
     * @return Leverancier
     */
    public function setPlaats($plaats)
    {
        $this->plaats = $plaats;

        return $this;
    }

    /**
     * Get plaats
     *
     * @return string
     */
    public function getPlaats()
    {
        return $this->plaats;
    }

    /**
     * Set telnummer
     *
     * @param integer $telnummer
     *
     * @return Leverancier
     */
    public function setTelnummer($telnummer)
    {
        $this->telnummer = $telnummer;

        return $this;
    }

    /**
     * Get telnummer
     *
     * @return integer
     */
    public function getTelnummer()
    {
        return $this->telnummer;
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

    public function __toString()
    {
        return (string) $this->id;
    }
}
