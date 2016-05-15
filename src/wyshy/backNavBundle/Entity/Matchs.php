<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 *
 * @ORM\Table(name="matchs", indexes={@ORM\Index(name="idcompetition", columns={"idcompetition"}), @ORM\Index(name="idjoueur1", columns={"idjoueur1"}), @ORM\Index(name="idjoueur2", columns={"idjoueur2"}), @ORM\Index(name="idarbitre", columns={"idarbitre"}), @ORM\Index(name="idevenement", columns={"idevenement"}), @ORM\Index(name="idscore", columns={"idscore"}), @ORM\Index(name="idticket", columns={"idticket"}), @ORM\Index(name="idstade", columns={"idstade"})})
 * @ORM\Entity
 */
class Matchs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="`idmatch`", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmatch;

    /**
     * @var string
     *
     * @ORM\Column(name="`categorie`", type="string", length=10, nullable=true)
     */
    private $categorie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="`datematch`", type="date", nullable=true)
     */
    private $datematch;

    /**
     * @var string
     *
     * @ORM\Column(name="`niveau`", type="string", length=30, nullable=true)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="`type`", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="`datedestruction`", type="date", nullable=true)
     */
    private $datedestruction;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="`idevenement`", referencedColumnName="`idevenement`")
     * })
     */
    private $idevenement;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="`idarbitre`", referencedColumnName="`idpersonne`")
     * })
     */
    private $idarbitre;

    /**
     * @var \Competition
     *
     * @ORM\ManyToOne(targetEntity="Competition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcompetition", referencedColumnName="idcompetition")
     * })
     */
    private $idcompetition;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjoueur1", referencedColumnName="idpersonne")
     * })
     */
    public $idjoueur1;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjoueur2", referencedColumnName="idpersonne")
     * })
     */
    public $idjoueur2;

    /**
     * @var \Score
     *
     * @ORM\ManyToOne(targetEntity="Score")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idscore", referencedColumnName="idscore")
     * })
     */
    private $idscore;

    /**
     * @var \Stade
     *
     * @ORM\ManyToOne(targetEntity="Stade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idstade", referencedColumnName="idstade")
     * })
     */
    private $idstade;

    /**
     * @var \Ticket
     *
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="`idticket`", referencedColumnName="`idticket`")
     * })
     */
    private $idticket;



    /**
     * Get idmatch
     *
     * @return integer 
     */
    public function getIdmatch()
    {
        return $this->idmatch;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Matchs
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
     * Set datematch
     *
     * @param \DateTime $datematch
     * @return Matchs
     */
    public function setDatematch($datematch)
    {
        $this->datematch = $datematch;

        return $this;
    }

    /**
     * Get datematch
     *
     * @return \DateTime 
     */
    public function getDatematch()
    {
        return $this->datematch;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return Matchs
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
     * Set type
     *
     * @param string $type
     * @return Matchs
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
     * Set datedestruction
     *
     * @param \DateTime $datedestruction
     * @return Matchs
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

    /**
     * Set idevenement
     *
     * @param \wyshy\backNavBundle\Entity\Evenement $idevenement
     * @return Matchs
     */
    public function setIdevenement(\wyshy\backNavBundle\Entity\Evenement $idevenement = null)
    {
        $this->idevenement = $idevenement;

        return $this;
    }

    /**
     * Get idevenement
     *
     * @return \wyshy\backNavBundle\Entity\Evenement 
     */
    public function getIdevenement()
    {
        return $this->idevenement;
    }

    /**
     * Set idarbitre
     *
     * @param \wyshy\backNavBundle\Entity\Personne $idarbitre
     * @return Matchs
     */
    public function setIdarbitre(\wyshy\backNavBundle\Entity\Personne $idarbitre = null)
    {
        $this->idarbitre = $idarbitre;

        return $this;
    }

    /**
     * Get idarbitre
     *
     * @return \wyshy\backNavBundle\Entity\Personne 
     */
    public function getIdarbitre()
    {
        return $this->idarbitre;
    }

    /**
     * Set idcompetition
     *
     * @param \wyshy\backNavBundle\Entity\Competition $idcompetition
     * @return Matchs
     */
    public function setIdcompetition(\wyshy\backNavBundle\Entity\Competition $idcompetition = null)
    {
        $this->idcompetition = $idcompetition;

        return $this;
    }

    /**
     * Get idcompetition
     *
     * @return \wyshy\backNavBundle\Entity\Competition 
     */
    public function getIdcompetition()
    {
        return $this->idcompetition;
    }

    /**
     * Set idjoueur1
     *
     * @param \wyshy\backNavBundle\Entity\Personne $idjoueur1
     * @return Matchs
     */
    public function setIdjoueur1(\wyshy\backNavBundle\Entity\Personne $idjoueur1 = null)
    {
        $this->idjoueur1 = $idjoueur1;

        return $this;
    }

    /**
     * Get idjoueur1
     *
     * @return \wyshy\backNavBundle\Entity\Personne 
     */
    public function getIdjoueur1()
    {
        return $this->idjoueur1;
    }

    /**
     * Set idjoueur2
     *
     * @param \wyshy\backNavBundle\Entity\Personne $idjoueur2
     * @return Matchs
     */
    public function setIdjoueur2(\wyshy\backNavBundle\Entity\Personne $idjoueur2 = null)
    {
        $this->idjoueur2 = $idjoueur2;

        return $this;
    }

    /**
     * Get idjoueur2
     *
     * @return \wyshy\backNavBundle\Entity\Personne 
     */
    public function getIdjoueur2()
    {
        return $this->idjoueur2;
    }

    /**
     * Set idscore
     *
     * @param \wyshy\backNavBundle\Entity\Score $idscore
     * @return Matchs
     */
    public function setIdscore(\wyshy\backNavBundle\Entity\Score $idscore = null)
    {
        $this->idscore = $idscore;

        return $this;
    }

    /**
     * Get idscore
     *
     * @return \wyshy\backNavBundle\Entity\Score 
     */
    public function getIdscore()
    {
        return $this->idscore;
    }

    /**
     * Set idstade
     *
     * @param \wyshy\backNavBundle\Entity\Stade $idstade
     * @return Matchs
     */
    public function setIdstade(\wyshy\backNavBundle\Entity\Stade $idstade = null)
    {
        $this->idstade = $idstade;

        return $this;
    }

    /**
     * Get idstade
     *
     * @return \wyshy\backNavBundle\Entity\Stade 
     */
    public function getIdstade()
    {
        return $this->idstade;
    }

    /**
     * Set idticket
     *
     * @param \wyshy\backNavBundle\Entity\Ticket $idticket
     * @return Matchs
     */
    public function setIdticket(\wyshy\backNavBundle\Entity\Ticket $idticket = null)
    {
        $this->idticket = $idticket;

        return $this;
    }

    /**
     * Get idticket
     *
     * @return \wyshy\backNavBundle\Entity\Ticket 
     */
    public function getIdticket()
    {
        return $this->idticket;
    }
    
    public function getNumberjoueur1()
    {
        return $this->idjoueur1;
    }
    
    public function getNumberjoueur2()
    {
        return $this->idjoueur2;
    }
}
