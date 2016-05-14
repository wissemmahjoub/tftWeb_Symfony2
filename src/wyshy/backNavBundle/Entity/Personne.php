<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne", uniqueConstraints={@ORM\UniqueConstraint(name="CIN", columns={"cin"}), @ORM\UniqueConstraint(name="login", columns={"login"})}, indexes={@ORM\Index(name="idclub", columns={"idclub"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="wyshy\backNavBundle\Entity\JoueurRepository")
 */
class Personne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpersonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=30, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=30, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=true)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=30, nullable=true)
     */
    private $specialite;

    /**
     * @var integer
     *
     * @ORM\Column(name="experience", type="integer", nullable=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=20, nullable=true)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=20, nullable=true)
     */
    private $role;

    /**
     * @var float
     *
     * @ORM\Column(name="credit", type="float", precision=10, scale=0, nullable=true)
     */
    private $credit;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrjeton", type="integer", nullable=true)
     */
    private $nbrjeton;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedestruction", type="date", nullable=true)
     */
    private $datedestruction;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=20, nullable=true)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=100, nullable=true)
     */
    private $avatar;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_invit", type="integer", nullable=true)
     */
    private $etatInvit;

    /**
     * @var integer
     *
     * @ORM\Column(name="abonne", type="integer", nullable=true)
     */
    private $abonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=true)
     */
    private $tel;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclub", referencedColumnName="idclub")
     * })
     */
    private $idclub;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ticket", inversedBy="idmembre")
     * @ORM\JoinTable(name="achat",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idmembre", referencedColumnName="idpersonne")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idticket_achat", referencedColumnName="idticket")
     *   }
     * )
     */
    private $idticketAchat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Competition", inversedBy="idjoueur")
     * @ORM\JoinTable(name="classement",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idjoueur", referencedColumnName="idpersonne")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idcompetition", referencedColumnName="idcompetition")
     *   }
     * )
     */
    private $idcompetition;

   

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Test", mappedBy="idjoueur")
     */
    private $idtestInvitation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ticket", inversedBy="idmembreReservation")
     * @ORM\JoinTable(name="reservation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idmembre_reservation", referencedColumnName="idpersonne")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idticket", referencedColumnName="idticket")
     *   }
     * )
     */
    private $idticket;
    function getIdpersonne() {
        return $this->idpersonne;
    }

    function getCin() {
        return $this->cin;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getEmail() {
        return $this->email;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getDatenaissance() {
        return $this->datenaissance;
    }

    function getSalaire() {
        return $this->salaire;
    }

    function getSpecialite() {
        return $this->specialite;
    }

    function getExperience() {
        return $this->experience;
    }

    function getSection() {
        return $this->section;
    }

    function getRole() {
        return $this->role;
    }

    function getCredit() {
        return $this->credit;
    }

    function getNbrjeton() {
        return $this->nbrjeton;
    }

    function getDatedestruction() {
        return $this->datedestruction;
    }

    function getNiveau() {
        return $this->niveau;
    }

    function getAvatar() {
        return $this->avatar;
    }

    function getEtatInvit() {
        return $this->etatInvit;
    }

    function getAbonne() {
        return $this->abonne;
    }

    function getTel() {
        return $this->tel;
    }

    function getIdclub() {
        return $this->idclub;
    }

    function getIdticketAchat() {
        return $this->idticketAchat;
    }

    function getIdcompetition() {
        return $this->idcompetition;
    }

 

    function getIdtestInvitation() {
        return $this->idtestInvitation;
    }

    function getIdticket() {
        return $this->idticket;
    }

    function setIdpersonne($idpersonne) {
        $this->idpersonne = $idpersonne;
    }

    function setCin($cin) {
        $this->cin = $cin;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setDatenaissance(\DateTime $datenaissance) {
        $this->datenaissance = $datenaissance;
    }

    function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }

    function setExperience($experience) {
        $this->experience = $experience;
    }

    function setSection($section) {
        $this->section = $section;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setCredit($credit) {
        $this->credit = $credit;
    }

    function setNbrjeton($nbrjeton) {
        $this->nbrjeton = $nbrjeton;
    }

    function setDatedestruction(\DateTime $datedestruction) {
        $this->datedestruction = $datedestruction;
    }

    function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    function setEtatInvit($etatInvit) {
        $this->etatInvit = $etatInvit;
    }

    function setAbonne($abonne) {
        $this->abonne = $abonne;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setIdclub(\Club $idclub) {
        $this->idclub = $idclub;
    }

    function setIdticketAchat(\Doctrine\Common\Collections\Collection $idticketAchat) {
        $this->idticketAchat = $idticketAchat;
    }

    function setIdcompetition(\Doctrine\Common\Collections\Collection $idcompetition) {
        $this->idcompetition = $idcompetition;
    }

    

    function setIdtestInvitation(\Doctrine\Common\Collections\Collection $idtestInvitation) {
        $this->idtestInvitation = $idtestInvitation;
    }

    function setIdticket(\Doctrine\Common\Collections\Collection $idticket) {
        $this->idticket = $idticket;
    }

        /**
     * Constructor
     */
    public function __construct()
    {
        $this->idticketAchat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idcompetition = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idtestInvitation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idticket = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
