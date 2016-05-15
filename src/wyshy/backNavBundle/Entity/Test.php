<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity
 */
class Test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtest;

    /**
     * @var string
     *
     * @ORM\Column(name="libelletest", type="string", length=50, nullable=false)
     */
    private $libelletest;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetest", type="date", nullable=false)
     */
    private $datetest;

  /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=10, nullable=true)
     */
    private $heure;
    

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personne", inversedBy="idtestInvitation")
     * @ORM\JoinTable(name="invitation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idtest_invitation", referencedColumnName="idtest")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idjoueur", referencedColumnName="idpersonne")
     *   }
     * )
     */
    private $idjoueur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idjoueur = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    
    function getHeure() {
        return $this->heure;
    }

    function setHeure($heure) {
        $this->heure = $heure;
    }

        
     function getIdtest() {
        return $this->idtest;
    }

    function getLibelletest() {
        return $this->libelletest;
    }

    function getDatetest() {
        return $this->datetest;
    }

    function getIdjoueur() {
        return $this->idjoueur;
    }

    function setIdtest($idtest) {
        $this->idtest = $idtest;
    }

    function setLibelletest($libelletest) {
        $this->libelletest = $libelletest;
    }

    function setDatetest(\DateTime $datetest) {
        $this->datetest = $datetest;
    }

    function setIdjoueur(\Doctrine\Common\Collections\Collection $idjoueur) {
        $this->idjoueur = $idjoueur;
    }

    public function __toString()
{
    return $this->libelletest;
}
    
    
}
