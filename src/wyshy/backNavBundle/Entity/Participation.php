<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="idsession", columns={"idsession"}), @ORM\Index(name="idarbitre", columns={"idparticipant"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsession", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idsession;

    /**
     * @var integer
     *
     * @ORM\Column(name="idparticipant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idparticipant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateenvoi", type="date", nullable=false)
     */
    private $dateenvoi;


}
