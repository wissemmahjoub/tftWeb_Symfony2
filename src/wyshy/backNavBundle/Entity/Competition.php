<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="competition")
 * @ORM\Entity
 */
class Competition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcompetition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompetition;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=20, nullable=true)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date", nullable=true)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=20, nullable=true)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=20, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrpoints", type="integer", nullable=true)
     */
    private $nbrpoints;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedestruction", type="date", nullable=true)
     */
    private $datedestruction;
    
    
        
        
    public $joueurs;
    public $nbrmatch;
    public function setNbrmatch($nbrmatch)
    {
        $this->nbrmatch = $nbrmatch;
    }
    public function getNbrmatch()
    {
        return $this->nbrmatch;
    }
    public function __construct() {
       $this->idjoueurs = new \Doctrine\Common\Collections\ArrayCollection();;
    }
    public function addIdjoueur($idjoueur)
    {
        $this->idjoueurs->add($idjoueur);
    }
    /**
     * Get idcompetition
     *
     * @return integer 
     */
    public function getIdcompetition()
    {
        return $this->idcompetition;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Competition
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
     
    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Competition
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Competition
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return Competition
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Competition
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Competition
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nbrpoints
     *
     * @param integer $nbrpoints
     * @return Competition
     */
    public function setNbrpoints($nbrpoints)
    {
        $this->nbrpoints = $nbrpoints;

        return $this;
    }

    /**
     * Get nbrpoints
     *
     * @return integer 
     */
    public function getNbrpoints()
    {
        return $this->nbrpoints;
    }

    /**
     * Set datedestruction
     *
     * @param \DateTime $datedestruction
     * @return Competition
     */
    public function setDatedestruction($datedestruction)
    {
        $this->datedestruction = $datedestruction;

        return $this;
    }

    /**
     * Get datedestruction
     *
     * @return \DateTime 
     */
    public function getDatedestruction()
    {
        return $this->datedestruction;
    }
}
