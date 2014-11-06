<?php

namespace Ageuk\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SuperUser extends User
{
	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType()
	{
		return parent::TYPE_SUPER;
	}

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_SUPER');
    }
}
