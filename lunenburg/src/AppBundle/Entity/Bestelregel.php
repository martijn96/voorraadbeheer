<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bestelregel
 *
 * @ORM\Table(name="bestelregel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestelregelRepository")
 */
class Bestelregel
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
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var int

     *
     * @ORM\ManyToOne(targetEntity="bestelling", inversedBy="bestelregel")
     * @ORM\JoinColumn(name="bestelling_id", referencedColumnName="id")
     */
    private $bestellingId;

    /**
     * @var int
     *
     * @ORM\Column(name="aantal", type="integer")
     */
    private $aantal;


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
     * Set productId
     *
     * @param integer $productId
     *
     * @return Bestelregel
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set bestellingId
     *
     * @param integer $bestellingId
     *
     * @return Bestelregel
     */
    public function setBestellingId($bestellingId)
    {
        $this->bestellingId = $bestellingId;

        return $this;
    }

    /**
     * Get bestellingId
     *
     * @return int
     */
    public function getBestellingId()
    {
        return $this->bestellingId;
    }

    /**
     * Set aantal
     *
     * @param integer $aantal
     *
     * @return Bestelregel
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return int
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}

