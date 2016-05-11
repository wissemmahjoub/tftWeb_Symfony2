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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personne", inversedBy="idtestCompterendu")
     * @ORM\JoinTable(name="compterendu_test",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idtest_compterendu", referencedColumnName="idtest")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idmedecin", referencedColumnName="idpersonne")
     *   }
     * )
     */
    private $idmedecin;

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
        $this->idmedecin = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idjoueur = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
