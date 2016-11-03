<?php

namespace BYS\CoreBundle\DataFixtures;

use BYS\CoreBundle\Entity\Restaurant;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadRestaurantData
 * @package BYS\CoreBundle\DataFixtures
 */
class LoadRestaurantData implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i<10; $i++){
            $restaurant = new Restaurant();
            $restaurant->setName($faker->company);
            $restaurant->setGroup(($this->getReference('user-group')));

            $manager->persist($restaurant);

            $this->addReference('restaurant'.$i, $restaurant);
        }
        $manager->flush();
    }

    public function getOrder(){
        return 3;
    }
}