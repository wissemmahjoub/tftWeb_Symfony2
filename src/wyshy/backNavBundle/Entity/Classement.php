<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classement
 *
 * @ORM\Table(name="classement", indexes={@ORM\Index(name="fk_joueur", columns={"idjoueur"}), @ORM\Index(name="fk_competition", columns={"idcompetition"})})
 * @ORM\Entity
 */
class Classement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclassement", type="integer", nullable=true)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclassement;

    /**
     * @var integer
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang;

    /**
     * @var \Competition
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Competition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcompetition", referencedColumnName="idcompetition")
     * })
     */
    private $idcompetition;

    /**
     * @var \Personne
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjoueur", referencedColumnName="idpersonne")
     * })
     */
    private $idjoueur;



    /**
     * Set idclassement
     *
     * @param integer $idclassement
     * @return Classement
     */
    public function setIdclassement($idclassement)
    {
        $this->idclassement = $idclassement;

        return $this;
    }

    /**
     * Get idclassement
     *
     * @return integer 
     */
    public function getIdclassement()
    {
        return $this->idclassement;
    }

    /**
     * Set rang
     *
     * @param integer $rang
     * @return Classement
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return integer 
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set idcompetition
     *
     * @param \wyshy\backNavBundle\Entity\Competition $idcompetition
     * @return Classement
     */
    public function setIdcompetition(\wyshy\backNavBundle\Entity\Competition $idcompetition)
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
     * Set idjoueur
     *
     * @param \wyshy\backNavBundle\Entity\Personne $idjoueur
     * @return Classement
     */
    public function setIdjoueur(\wyshy\backNavBundle\Entity\Personne $idjoueur)
    {
        $this->idjoueur = $idjoueur;

        return $this;
    }

    /**
     * Get idjoueur
     *
     * @return \wyshy\backNavBundle\Entity\Personne 
     */
    public function getIdjoueur()
    {
        return $this->idjoueur;
    }
}
