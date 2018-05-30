<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bestelopdracht
 *
 * @ORM\Table(name="bestelopdracht")
 * @ORM\Entity
 */
class Bestelopdracht
{
    /**
     * @var string
     *
     * @ORM\Column(name="product_barcode", type="text", length=65535, nullable=true)
     */
    private $productBarcode;

    /**
     * @var string
     *
     * @ORM\Column(name="aantal", type="text", length=65535, nullable=true)
     */
    private $aantal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="datetime", nullable=true)
     */
    private $datum;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_id", type="integer", nullable=true)
     */
    private $statusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="leverancier_id", type="integer", nullable=true)
     */
    private $leverancierId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set productBarcode
     *
     * @param string $productBarcode
     *
     * @return Bestelopdracht
     */
    public function setProductBarcode($productBarcode)
    {
        $this->productBarcode = $productBarcode;

        return $this;
    }

    /**
     * Get productBarcode
     *
     * @return string
     */
    public function getProductBarcode()
    {
        return $this->productBarcode;
    }

    /**
     * Set aantal
     *
     * @param string $aantal
     *
     * @return Bestelopdracht
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
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Bestelopdracht
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
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return Bestelopdracht
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set leverancierId
     *
     * @param integer $leverancierId
     *
     * @return Bestelopdracht
     */
    public function setLeverancierId($leverancierId)
    {
        $this->leverancierId = $leverancierId;

        return $this;
    }

    /**
     * Get leverancierId
     *
     * @return integer
     */
    public function getLeverancierId()
    {
        return $this->leverancierId;
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
