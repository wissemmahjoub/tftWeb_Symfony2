<?php  
namespace wyshy\UserBundle\Entity; 
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;  
  /** 
  * @ORM\Entity
  * @ORM\Table(name="fos_user")
  */
 class User extends BaseUser
 {
  /** 
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
     
      protected $id; 
     
  
/** 
* 
* @ORM\Column(type="string", length=255) 
*  
*/ 
protected $nom; 

/** 
* 
* @ORM\Column(type="string", length=255) 
*  
*/ 
protected $prenom; 



 /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", nullable=true)
     */
    private $facebookID;
 
    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", nullable=true)
     */
    private $googleID;
    
    
    function getFacebookID() {
        return $this->facebookID;
    }

    function getGoogleID() {
        return $this->googleID;
    }

    function setFacebookID($facebookID) {
        $this->facebookID = $facebookID;
    }

    function setGoogleID($googleID) {
        $this->googleID = $googleID;
    }

    
function getid() {
    return $this->id;
}

function getnom() {
    return $this->nom;
}

function getprenom() {
    return $this->prenom;
}

function setid($id) {
    $this->id = $id;
}

function setnom($nom) {
    $this->nom = $nom;
}

function setprenom($prenom) {
    $this->prenom = $prenom;
}


      
 }
 ?>