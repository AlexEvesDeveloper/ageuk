<?php

namespace Ageuk\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class DelegateUser extends User
{
    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_DELEGATE');
    }
}