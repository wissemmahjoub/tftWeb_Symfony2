<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sessionformation
 *
 * @ORM\Table(name="sessionformation")
 * @ORM\Entity
 */
class Sessionformation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsession", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsession;

    /**
     * @var string
     *
     * @ORM\Column(name="libellesession", type="string", length=20, nullable=false)
     */
    private $libellesession;

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

    /**
     * @var string
     *
     * @ORM\Column(name="cible", type="string", length=20, nullable=false)
     */
    private $cible;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=20, nullable=false)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=20, nullable=false)
     */
    private $section;


}
