<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idevenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=500, nullable=true)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=20, nullable=false)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedestruction", type="date", nullable=true)
     */
    private $datedestruction;

    
    
    function getIdevenement() {
        return $this->idevenement;
    }

    function getVideo() {
        return $this->video;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getLieu() {
        return $this->lieu;
    }

    function getDatedebut() {
        return $this->datedebut;
    }

    function getDatefin() {
        return $this->datefin;
    }

    function getDatedestruction() {
        return $this->datedestruction;
    }

    function setIdevenement($idevenement) {
        $this->idevenement = $idevenement;
    }

    function setVideo($video) {
        $this->video = $video;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    function setDatedebut(\DateTime $datedebut) {
        $this->datedebut = $datedebut;
    }

    function setDatefin(\DateTime $datefin) {
        $this->datefin = $datefin;
    }

    function setDatedestruction(\DateTime $datedestruction) {
        $this->datedestruction = $datedestruction;
    }



}
