<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goederenontvangst
 *
 * @ORM\Table(name="goederenontvangst")
 * @ORM\Entity
 */
class Goederenontvangst
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="date", nullable=true)
     */
    private $datum;

    /**
     * @var string
     *
     * @ORM\Column(name="leverancier", type="string", length=11, nullable=true)
     */
    private $leverancier;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordernummer", type="integer", nullable=true)
     */
    private $ordernummer;

    /**
     * @var string
     *
     * @ORM\Column(name="kwaliteit", type="text", length=65535, nullable=true)
     */
    private $kwaliteit;

    /**
     * @var string
     *
     * @ORM\Column(name="artikelnummer", type="text", length=65535, nullable=true)
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="aantal", type="text", length=65535, nullable=true)
     */
    private $aantal;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="text", length=65535, nullable=true)
     */
    private $omschrijving;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Goederenontvangst
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set leverancier
     *
     * @param string $leverancier
     *
     * @return Goederenontvangst
     */
    public function setLeverancier($leverancier)
    {
        $this->leverancier = $leverancier;

        return $this;
    }

    /**
     * Get leverancier
     *
     * @return string
     */
    public function getLeverancier()
    {
        return $this->leverancier;
    }

    /**
     * Set ordernummer
     *
     * @param integer $ordernummer
     *
     * @return Goederenontvangst
     */
    public function setOrdernummer($ordernummer)
    {
        $this->ordernummer = $ordernummer;

        return $this;
    }

    /**
     * Get ordernummer
     *
     * @return integer
     */
    public function getOrdernummer()
    {
        return $this->ordernummer;
    }

    /**
     * Set kwaliteit
     *
     * @param string $kwaliteit
     *
     * @return Goederenontvangst
     */
    public function setKwaliteit($kwaliteit)
    {
        $this->kwaliteit = $kwaliteit;

        return $this;
    }

    /**
     * Get kwaliteit
     *
     * @return string
     */
    public function getKwaliteit()
    {
        return $this->kwaliteit;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return Goederenontvangst
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

        return $this;
    }

    /**
     * Get artikelnummer
     *
     * @return string
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     * Set aantal
     *
     * @param string $aantal
     *
     * @return Goederenontvangst
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return string
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return Goederenontvangst
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
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
