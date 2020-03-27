<?php

namespace App\DataFixtures;

use App\Entity\Site;
use App\DataFixtures\ClientFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SiteFixture  extends BaseFixture implements DependentFixtureInterface
{
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(7, "Site", function ($count) {

            $site = new Site();
            $site->setName($this->faker->word);
            $site->setLink($this->faker->url);
            $site->setVersionPHP($this->faker->randomElement($array = array("7.0", "7.1", "7.2", "7.3", "7.4")));
            $site->setClient($this->getRandomReference("Client"));
            $site->setCreatedAt($this->faker->randomElement($array = array(new \DateTime("2020-03-27 14:46:46"), new \DateTime("2020-02-27 14:46:46"), new \DateTime("2020-03-23 14:46:46"), new \DateTime("2020-01-27 14:46:46"), new \DateTime("2019-01-27 14:46:46"))));

            return $site;
        });

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ClientFixture::class,
        ];
    }
}
