<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Bestelling
 *
 * @ORM\Table(name="bestelling")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestellingRepository")
 */
class Bestelling
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     *
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="leverancier_id", type="integer")
     */
    private $leverancierId;

//    /**
//     * @var int
//     *
//     * @ORM\Column(name="keuringseisen", type="integer")
//     */
//    private $keuringseisen;

    /**
     * @ORM\OneToMany(targetEntity="bestelregel", mappedBy="bestelling", cascade={"persist"})
     */
    private $bestelregels;

    public function __construct()
    {
        $this->bestelregels = new ArrayCollection();
    }

    /**
     * @param mixed $bestelregels
     */
    public function setBestelregels($bestelregels)
    {
        $this->bestelregels = $bestelregels;
    }

    /**
     * @return mixed
     */
    public function getBestelregels()
    {
        return $this->bestelregels;
    }

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
     * Set leverancierId
     *
     * @param integer $leverancierId
     *
     * @return Bestelling
     */
    public function setLeverancierId($leverancierId)
    {
        $this->leverancierId = $leverancierId;

        return $this;
    }

    /**
     * Get leverancierId
     *
     * @return int
     */
    public function getLeverancierId()
    {
        return $this->leverancierId;
    }

//    /**
//     * Set keuringseisen
//     *
//     * @param integer $keuringseisen
//     *
//     * @return Bestelling
//     */
//    public function setKeuringseisen($keuringseisen)
//    {
//        $this->keuringseisen = $keuringseisen;
//
//        return $this;
//    }
//
//    /**
//     * Get keuringseisen
//     *
//     * @return int
//     */
//    public function getKeuringseisen()
//    {
//        return $this->keuringseisen;
//    }

    public function __toString()
    {
        return (string) $this->id;
    }
}

