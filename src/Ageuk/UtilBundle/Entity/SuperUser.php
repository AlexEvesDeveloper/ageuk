<?php

namespace Ageuk\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SuperUser extends User
{
    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_SUPER');
    }
}