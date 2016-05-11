<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnes
 *
 * @ORM\Table(name="abonnes", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})})
 * @ORM\Entity
 */
class Abonnes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idabonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonne;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;


}
