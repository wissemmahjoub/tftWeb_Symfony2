<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idactualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=500, nullable=false)
     */
    private $sujet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublication", type="date", nullable=false)
     */
    private $datepublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedestruction", type="date", nullable=false)
     */
    private $datedestruction;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;


}
