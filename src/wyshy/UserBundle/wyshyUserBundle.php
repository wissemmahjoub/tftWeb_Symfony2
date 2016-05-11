<?php

namespace wyshy\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class wyshyUserBundle extends Bundle
{
    public function getParent() {
       return 'FOSUserBundle';
    } 
}
