<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255, nullable=false)
     */
    private $naam = '';

    /**
     * @var string
     *
     * @ORM\Column(name="beschrijving", type="text", length=65535, nullable=true)
     */
    private $beschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="specificaties", type="text", length=65535, nullable=true)
     */
    private $specificaties;

    /**
     * @var string
     *
     * @ORM\Column(name="inkoopprijs", type="string", length=255, nullable=false)
     */
    private $inkoopprijs = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="magazijnlocatie_id", type="integer", nullable=true)
     */
    private $magazijnlocatieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="minVoorraad", type="integer", nullable=true)
     */
    private $minvoorraad;

    /**
     * @var integer
     *
     * @ORM\Column(name="voorraad", type="integer", nullable=false)
     */
    private $voorraad;

    /**
     * @var integer
     *
     * @ORM\Column(name="vervangend_id", type="integer", nullable=true)
     */
    private $vervangendId;

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
     * @return Product
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
     * Set beschrijving
     *
     * @param string $beschrijving
     *
     * @return Product
     */
    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;

        return $this;
    }

    /**
     * Get beschrijving
     *
     * @return string
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * Set specificaties
     *
     * @param string $specificaties
     *
     * @return Product
     */
    public function setSpecificaties($specificaties)
    {
        $this->specificaties = $specificaties;

        return $this;
    }

    /**
     * Get specificaties
     *
     * @return string
     */
    public function getSpecificaties()
    {
        return $this->specificaties;
    }

    /**
     * Set inkoopprijs
     *
     * @param string $inkoopprijs
     *
     * @return Product
     */
    public function setInkoopprijs($inkoopprijs)
    {
        $this->inkoopprijs = $inkoopprijs;

        return $this;
    }

    /**
     * Get inkoopprijs
     *
     * @return string
     */
    public function getInkoopprijs()
    {
        return $this->inkoopprijs;
    }

    /**
     * Set magazijnlocatieId
     *
     * @param integer $magazijnlocatieId
     *
     * @return Product
     */
    public function setMagazijnlocatieId($magazijnlocatieId)
    {
        $this->magazijnlocatieId = $magazijnlocatieId;

        return $this;
    }

    /**
     * Get magazijnlocatieId
     *
     * @return integer
     */
    public function getMagazijnlocatieId()
    {
        return $this->magazijnlocatieId;
    }

    /**
     * Set minvoorraad
     *
     * @param integer $minvoorraad
     *
     * @return Product
     */
    public function setMinvoorraad($minvoorraad)
    {
        $this->minvoorraad = $minvoorraad;

        return $this;
    }

    /**
     * Get minvoorraad
     *
     * @return integer
     */
    public function getMinvoorraad()
    {
        return $this->minvoorraad;
    }

    /**
     * Set voorraad
     *
     * @param integer $voorraad
     *
     * @return Product
     */
    public function setVoorraad($voorraad)
    {
        $this->voorraad = $voorraad;

        return $this;
    }

    /**
     * Get voorraad
     *
     * @return integer
     */
    public function getVoorraad()
    {
        return $this->voorraad;
    }

    /**
     * Set vervangendId
     *
     * @param integer $vervangendId
     *
     * @return Product
     */
    public function setVervangendId($vervangendId)
    {
        $this->vervangendId = $vervangendId;

        return $this;
    }

    /**
     * Get vervangendId
     *
     * @return integer
     */
    public function getVervangendId()
    {
        return $this->vervangendId;
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
