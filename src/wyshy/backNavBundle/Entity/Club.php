<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club", uniqueConstraints={@ORM\UniqueConstraint(name="idclub", columns={"idclub"}), @ORM\UniqueConstraint(name="libelle", columns={"libelleclub"})})
 * @ORM\Entity
 */
class Club
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleclub", type="string", length=50, nullable=false)
     */
    private $libelleclub;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=100, nullable=false)
     */
    private $avatar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedestruction", type="date", nullable=true)
     */
    private $datedestruction;

    /**
     * @var string
     *
     * @ORM\Column(name="siege", type="string", length=50, nullable=false)
     */
    private $siege;

    /**
     * @var string
     *
     * @ORM\Column(name="president", type="string", length=50, nullable=false)
     */
    private $president;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     */
    private $video;


}
