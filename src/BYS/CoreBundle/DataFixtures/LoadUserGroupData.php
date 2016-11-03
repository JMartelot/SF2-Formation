<?php

namespace BYS\CoreBundle\DataFixtures;

use BYS\CoreBundle\Entity\UserGroup;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Created by PhpStorm.
 * User: jmartelot
 * Date: 03/11/2016
 * Time: 11:31
 */
class LoadUserGroupData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i<10; $i++){
            $userGroup = new UserGroup();
            $userGroup->setName('BYS');
            $userGroup->setOwner($this->getReference('person'));

            $manager->persist($userGroup);

            $this->addReference('user-group'.$i, $userGroup);
        }
        $manager->flush();


    }

    public function getOrder(){
        return 2;
    }
}