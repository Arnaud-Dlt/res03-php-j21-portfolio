<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $project = new Project();
        $project->setName('USSM');
        $project->setPrimaryTech('PHP');
        $project->setOptionalTech('JS');
        $project->setDescription("Site Offi USSM");
        $manager->persist($project);

        $manager->flush();
    }
}
