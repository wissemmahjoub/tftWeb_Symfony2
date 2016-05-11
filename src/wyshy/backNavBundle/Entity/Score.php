<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity
 */
class Score
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idscore", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idscore;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrsetj1", type="integer", nullable=false)
     */
    private $nbrsetj1;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrsetj2", type="integer", nullable=false)
     */
    private $nbrsetj2;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbracej1", type="integer", nullable=false)
     */
    private $nbracej1;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbracej2", type="integer", nullable=false)
     */
    private $nbracej2;

    /**
     * @var integer
     *
     * @ORM\Column(name="dblfautej1", type="integer", nullable=false)
     */
    private $dblfautej1;

    /**
     * @var integer
     *
     * @ORM\Column(name="dblfautej2", type="integer", nullable=false)
     */
    private $dblfautej2;


}
