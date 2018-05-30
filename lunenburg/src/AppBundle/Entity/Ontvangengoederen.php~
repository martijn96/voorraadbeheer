<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ontvangengoederen
 *
 * @ORM\Table(name="ontvangengoederen")
 * @ORM\Entity
 */
class Ontvangengoederen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="kwaliteit", type="integer", nullable=true)
     */
    private $kwaliteit;

    /**
     * @var integer
     *
     * @ORM\Column(name="aantal", type="integer", nullable=true)
     */
    private $aantal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum_ontvangst", type="date", nullable=true)
     */
    private $datumOntvangst;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="text", length=65535, nullable=true)
     */
    private $omschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="leverancier", type="string", length=255, nullable=true)
     */
    private $leverancier;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set kwaliteit
     *
     * @param integer $kwaliteit
     *
     * @return Ontvangengoederen
     */
    public function setKwaliteit($kwaliteit)
    {
        $this->kwaliteit = $kwaliteit;

        return $this;
    }

    /**
     * Get kwaliteit
     *
     * @return integer
     */
    public function getKwaliteit()
    {
        return $this->kwaliteit;
    }

    /**
     * Set aantal
     *
     * @param integer $aantal
     *
     * @return Ontvangengoederen
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return integer
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    /**
     * Set datumOntvangst
     *
     * @param \DateTime $datumOntvangst
     *
     * @return Ontvangengoederen
     */
    public function setDatumOntvangst($datumOntvangst)
    {
        $this->datumOntvangst = $datumOntvangst;

        return $this;
    }

    /**
     * Get datumOntvangst
     *
     * @return \DateTime
     */
    public function getDatumOntvangst()
    {
        return $this->datumOntvangst;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return Ontvangengoederen
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
     * Set leverancier
     *
     * @param string $leverancier
     *
     * @return Ontvangengoederen
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
