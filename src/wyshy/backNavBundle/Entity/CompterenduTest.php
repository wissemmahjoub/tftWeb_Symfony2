<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompterenduTest
 *
 * @ORM\Table(name="compterendu_test")
 * @ORM\Entity
 */
class CompterenduTest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtest_compterendu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtestCompterendu;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=11, nullable=false)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

    /**
    * @ORM\ManyToOne(targetEntity="Test")
    * @ORM\JoinColumns({
    * @ORM\JoinColumn(name="test", referencedColumnName="idtest")
    * })
    */
    private $test;
    
    function getIdtestCompterendu() {
        return $this->idtestCompterendu;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getDatecreation() {
        return $this->datecreation;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getTest() {
        return $this->test;
    }

    function setIdtestCompterendu($idtestCompterendu) {
        $this->idtestCompterendu = $idtestCompterendu;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setDatecreation(\DateTime $datecreation) {
        $this->datecreation = $datecreation;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setTest($test) {
        $this->test = $test;
    }

    


}
