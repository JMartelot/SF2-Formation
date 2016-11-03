<?php
/**
 * Created by PhpStorm.
 * User: jcabridens
 * Date: 03/11/2016
 * Time: 11:54
 */

namespace BYS\CoreBundle\DataFixtures;


use BYS\CoreBundle\Entity\Availability;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAvailabilityData implements FixtureInterface
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
            $availability = new Availability();
            $availability->setDate($faker->date($format = 'Y-m-d', $max = 'now'));
            $availability->setIsPresent($faker->bool);
            $availability->setFreeFrom($faker->regexify('1[1-3]h[1-9][1-9]'));
            $availability->setMembership($this->getReference('membership').rand(0,10));

            $manager->persist($availability);

            $this->addReference('availability'.$i, $availability);
        }
        $manager->flush();


    }

    public function getOrder(){
        return 17;
    }
}