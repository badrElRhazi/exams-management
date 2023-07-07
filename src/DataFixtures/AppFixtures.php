<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EtudiantFactory;
use App\Factory\ProfessorFactory;
use App\Factory\ModuleFactory;
use App\Factory\SemesterFactory;
use App\Factory\UserFactory;
use App\Factory\NoteFactory;
use App\Factory\FiliereFactory;

use function Zenstruck\Foundry\create_many;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        FiliereFactory::createMany(10);
        EtudiantFactory::createMany(10);
        ProfessorFactory::createMany(10);
        UserFactory::createMany(1);
        NoteFactory::createMany(10);
        ModuleFactory::createMany(10);
        SemesterFactory::createMany(10);

        $manager->flush();
    }
}
