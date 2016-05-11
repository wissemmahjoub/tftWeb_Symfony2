<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wyshy\UserBundle\Form ; 
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class StringToArrayTransformer implements DataTransformerInterface 
  
{          
    public function transform($array)     
            {         return $array[0];     }
            
    public function reverseTransform($string)     
            {         return array($string);       }
            }