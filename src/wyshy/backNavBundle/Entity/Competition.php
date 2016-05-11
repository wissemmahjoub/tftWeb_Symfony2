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

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personne", mappedBy="idcompetition")
     */
    private $idjoueur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idjoueur = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
