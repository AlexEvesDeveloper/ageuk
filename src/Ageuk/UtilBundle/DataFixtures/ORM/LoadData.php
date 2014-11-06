<?php

namespace Ageuk\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Ageuk\UtilBundle\Entity;

class LoadData implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$user = new Entity\SuperUser();
		$user->setUsername('super@test.com');
		$user->setPassword(password_hash('password', PASSWORD_BCRYPT, array('cost' => 12)));
		$user->setEmail('super@test.com');
		$manager->persist($user);

		$user = new Entity\AdminUser();
		$user->setUsername('admin@test.com');
		$user->setPassword(password_hash('password', PASSWORD_BCRYPT, array('cost' => 12)));
		$user->setEmail('admin@test.com');
		$manager->persist($user);

		$user = new Entity\DelegateUser();
		$user->setUsername('delegate@test.com');
		$user->setPassword(password_hash('password', PASSWORD_BCRYPT, array('cost' => 12)));
		$user->setEmail('delegate@test.com');
		$user->setFirstName('Delegate');
		$user->setLastName('User');
		$manager->persist($user);
		
		$manager->flush();
	}
}