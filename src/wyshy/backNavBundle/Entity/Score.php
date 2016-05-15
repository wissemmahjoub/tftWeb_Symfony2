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



    /**
     * Get idscore
     *
     * @return integer 
     */
    public function getIdscore()
    {
        return $this->idscore;
    }

    /**
     * Set nbrsetj1
     *
     * @param integer $nbrsetj1
     * @return Score
     */
    public function setNbrsetj1($nbrsetj1)
    {
        $this->nbrsetj1 = $nbrsetj1;

        return $this;
    }

    /**
     * Get nbrsetj1
     *
     * @return integer 
     */
    public function getNbrsetj1()
    {
        return $this->nbrsetj1;
    }

    /**
     * Set nbrsetj2
     *
     * @param integer $nbrsetj2
     * @return Score
     */
    public function setNbrsetj2($nbrsetj2)
    {
        $this->nbrsetj2 = $nbrsetj2;

        return $this;
    }

    /**
     * Get nbrsetj2
     *
     * @return integer 
     */
    public function getNbrsetj2()
    {
        return $this->nbrsetj2;
    }

    /**
     * Set nbracej1
     *
     * @param integer $nbracej1
     * @return Score
     */
    public function setNbracej1($nbracej1)
    {
        $this->nbracej1 = $nbracej1;

        return $this;
    }

    /**
     * Get nbracej1
     *
     * @return integer 
     */
    public function getNbracej1()
    {
        return $this->nbracej1;
    }

    /**
     * Set nbracej2
     *
     * @param integer $nbracej2
     * @return Score
     */
    public function setNbracej2($nbracej2)
    {
        $this->nbracej2 = $nbracej2;

        return $this;
    }

    /**
     * Get nbracej2
     *
     * @return integer 
     */
    public function getNbracej2()
    {
        return $this->nbracej2;
    }

    /**
     * Set dblfautej1
     *
     * @param integer $dblfautej1
     * @return Score
     */
    public function setDblfautej1($dblfautej1)
    {
        $this->dblfautej1 = $dblfautej1;

        return $this;
    }

    /**
     * Get dblfautej1
     *
     * @return integer 
     */
    public function getDblfautej1()
    {
        return $this->dblfautej1;
    }

    /**
     * Set dblfautej2
     *
     * @param integer $dblfautej2
     * @return Score
     */
    public function setDblfautej2($dblfautej2)
    {
        $this->dblfautej2 = $dblfautej2;

        return $this;
    }

    /**
     * Get dblfautej2
     *
     * @return integer 
     */
    public function getDblfautej2()
    {
        return $this->dblfautej2;
    }
}
