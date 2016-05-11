<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stade
 *
 * @ORM\Table(name="stade", uniqueConstraints={@ORM\UniqueConstraint(name="libellestade", columns={"libellestade"})})
 * @ORM\Entity
 */
class Stade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idstade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstade;

    /**
     * @var string
     *
     * @ORM\Column(name="libellestade", type="string", length=20, nullable=false)
     */
    private $libellestade;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=100, nullable=true)
     */
    private $avatar;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=20, nullable=false)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=50, nullable=false)
     */
    private $surface;

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
     * Set idstade
     *
     * @param integer $idstade
     * @return Stade
     */
    public function setIdstade($idstade)
    {
        $this->idstade = $idstade;

        return $this;
    }

    /**
     * Get idstade
     *
     * @return integer 
     */
    public function getIdstade()
    {
        return $this->idstade;
    }

    /**
     * Set libellestade
     *
     * @param string $libellestade
     * @return Stade
     */
    public function setLibellestade($libellestade)
    {
        $this->libellestade = $libellestade;

        return $this;
    }

    /**
     * Get libellestade
     *
     * @return string 
     */
    public function getLibellestade()
    {
        return $this->libellestade;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Stade
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Stade
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Stade
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Stade
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return Stade
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set surface
     *
     * @param string $surface
     * @return Stade
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return string 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     * @return Stade
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set datedestruction
     *
     * @param \DateTime $datedestruction
     * @return Stade
     */
    public function setDatedestruction($datedestruction)
    {
        $this->datedestruction = $datedestruction;

        return $this;
    }

    /**
     * Get datedestruction
     *
     * @return \DateTime 
     */
    public function getDatedestruction()
    {
        return $this->datedestruction;
    }
}
