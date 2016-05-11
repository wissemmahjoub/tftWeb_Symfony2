<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idticket;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrticket", type="integer", nullable=false)
     */
    private $nbrticket;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personne", mappedBy="idticketAchat")
     */
    private $idmembre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personne", mappedBy="idticket")
     */
    private $idmembreReservation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmembre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idmembreReservation = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
