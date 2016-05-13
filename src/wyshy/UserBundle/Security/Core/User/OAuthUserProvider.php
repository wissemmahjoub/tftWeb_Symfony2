<?php
namespace wyshy\UserBundle\Security\Core\User;
 

use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\UserInterface;

class OAuthUserProvider extends BaseClass
{       
    /**
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $socialID = $response->getUsername();
        $user = $this->userManager->findUserBy(array($this->getProperty($response)=>$socialID));
        $email = $response->getEmail();
        $nickName = $response->getNickname(); 
        $profilePic = $response->getProfilePicture();
        $userName = $response->getFirstName(). " ".$response->getLastName() ;
        $userNom = $response->getFirstName() ;
        $userPrenom = $response->getLastName();
          
        
        
 
  
       

        //check if the user already has the corresponding social account
        if (null === $user) {
            //check if the user has a normal account
            $user = $this->userManager->findUserByEmail($email);
 
            if (null === $user || !$user instanceof UserInterface) {
                //if the user does not have a normal account, set it up:
                $user = $this->userManager->createUser();
             
                $user->setEmail($email);
                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(true);
                $user->addRole("ROLE_MEMBRE");
        
              
                $user->setnom($userNom); 
                $user->setprenom($userPrenom) ;
            }
            //then set its corresponding social id
            $service = $response->getResourceOwner()->getName();
            switch ($service) {
                case 'google':
                    $user->setGoogleID($socialID);
                    break;
                case 'facebook':
                    $user->setUsername($nickName);
                    $user->setFacebookID($socialID);
                    $nomPrenom = explode(" ", $nickName);
                    
                    $user->setnom($nomPrenom[1]); 
                    $user->setprenom($nomPrenom[0]) ;
                    break;
            }
         
            $this->userManager->updateUser($user);
        } else {
            //and then login the user
            $checker = new UserChecker();
            $checker->checkPreAuth($user);
        }
 
        return $user;
    }
}
 