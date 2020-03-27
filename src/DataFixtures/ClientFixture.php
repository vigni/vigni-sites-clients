<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Common\Persistence\ObjectManager;

class ClientFixture extends BaseFixture 
{
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(10, "Client", function ($count) {

            $client = new Client();
            $client->setNameCompany($this->faker->company);
            $client->setContactName($this->faker->firstName('male' | 'female'));
            $client->setEmailContact($this->faker->email);
            $client->setMobile("06" . $this->faker->randomNumber($nbDigits = 8, $strict = false));
            $client->setCreatedAt($this->faker->randomElement($array = array(new \DateTime("2020-03-27 14:46:46"), new \DateTime("2020-02-27 14:46:46"), new \DateTime("2020-03-23 14:46:46"), new \DateTime("2020-01-27 14:46:46"), new \DateTime("2019-01-27 14:46:46"))));

            return $client;
        });

        $manager->flush();
    }


}
