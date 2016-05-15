<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dossiermedical
 *
 * @ORM\Table(name="dossiermedical", uniqueConstraints={@ORM\UniqueConstraint(name="idjoueur", columns={"idjoueur"})}, indexes={@ORM\Index(name="idtest", columns={"idtest"})})
 * @ORM\Entity
 */
class Dossiermedical
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddossier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddossier;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer", nullable=false)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="fumeur", type="string", length=11, nullable=false)
     */
    private $fumeur;

    /**
     * @var float
     *
     * @ORM\Column(name="poid", type="float", precision=10, scale=0, nullable=false)
     */
    private $poid;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=false)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=30, nullable=true)
     */
    private $situation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbenfant", type="integer", nullable=true)
     */
    private $nbenfant;

    /**
     * @var string
     *
     * @ORM\Column(name="nomprenompere", type="string", length=255, nullable=true)
     */
    private $nomprenompere;

    /**
     * @var string
     *
     * @ORM\Column(name="nomprenommere", type="string", length=255, nullable=true)
     */
    private $nomprenommere;

    /**
     * @var string
     *
     * @ORM\Column(name="maladie", type="text", nullable=true)
     */
    private $maladie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datederniervisite", type="date", nullable=true)
     */
    private $datederniervisite;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonvisite", type="text", nullable=true)
     */
    private $raisonvisite;

    /**
     * @var string
     *
     * @ORM\Column(name="sang", type="string", length=30, nullable=true)
     */
    private $sang;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Test")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtest", referencedColumnName="idtest")
     * })
     */
    private $Test;

   

    /**
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjoueur", referencedColumnName="idpersonne")
     * })
     */

    private $Personne;

    function getIddossier() {
        return $this->iddossier;
    }

    function getTaille() {
        return $this->taille;
    }

    function getFumeur() {
        return $this->fumeur;
    }

    function getPoid() {
        return $this->poid;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function getSituation() {
        return $this->situation;
    }

    function getNbenfant() {
        return $this->nbenfant;
    }

    function getNomprenompere() {
        return $this->nomprenompere;
    }

    function getNomprenommere() {
        return $this->nomprenommere;
    }

    function getMaladie() {
        return $this->maladie;
    }

    function getDatederniervisite() {
        return $this->datederniervisite;
    }

    function getRaisonvisite() {
        return $this->raisonvisite;
    }

    function getSang() {
        return $this->sang;
    }

    function getTest() {
        return $this->Test;
    }

    function getPersonne() {
        return $this->Personne;
    }

    function setIddossier($iddossier) {
        $this->iddossier = $iddossier;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setFumeur($fumeur) {
        $this->fumeur = $fumeur;
    }

    function setPoid($poid) {
        $this->poid = $poid;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function setSituation($situation) {
        $this->situation = $situation;
    }

    function setNbenfant($nbenfant) {
        $this->nbenfant = $nbenfant;
    }

    function setNomprenompere($nomprenompere) {
        $this->nomprenompere = $nomprenompere;
    }

    function setNomprenommere($nomprenommere) {
        $this->nomprenommere = $nomprenommere;
    }

    function setMaladie($maladie) {
        $this->maladie = $maladie;
    }

    function setDatederniervisite(\DateTime $datederniervisite) {
        $this->datederniervisite = $datederniervisite;
    }

    function setRaisonvisite($raisonvisite) {
        $this->raisonvisite = $raisonvisite;
    }

    function setSang($sang) {
        $this->sang = $sang;
    }

    function setTest($Test) {
        $this->Test = $Test;
    }

    function setPersonne($Personne) {
        $this->Personne = $Personne;
    }


}
