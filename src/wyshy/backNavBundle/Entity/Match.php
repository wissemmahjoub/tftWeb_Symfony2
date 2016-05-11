<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Match
 *
 * @ORM\Table(name="match", indexes={@ORM\Index(name="idcompetition", columns={"idcompetition"}), @ORM\Index(name="idjoueur1", columns={"idjoueur1"}), @ORM\Index(name="idjoueur2", columns={"idjoueur2"}), @ORM\Index(name="idarbitre", columns={"idarbitre"}), @ORM\Index(name="idevenement", columns={"idevenement"}), @ORM\Index(name="idscore", columns={"idscore"}), @ORM\Index(name="idticket", columns={"idticket"}), @ORM\Index(name="idstade", columns={"idstade"})})
 * @ORM\Entity
 */
class Match
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmatch", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmatch;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=10, nullable=true)
     */
    private $categorie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datematch", type="date", nullable=true)
     */
    private $datematch;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=30, nullable=true)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedestruction", type="date", nullable=true)
     */
    private $datedestruction;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idevenement", referencedColumnName="idevenement")
     * })
     */
    private $idevenement;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarbitre", referencedColumnName="idpersonne")
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
    private $idjoueur1;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjoueur2", referencedColumnName="idpersonne")
     * })
     */
    private $idjoueur2;

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
     *   @ORM\JoinColumn(name="idticket", referencedColumnName="idticket")
     * })
     */
    private $idticket;


}
