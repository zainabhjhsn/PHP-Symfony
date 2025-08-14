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
        $project->setName('Project 1');
        $project->setDescription('Description for Project 1');
        $project->setStartDate(new \DateTime('2025-01-01'));
        $project->setStatus('pending');
        $project->setBudget(5000);
        $manager->persist($project);

        $project = new Project();
        $project->setName('Project 2');
        $project->setDescription('Description for Project 2');
        $project->setStartDate(new \DateTime('2025-02-01'));
        $project->setEndDate(new \DateTime('2025-08-14'));
        $project->setStatus('active');
        $project->setBudget(10000);
        $manager->persist($project);

        $project = new Project();
        $project->setName('Project 3');
        $project->setDescription('Description for Project 3');
        $project->setStartDate(new \DateTime('2025-02-01'));
        $project->setEndDate(new \DateTime('2025-12-31'));
        $project->setStatus('completed');
        $project->setBudget(15000);

        $manager->persist($project);

        $manager->flush();
    }
}
