<?php

namespace wyshy\backNavBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PersonneRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonneRepository extends EntityRepository

{
 public function SelectRandom()
    {
      $max = $this->_em->createQuery('SELECT MAX(p.idpersonne)
                                FROM wyshybackNavBundle:personne p'
                                )->getSingleScalarResult();
      $sq = $this->_em->createQuery('SELECT p
                               FROM wyshybackNavBundle:personne p
                               WHERE p.idpersonne != :rand
                               AND p.etatInvit is Null 
                               AND p.role like :r '
                               )->setParameters(array('rand' => rand(1,$max),'r' => 'Joueur'))
                               
                               ->setMaxResults(4);

     return $sq->getResult();
    }
}